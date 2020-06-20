<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avisos extends Model
{
    protected $table="avisos";
    protected $fillable=['nombre_aviso',
    					 'tipo_aviso',
    					 'descripcion_aviso', 
    					 'archivo_aviso', 
    					 'activo_aviso'];
    protected $primaryKey = 'id_aviso';
}
