<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table="clientes";
    protected $fillable=['nombre_cliente', 'ap_cliente', 'am_cliente', 'direccion_cliente','fnac_cliente', 'sexo_cliente', 'telefono_cliente',  'activo_cliente'];
    protected $primaryKey = 'id_cliente';
}
