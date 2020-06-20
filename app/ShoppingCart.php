<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable = ["status"];

    public function productsSize(){
        return $this->products()->count();
    }


    public function generateCustomID(){
        return md5("$this->id $this->updated_at");
    }
    
   
    public function updateCustomIDAndStatus(){
        $this->status ="aprovado"; 
        $this->customid = $this->generateCustomID();
        $this->save();
    }

    public function approve(){
        $this->updateCustomIDAndStatus();
    }
    public function order(){
        return $this->hasOne("App\Order")->first();
    }
    
    public function total(){
        return $this->products()->sum("costo_producto");
    }

    Public function totalMX(){
        return $this->total() / 19;
     }
 

    public function inShoppingCarts(){
        return $this->hasMany('App\InShoppingCart');
    }

    public function products(){
        return $this->belongsToMany('App\productos','in_shopping_carts')
        ->withPivot('id');
    }

    public static function findOrCreateBySessionID($shopping_cart_id){

        if($shopping_cart_id)
        return ShoppingCart::findBySession($shopping_cart_id);
        else 
        return ShoppingCart::createWithoutSession();
    }

    public static function findBySession($shopping_cart_id){
        return ShoppingCart::find($shopping_cart_id);
    }
    
    public static function createWithoutSession(){
        return ShoppingCart::create([
            "status"=>"incompleted"

        ]);
       
    }
    

}
