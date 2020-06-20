<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;
use Barryvdh\DomPDF\Facade as PDF;
use Mail;

class ModuloController extends Controller
{
    public function index(Request $request)
    {
        $crit = $request['criterio'];
        $persons = DB::SELECT("CALL read_reservacion('$crit')");

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($persons);
        $perPage = 2;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url());


        
        
        return view('welcome1', ['criterio'=>$crit, 'persons' => $paginatedItems]);
    }

    public function create()
    {
        return view('Modulo.alta');
    }

    public function store(Request $request)
    {
        $nombre         =   $request['nombre_persona'];
        $ap             =   $request['ap_persona'];
        $am             =   $request['am_persona'];
        $telefono       =   $request['telefono_persona'];
        $email          =   $request['email_persona'];
        $personas       =   $request['personas'];
        $reservacion    =   $request['dia_reservacion'];
        $nota           =   $request['nota'];

        DB::SELECT("select insertar_reservacion('$nombre', '$ap', '$am', '$telefono', '$email', '$personas', '$reservacion' , '$nota')");
        ;

        $datos['dest'] = $request['email_persona'];

        Mail::send('Modulo.mensaje' ,['datos'=>$datos],
        function($m) use($datos){
            $m->to($datos['dest'])
            ->subject('Reservacion de My Coffe FRIENDS®.');
        });

        $personas = DB::SELECT("CALL reservaciones()");

        $pdf = PDF::loadView('Modulo.reservacion', compact('personas'));
        $pdf -> setPaper("letter","landscape");

        return $pdf->download('Reservacion.pdf');


        echo "<script>alert('Tu Reservacion ha sido hecha');</script>";
        return redirect("Reservacion");
        //return view('Modulo.alta');
    }
}
