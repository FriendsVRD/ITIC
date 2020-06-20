<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingCart;
use Session;
use App\InShoppingCart;
class InShoppingCartsController extends Controller
{
    public function __construct(){
        $this->middleware("shoppingcart");
        }
    
    public function store(Request $request)
    {
        $shopping_cart = $request->shopping_cart;

        $response = InShoppingCart::create([
            "shopping_cart_id" => $shopping_cart->id,
             "productos_id_producto" => $request->id_producto

        ]);

        Session::flash('message','Nuevo Producto agregado al carrito de compras');
        if($response){
            return redirect('/carrito');
        }else{
            return back();
        }
    }
    public function destroy($id)
    {
        InShoppingCart::destroy($id);
        Session::flash('message','Producto eliminado correctamente ');
        return redirect('/carrito');
    }
}
