<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $table="productos";
    protected $fillable=['nombre_producto', 'cantidad_producto', 'costo_producto', 'descripcion_producto', 'archivo_producto', 'activo_producto'];
    protected $primaryKey = 'id_producto';


    public function paypalItem(){
        return \PaypalPayment::item()
                                    ->setName($this->nombre_producto)
                                    ->setDescription($this->descripcion_producto)
                                    ->setCurrency('USD')
                                    ->setQuantity(1)
                                    ->setPrice($this->total /19);
                        
    
        }
    
}
