<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InShoppingCart extends Model
{
   
    protected $fillable=['id','productos_id_producto','shopping_cart_id'];
   
}
