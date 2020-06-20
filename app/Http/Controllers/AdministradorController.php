<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

use Mail;
use Session;
use AuthenticatesUsers;
use Cookie;


class AdministradorController extends Controller
{
    //Login - Formulario y Accseso

    public function Login()
    {
        
    	return view('login.administrador.login');
    }

    public function LoginAdmin(Request $request)
    {
    	$nombre = $request->nombre;
        $password =$request->password;

        //validar
        $validacion = $this->validate(request(),[

            'nombre_user' => 'required',
            'email_user' => 'required',
            'password_user' => 'required',

        ]);

        $nombre     =   $request ['nombre_user'];
        $email      =   $request ['email_user'];
        $password   =   $request ['password_user'];

        $accseso = DB::SELECT("CALL acceso_admin('$nombre', '$email', '$password')");

        if(isset($_COOKIE["BLOCK_".$nombre])){
            echo "<script>alert('has sido bloqueado temporalmente por 5 min');</script>"; 

            return view('login.administrador.login');
            

        }else{
            if(count($accseso) !=0){

                Session::put('sesionname', $accseso[0]->nombre_user);
                return redirect('Index1');

            }else{
                    if(isset($_COOKIE["$nombre"])){
                        $cont = $_COOKIE["$nombre"];
                        $cont++;
                        setcookie($nombre,$cont,time()+120);

                        if($cont >=3){
                            setcookie("BLOCK_".$nombre, $cont, time()+300);
                        }
                    }else{
                        setcookie($nombre,1,time()+120);
                    }

                    echo "<script>alert('Intruso');</script>";
                    return view('login.administrador.login');    
            }

            echo "intruso";
        }
    }

    //Cerrar Sesion

    public function CerrarSesion()
    {
    	Session::flush();
        Session::flash('error','Sesión Cerrada');
        return redirect('Administrador');
    }

    //recuperar contraseña - Formulario y Correo

    public function IndexRecuperar()
    {
        return view('login.administrador.recuperar');
    }

    public function ResetPw(Request $request)
    {
        $datos = $this->validate(request(),[

            'email_user' => 'required',
        ]);

        $enc = DB::select("SELECT id_user, email_user FROM usuarios WHERE tipo_user = 'Administrador'");

        $e=0;

       foreach($enc as $encs){

            if($encs->email_user == $request['email_user']){
            //echo "Correo Encontrado";

            $datos['dest'] = $request['email_user'];
            $cad='ABCDEFGHIJKLMNOPQRSTUVWXYZ_0123456789/*';
            $datos['password_user'] = substr(str_shuffle($cad),5,10);
            $pw_enc = $datos['password_user'];
            $datos['nombre_user']=$request['nombre_user']; 

            DB::select("UPDATE usuarios SET password_user = '$pw_enc' WHERE id_user = $encs->id_user");

            Mail::send('login.administrador.correo',['datos'=>$datos],
            function($m) use($datos){
                $m->to($datos['dest'])
                ->subject('Restablecimiento de contraseña');
            });

            echo "<script>alert('Tu contraseña ha sido enviada, revisa tu correo.');</script>";
            return redirect('Administrador');
     
            $e = 1;
            exit;
            }
        }

        if ($e!=1) {
            echo "<script>
                    alert('Nombre o Correo no encontrado');
                  </script>";
            return back();
       }
    }
}
