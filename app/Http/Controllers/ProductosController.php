<?php

namespace App\Http\Controllers;

use App\productos;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductosController extends Controller
{
    //Super usuario
    public function index(Request $request)
    {
        $crit = $request['criterio'];
        $productos = DB::SELECT("CALL read_productos('$crit')");

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($productos);
        $perPage = 4;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url());
        
        return view('login.superUsuario.productos.index', ['criterio'=>$crit, 'productos' => $paginatedItems]);
    }

    public function create()
    {
        return view('login.superUsuario.productos.alta');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('archivo_producto')) {
            $file = $request->file('archivo_producto');
            $ruta = public_path().'/images_productos';
            //$name = uniqid().$file->getClientOriginalName();
            $name = time().$file->getClientOriginalName();

            $file->move($ruta, $name);
        }

        $nombre         =   $request['nombre_producto'];
        $cantidad       =   $request['cantidad_producto'];
        $costo          =   $request['costo_producto'];
        $descripcion    =   $request['descripcion_producto'];
        $archivo        =   $name;
        $activo         =   $request['activo_producto'];

        DB::SELECT("select insertar_productos('$nombre', '$cantidad', '$costo', '$descripcion', '$archivo', $activo)");

        return redirect('Productos');
    }

    public function show($productos)
    {
        DB::SELECT("UPDATE productos SET activo_producto = 0 WHERE id_producto = $productos");
        
        return redirect('Productos');
    }

    public function edit($productos)
    {
        $productos  = \App\productos::find($productos);
        return view('login.superUsuario.productos.edit', ['productos'=>$productos]);
    }

    public function update(Request $request, productos $productos)
    {
        $nombre         =   $request['nombre_producto'];
        $cantidad       =   $request['cantidad_producto'];
        $costo          =   $request['costo_producto'];
        $descripcion    =   $request['descripcion_producto'];
        $activo         =   $request['activo_producto'];

        $id_product     =   $request['id_producto'];

        DB::SELECT("CALL update_productos('$nombre', '$cantidad', '$costo', '$descripcion', $activo, $id_product)");

        return redirect('Productos');
    }


    //Administrador
    public function index1(Request $request)
    {
        $crit = $request['criterio'];
        $productos = DB::SELECT("CALL read_productos('$crit')");

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($productos);
        $perPage = 4;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url());
        
        return view('login.administrador.productos.index', ['criterio'=>$crit, 'productos' => $paginatedItems]);
    }

    public function create1()
    {
        return view('login.administrador.productos.alta');
    }

    public function store1(Request $request)
    {
        if ($request->hasFile('archivo_producto')) {
            $file = $request->file('archivo_producto');
            $ruta = public_path().'/images_productos';
            //$name = uniqid().$file->getClientOriginalName();
            $name = time().$file->getClientOriginalName();

            $file->move($ruta, $name);
        }

        $nombre         =   $request['nombre_producto'];
        $cantidad       =   $request['cantidad_producto'];
        $costo          =   $request['costo_producto'];
        $descripcion    =   $request['descripcion_producto'];
        $archivo        =   $name;
        $activo         =   $request['activo_producto'];

        DB::SELECT("select insertar_productos('$nombre', '$cantidad', '$costo', '$descripcion', '$archivo', $activo)");

        return redirect('Productos1');
    }

    public function show1($productos)
    {
        DB::SELECT("UPDATE productos SET activo_producto = 0 WHERE id_producto = $productos");
        
        return redirect('Productos1');
    }

    public function edit1($productos)
    {
        $productos  = \App\productos::find($productos);
        return view('login.administrador.productos.edit', ['productos'=>$productos]);
    }

    public function update1(Request $request, productos $productos)
    {
        $nombre         =   $request['nombre_producto'];
        $cantidad       =   $request['cantidad_producto'];
        $costo          =   $request['costo_producto'];
        $descripcion    =   $request['descripcion_producto'];
        $activo         =   $request['activo_producto'];

        $id_product     =   $request['id_producto'];

        DB::SELECT("CALL update_productos('$nombre', '$cantidad', '$costo', '$descripcion', $activo, $id_product)");

        return redirect('Productos1');
    }


    //Usuario Comun
    public function index2(Request $request)
    {
        $crit = $request['criterio'];
        $productos = DB::SELECT("CALL read_productos('$crit')");

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($productos);
        $perPage = 4;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url());
        
        return view('login.usuario.productos.index', ['criterio'=>$crit, 'productos' => $paginatedItems]);
    }
}
