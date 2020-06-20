<?php

namespace App\Http\Controllers;

use App\avisos;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;

class AvisosController extends Controller
{
    
    public function indexsistema(Request $request)
    {
        //$crit = $request['criterio'];
        //$avisos = DB::SELECT("CALL read_avisos('$crit')");
        $avisos = DB::SELECT("SELECT * FROM avisos WHERE tipo_aviso = 'Aviso' ");
        $promociones = DB::SELECT("SELECT * FROM avisos WHERE tipo_aviso = 'Promocion' ");

        // $currentPage = LengthAwarePaginator::resolveCurrentPage();
        // $itemCollection = collect($avisos);
        // $perPage = 3;
        // $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        // $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        // $paginatedItems->setPath($request->url());

        return view('login.administrador.avisos.index', compact('avisos', 'promociones'));
    }

    public function indexweb()
    {
        $avisos = DB::SELECT("SELECT * FROM avisos ");

        return view('welcome3', compact('avisos'));
    }

    public function create()
    {
        return view('login.administrador.avisos.alta');
    }

    
    public function store(Request $request)
    {
        //return $request;
        if ($request -> hasFile('archivo_aviso')) {
            $file =     $request->file('archivo_aviso');
            $ruta =     public_path().'/images_aviso';
            //$name = uniqid().$file->getClientOriginalName();
            $name = time().$file->getClientOriginalName();

            $file->move($ruta, $name);
        }
        
        $tipo           =   $request['tipo_aviso'];
        $nombre         =   $request['nombre_aviso'];
        $descripcion    =   $request['descripcion_aviso'];
        $archivo        =   $name;
        $activo         =   $request['activo_aviso'];

        DB::SELECT("select insertar_avisos('$tipo', '$nombre', '$descripcion', '$archivo', $activo)");

        return redirect('AvisoSistema');
    }

    public function show($avisos)
    {
        DB::SELECT("UPDATE avisos SET activo_aviso = 0 WHERE id_aviso = $avisos");
        
        return redirect('Avisos');
    }

    public function edit($avisos)
    {

        $avisos  = \App\avisos::find($avisos);
        return view('login.adiministrador.avisos.edit', ['avisos'=>$avisos]);

    }

    public function update(Request $request, avisos $avisos)
    {
        $nombre         =   $request['nombre_aviso'];
        $descripcion    =   $request['descripcion_aviso'];
        $archivo        =   $name;
        $activo         =   $request['activo_aviso'];

        $id_avi     =   $request['id_aviso'];

        DB::SELECT("select insertar_avisos(
            '$nombre',
            '$descripcion', 
            '$archivo',
            '$activo',
            $id_avi)");

        return redirect('Avisos');
    }

    public function destroy($avisos)
    {
        //
    }

    // public function cargarAvisos(Request $request){

    //     if ($request->ajax()) {
    //         $avisos = DB::table('avisos as v')
    //         ->select('v.*')
    //         ->get();
    //     }
    //     return response()->json($avisos);
    // }

}