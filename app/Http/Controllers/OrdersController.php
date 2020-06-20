<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Session;

class OrdersController extends Controller
{
    public function index()
    {
      $orders = Order::latest()->get();
      $totalMonth = Order::totalMonth();
      $totalMonthCount = Order::totalMonthCount();
      
      return view('orders.index',['orders'=>$orders,'totalMonth'=>$totalMonth,'totalMonthCount'=>$totalMonthCount]);
   
    }

   
  
  
    public function update(Request $request, $id)
    {
      $sesionid = Session::get('sesionid');
       
       
      if ( $sesionid=="")
      {
       Session::flash('error', 'Es necesario iniciar sesion antes de continuar');
       return redirect()->route('iniciar_secion');
      }
      
      else
      {
        $order = Order::find($id);
        $field = $request->name;
        $order->$field = $request->value;
        $order->save();
        return $order->$field;
    }
  }
}
