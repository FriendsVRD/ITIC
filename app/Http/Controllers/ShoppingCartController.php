<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingCart;
use App\Paypal;
use App\productos;
use App\Order;

class ShoppingCartController extends Controller
{

      
    public function __construct(){
        $this->middleware("shoppingcart");
        }
           
    public function index(Request $request){

      $shopping_cart = $request->shopping_cart;
       $products = $shopping_cart->products()->get();
       $total = $shopping_cart->total();
       return view("shopping_carts.index",["products" => $products,"total"=>$total]);
 
     

    }


    public function show($id){
      $shopping_cart = ShoppingCart::where('customid',$id)->first();
      $order = $shopping_cart->order();
      return view("shopping_carts.confirmacion",["shopping_cart"=>$shopping_cart,"order"=>$order]);
     }

     public function checkout(Request $request)
     {

      $shopping_cart = $request->shopping_cart;
      $paypal = new Paypal($shopping_cart);
      $payment = $paypal->generate();
      return redirect($payment->getApprovalLink());
     }

}
