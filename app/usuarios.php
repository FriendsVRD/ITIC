<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $table="usuarios";
    protected $fillable=['nombre_user', 'ap_user', 'am_user', 'direccion_user','fnac_user', 'telefono_user', 'tipo_user', 'email_user',  'password_user'];
    protected $primaryKey = 'id_user';
}
