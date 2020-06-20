<?php

namespace App;

class Paypal    
{
    private $_apiContext;
    private $shopping_cart;
    private $_ClientId =  "AfhUQOGWMdnYpzgQT7BrR591hEN2shzywEIMlrRERBDSDrvfRehiVmkbWd0hEZh4-3-cdJZkAhQ1x9JO" ;
    private $_ClientSecret = "EID9Sjyhn5VZ0A0b3EfwDsa3CGbGVSAiUCtWEzfY3V4fVMLnIPywPZYyP4JEIlNVSYXMYyqWEpJiitPw";



    public function __construct($shopping_cart){
    	$this->_apiContext =\PaypalPayment::ApiContext($this->_ClientId,$this->_ClientSecret);

        $config = config("paypal_payment");
    	$flatConfig = array_dot($config);
    	$this->_apiContext->setConfig($flatConfig);
    	$this->shopping_cart = $shopping_cart;
    }


    //-------------------------------------------------------------------------------------------------------------------------

    public function generate(){

        $payment = \PaypalPayment::payment()->setIntent("sale")
                   ->setPayer($this->payer())
                   ->setTransactions([$this->transaction()])
                   ->setRedirectUrls($this->redirectUrls());
                   
           try{
               $payment->create($this->_apiContext);
           } catch(\Exception $ex){
               dd($ex);
               exit(1);
           }
           return $payment;

      }

    public function payer(){
        return \PaypalPayment::payer()
        ->setPaymentMethod("paypal");
        }

        public function redirectUrls(){
            $baseURL = url('/');
            return \PaypalPayment::redirectUrls()
                                ->setReturnUrl("$baseURL/payments/store")
                                    ->setCancelUrl("$baseURL/carrito");
        }
        public function transaction(){
                    return \PaypalPayment::transaction()
                    ->setAmount($this->amount())
                    ->setItemList($this->items())
                    ->setDescription("Tu compra CAFETERIA FRIENDS")
                    ->setInvoiceNumber(uniqid());
        }
        public function items(){
            $items=[];
            $products = $this->shopping_cart->products()->get();
            foreach ($products as $product){
                array_push($items, $product->paypalItem());
            }
            return \PaypalPayment::itemList()->setItems($items);
        }

    
            public function amount(){
                return \PaypalPayment::amount()->setCurrency("USD")
                ->setTotal($this->shopping_cart->totalMX());
        }

        public function execute($paymentId,$payerId){
            $payment = \PaypalPayment::getById($paymentId,$this->_apiContext);
    
            $execution = \PaypalPayment::PaymentExecution()
                                    ->setPayerId($payerId);
        return $payment->execute($execution,$this->_apiContext);
        }



}