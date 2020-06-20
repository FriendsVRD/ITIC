<?php

namespace App\Http\Controllers;

use App\usuarios;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;

class UsuariosController extends Controller
{
    //Super Usuario
    public function index(Request $request)
    {
        $crit = $request['criterio'];
        $users = DB::SELECT("CALL read_usuarios('$crit')");

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($users);
        $perPage = 4;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url());

        
        return view('login.superUsuario.usuarios.index', ['criterio'=>$crit, 'users' => $paginatedItems]);
    }

    public function create()
    {
        return view('login.superUsuario.usuarios.alta');
    }

    public function store(Request $request)
    {
        $nombre         =   $request['nombre_user'];
        $ap             =   $request['ap_user'];
        $am             =   $request['am_user'];
        $direccion      =   $request['direccion_user'];
        $fnac           =   $request['fnac_user'];
        $sexo           =   $request['sexo_user'];
        $telefono       =   $request['telefono_user'];
        $tipo           =   $request['tipo_user'];
        $email          =   $request['email_user'];
        $password       =   $request['password_user'];

        DB::SELECT("select insertar_usuarios('$nombre', '$ap', '$am', '$direccion', '$fnac', '$sexo', '$telefono' , '$tipo' , '$email' , '$password')");

        return redirect('Usuarios');
    }
    
    public function edit($usuarios)
    {
        $usuarios  = \App\usuarios::find($usuarios);
        return view('login.superUsuario.usuarios.edit', ['usuarios'=>$usuarios]);
    }

    public function update(Request $request, usuarios $usuarios)
    {
        $nombre         =   $request['nombre_user'];
        $ap             =   $request['ap_user'];
        $am             =   $request['am_user'];
        $direccion      =   $request['direccion_user'];
        $fnac           =   $request['fnac_user'];
        $sexo           =   $request['sexo_user'];
        $telefono       =   $request['telefono_user'];
        $tipo           =   $request['tipo_user'];
        $email          =   $request['email_user'];
        $password       =   $request['password_user'];

        $id_use         =   $request['id_user'];

        DB::SELECT("CALL update_usuarios('$nombre', '$ap', '$am', '$direccion', '$fnac', '$sexo', '$telefono' , '$tipo' , '$email' , '$password', $id_use)");

        return redirect('Usuarios');
    }

    ////////////////////////////////////////////////////////////////////

    //Administrador
    public function index1(Request $request)
    {
        $crit = $request['criterio'];
        $users = DB::SELECT("CALL read_usuarios('$crit')");

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($users);
        $perPage = 4;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url());

        
        return view('login.administrador.usuarios.index', ['criterio'=>$crit, 'users' => $paginatedItems]);
    }

    public function create1()
    {
        return view('login.administrador.usuarios.alta');
    }

    public function store1(Request $request)
    {
        $nombre         =   $request['nombre_user'];
        $ap             =   $request['ap_user'];
        $am             =   $request['am_user'];
        $direccion      =   $request['direccion_user'];
        $fnac           =   $request['fnac_user'];
        $sexo           =   $request['sexo_user'];
        $telefono       =   $request['telefono_user'];
        $tipo           =   $request['tipo_user'];
        $email          =   $request['email_user'];
        $password       =   $request['password_user'];

        DB::SELECT("select insertar_usuarios('$nombre', '$ap', '$am', '$direccion', '$fnac', '$sexo', '$telefono' , '$tipo' , '$email' , '$password')");

        return redirect('Usuarios1');
    }

    public function edit1($usuarios)
    {
        $usuarios  = \App\usuarios::find($usuarios);
        return view('login.administrador.usuarios.edit', ['usuarios'=>$usuarios]);
    }

    public function update1(Request $request, usuarios $usuarios)
    {
        $nombre         =   $request['nombre_user'];
        $ap             =   $request['ap_user'];
        $am             =   $request['am_user'];
        $direccion      =   $request['direccion_user'];
        $fnac           =   $request['fnac_user'];
        $sexo           =   $request['sexo_user'];
        $telefono       =   $request['telefono_user'];
        $tipo           =   $request['tipo_user'];
        $email          =   $request['email_user'];
        $password       =   $request['password_user'];

        $id_use         =   $request['id_user'];

        DB::SELECT("CALL update_usuarios('$nombre', '$ap', '$am', '$direccion', '$fnac', '$sexo', '$telefono' , '$tipo' , '$email' , '$password', $id_use)");

        return redirect('Usuarios1');
    }

    //Usuarios Comunes
    //No puede ver usuarios
}

