<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ShoppingCart;
class ShoppingCartProvider extends ServiceProvider
{
    
    public function register()
    {
        view()->composer("*",function($view){

            $shopping_cart_id = \Session::get('shopping_cart_id');
            $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);
            \Session::put("shopping_cart_id", $shopping_cart->id);
    
            $view->with("productsCount", $shopping_cart->productsSize());
            //$view->with("cartasCount", $shopping_cart->productsSize());
    
            });
    }

    
    public function boot()
    {
        //
    }
}
