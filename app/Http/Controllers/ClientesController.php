<?php

namespace App\Http\Controllers;

use App\clientes;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;

class ClientesController extends Controller
{
    //Super Usuario
    public function index(Request $request)
    {
        $crit = $request['criterio'];
        $clientes = DB::SELECT("CALL read_clientes('$crit')");

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($clientes);
        $perPage = 4;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url());
        
        return view('login.superUsuario.clientes.index', ['criterio'=>$crit, 'clientes' => $paginatedItems]);
    }

    public function create()
    {
        return view('login.superUsuario.clientes.alta');
    }

    public function store(Request $request)
    {
        $nombre         =   $request['nombre_cliente'];
        $ap             =   $request['ap_cliente'];
        $am             =   $request['am_cliente'];
        $direccion      =   $request['direccion_cliente'];
        $fnac           =   $request['fnac_cliente'];
        $sexo           =   $request['sexo_cliente'];
        $telefono       =   $request['telefono_cliente'];
        $activo         =   $request['activo_cliente'];

        DB::SELECT("select insertar_clientes('$nombre', '$ap', '$am', '$direccion', '$fnac', '$sexo', '$telefono' , $activo)");

        return redirect('Clientes');
    }

    public function show($clientes)
    {
        DB::SELECT("UPDATE clientes SET activo_cliente = 0 WHERE id_cliente = $clientes");
        
        return redirect('Clientes');
    }

    public function edit($clientes)
    {
        $clientes  = \App\clientes::find($clientes);
        return view('login.superUsuario.clientes.edit', ['clientes'=>$clientes]);
    }

    public function update(Request $request, clientes $clientes)
    {
        $nombre         =   $request['nombre_cliente'];
        $ap             =   $request['ap_cliente'];
        $am             =   $request['am_cliente'];
        $direccion      =   $request['direccion_cliente'];
        $fnac           =   $request['fnac_cliente'];
        $sexo           =   $request['sexo_cliente'];
        $telefono       =   $request['telefono_cliente'];
        $activo         =   $request['activo_cliente'];

        $id_client     =   $request['id_cliente'];

        DB::SELECT("CALL update_clientes('$nombre', '$ap', '$am', '$direccion', '$fnac', '$sexo', '$telefono', $activo, $id_client)");

        return redirect('Clientes');
    }

    //Administrador
    public function index1(Request $request)
    {
        $crit = $request['criterio'];
        $clientes = DB::SELECT("CALL read_clientes('$crit')");

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($clientes);
        $perPage = 4;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url());
        
        return view('login.administrador.clientes.index', ['criterio'=>$crit, 'clientes' => $paginatedItems]);
    }

    public function create1()
    {
        return view('login.administrador.clientes.alta');
    }

    public function store1(Request $request)
    {
        $nombre         =   $request['nombre_cliente'];
        $ap             =   $request['ap_cliente'];
        $am             =   $request['am_cliente'];
        $direccion      =   $request['direccion_cliente'];
        $fnac           =   $request['fnac_cliente'];
        $sexo           =   $request['sexo_cliente'];
        $telefono       =   $request['telefono_cliente'];
        $activo         =   $request['activo_cliente'];

        DB::SELECT("select insertar_clientes('$nombre', '$ap', '$am', '$direccion', '$fnac', '$sexo', '$telefono' , $activo)");

        return redirect('Clientes1');
    }

    public function show1($clientes)
    {
        DB::SELECT("UPDATE clientes SET activo_cliente = 0 WHERE id_cliente = $clientes");
        
        return redirect('Clientes1');
    }

    public function edit1($clientes)
    {
        $clientes  = \App\clientes::find($clientes);
        return view('login.administrador.clientes.edit', ['clientes'=>$clientes]);
    }

    public function update1(Request $request, clientes $clientes)
    {
        $nombre         =   $request['nombre_cliente'];
        $ap             =   $request['ap_cliente'];
        $am             =   $request['am_cliente'];
        $direccion      =   $request['direccion_cliente'];
        $fnac           =   $request['fnac_cliente'];
        $sexo           =   $request['sexo_cliente'];
        $telefono       =   $request['telefono_cliente'];
        $activo         =   $request['activo_cliente'];

        $id_client     =   $request['id_cliente'];

        DB::SELECT("CALL update_clientes('$nombre', '$ap', '$am', '$direccion', '$fnac', '$sexo', '$telefono', $activo, $id_client)");

        return redirect('Clientes1');
    }
}
