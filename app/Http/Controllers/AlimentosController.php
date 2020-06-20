<?php

namespace App\Http\Controllers;

use App\alimentos;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;

class AlimentosController extends Controller
{
    //Super Usuario
    public function index(Request $request)
    {
        $crit = $request['criterio'];
        $alimentos = DB::SELECT("CALL read_alimentos('$crit')");

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($alimentos);
        $perPage = 4;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url());

        return view('login.superUsuario.alimentos.index', ['criterio'=>$crit, 'alimentos' => $paginatedItems]);

    }

    public function create()
    {
        return view('login.superUsuario.alimentos.alta');
    }

    public function store(Request $request)
    {
        //return $request;
        if ($request->hasFile('archivo_alimento')) {
            $file = $request->file('archivo_alimento');
            $ruta = public_path().'/images_alimentos';
            //$name = uniqid().$file->getClientOriginalName();
            $name = time().$file->getClientOriginalName();

            $file->move($ruta, $name);
        }

        $nombre         =   $request['nombre_alimento'];
        $cantidad       =   $request['cantidad_alimento'];
        $costo          =   $request['costo_alimento'];
        $descripcion    =   $request['descripcion_alimento'];
        $escala         =   $request['escala_alimento'];
        $archivo        =   $name;
        $activo         =   $request['activo_alimento'];

        DB::SELECT("select insertar_alimentos('$nombre', '$cantidad', '$costo', '$descripcion', '$escala', '$archivo', '$activo')");

        return redirect('Alimentos');
    }

    public function show($alimentos)
    {
        DB::SELECT("UPDATE alimentos SET activo_alimento = 0 WHERE id_alimento = $alimentos");
        
        return redirect('Alimentos');
    }

    public function edit($alimentos)
    {
        $alimentos  = \App\alimentos::find($alimentos);
        return view('login.superUsuario.alimentos.edit', ['alimentos'=>$alimentos]);
    }

    public function update(Request $request, alimentos $alimentos)
    {

        $nombre         =   $request['nombre_alimento'];
        $cantidad       =   $request['cantidad_alimento'];
        $costo          =   $request['costo_alimento'];
        $descripcion    =   $request['descripcion_alimento'];
        $escala         =   $request['escala_alimento'];
        $activo         =   $request['activo_alimento'];

        $id_aliment     =   $request['id_alimento'];

        DB::SELECT("CALL update_alimentos('$nombre', '$cantidad', '$costo', '$descripcion', '$escala', $activo, $id_aliment)");

        return redirect('Alimentos');
    }

    //Administrador
    public function index1(Request $request)
    {
        $crit = $request['criterio'];
        $alimentos = DB::SELECT("CALL read_alimentos('$crit')");

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($alimentos);
        $perPage = 4;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url());

        return view('login.administrador.alimentos.index', ['criterio'=>$crit, 'alimentos' => $paginatedItems]);

    }

    public function create1()
    {
        return view('login.administrador.alimentos.alta');
    }

    public function store1(Request $request)
    {
        //return $request;
        if ($request->hasFile('archivo_alimento')) {
            $file = $request->file('archivo_alimento');
            $ruta = public_path().'/images_alimentos';
            //$name = uniqid().$file->getClientOriginalName();
            $name = time().$file->getClientOriginalName();

            $file->move($ruta, $name);
        }

        $nombre         =   $request['nombre_alimento'];
        $cantidad       =   $request['cantidad_alimento'];
        $costo          =   $request['costo_alimento'];
        $descripcion    =   $request['descripcion_alimento'];
        $escala         =   $request['escala_alimento'];
        $archivo        =   $name;
        $activo         =   $request['activo_alimento'];

        DB::SELECT("select insertar_alimentos('$nombre', '$cantidad', '$costo', '$descripcion', '$escala', '$archivo', '$activo')");

        return redirect('Alimentos1');
    }

    public function show1($alimentos)
    {
        DB::SELECT("UPDATE alimentos SET activo_alimento = 0 WHERE id_alimento = $alimentos");
        
        return redirect('Alimentos1');
    }

    public function edit1($alimentos)
    {
        $alimentos  = \App\alimentos::find($alimentos);
        return view('login.administrador.alimentos.edit', ['alimentos'=>$alimentos]);
    }

    public function update1(Request $request, alimentos $alimentos)
    {

        $nombre         =   $request['nombre_alimento'];
        $cantidad       =   $request['cantidad_alimento'];
        $costo          =   $request['costo_alimento'];
        $descripcion    =   $request['descripcion_alimento'];
        $escala         =   $request['escala_alimento'];
        $activo         =   $request['activo_alimento'];

        $id_aliment     =   $request['id_alimento'];

        DB::SELECT("CALL update_alimentos('$nombre', '$cantidad', '$costo', '$descripcion', '$escala', $activo, $id_aliment)");

        return redirect('Alimentos1');
    }

    //Usuario Comun
    public function index2(Request $request)
    {
        $crit = $request['criterio'];
        $alimentos = DB::SELECT("CALL read_alimentos('$crit')");

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($alimentos);
        $perPage = 4;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url());

        return view('login.usuario.alimentos.index', ['criterio'=>$crit, 'alimentos' => $paginatedItems]);

    }
}
