<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

use Crypt;
use Mail;
use Session;

class ContactoController extends Controller
{
    public function IndexComentario()
    {
        return view('Contacto.vistaContacto');
    }

    public function EnviarComentario(Request $request)
    {
        $datos = $this->validate(request(),[

            'nombre' => 'required',
            'email' => 'required',
            'comentario' => 'required',
        ]);

        $datos['nombre']=$request['nombre'];
        $datos['email']=$request['email'];
        $datos['comentario']=$request['comentario'];
    
        Mail::send('Contacto.mensaje',['datos'=>$datos],
        function($m) use($datos){
            $m->to('administrador@mycoffefriends.com')
            //
            ->subject('Duda o Comentarios');
        });

        echo "<script>alert('Duda enviada');</script>";
        return redirect('Comentarios');
        exit;
    }
}
