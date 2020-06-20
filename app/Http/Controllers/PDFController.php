<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function AlimentosPDF(Request $request)
    {   
        $crit = $request->criterio;
    	$alimentos = DB::SELECT("CALL read_alimentos('$crit')");

    	$pdf = PDF::loadView('Reportes.AlimentosPDF', compact('alimentos'));
    	$pdf -> setPaper('A4','landscape');

    	return $pdf->download('AlimentosPDF.pdf');
    }

    public function ClientesPDF(Request $request)
    {   
        $crit = $request->criterio;
    	$clientes = DB::SELECT("CALL read_clientes('$crit')");

    	$pdf = PDF::loadView('Reportes.ClientesPDF', compact('clientes'));
    	$pdf -> setPaper('A4','landscape');

    	return $pdf->download('ClientesPDF.pdf');
    }

    public function ProductosPDF(Request $request)
    {   
        $crit = $request->criterio;
    	$productos = DB::SELECT("CALL read_productos('$crit')");

    	$pdf = PDF::loadView('Reportes.ProductosPDF', compact('productos'));
    	$pdf -> setPaper('A4','landscape');

    	return $pdf->download('ProductosPDF.pdf');
    }

    public function UsuariosPDF(Request $request)
    {   
        $crit = $request->criterio;
    	$usuarios = DB::SELECT("CALL read_usuarios('$crit')");

    	$pdf = PDF::loadView('Reportes.UsuariosPDF', compact('usuarios'));
    	$pdf -> setPaper('A4','landscape');

    	return $pdf->download('UsuariosPDF.pdf');
    }
}
