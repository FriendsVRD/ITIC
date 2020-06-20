<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alimentos extends Model
{
    protected $table="alimentos";
    protected $fillable=['nombre_alimento', 'cantidad_alimento', 'costo_alimento', 'descripcion_alimento', 'escala_alimento', 'archivo_alimento', 'activo_alimento'];
    protected $primaryKey = 'id_alimento';
}
