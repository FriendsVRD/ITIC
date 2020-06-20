<?php
 namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;
use \Excel;
use PHPExcel_Worksheet_Drawing;
use App\alimentos;

use Illuminate\Support\Facades\DB;

class ExcelController extends Controller
{
    public function AlimentosExcel(Request $request)
    {
        //ob_end_clean();
        ob_start();

        $crit = $request['criterio'];

        Excel::create('AlimentosExcel', function($excel) use ($crit){
                    // nombre del archivo a descargar
                    
            $excel->sheet('AlimentosExcel', function($sheet) use ($crit){

                $time = time();

                $sheet->row(1,['Fecha y hora de descarga:', date("d-m-Y , H:i:s", $time)]);
                $sheet->row(2,['','','My Coffee Friends']);
                $sheet->row(3,['','','http://www.mycoffefriends.com']);
                $sheet->row(4,['','','Todos los derechos reservados My Coffee Friends®']);

                $sheet->row(6,['Alimento','Cantidad','Costo','Descripción','Tamaño']);
                
                $sheet->row(7,['']);                
                $alimentos = DB::SELECT("CALL read_alimentos('$crit')");
                foreach ($alimentos as $index => $alimento) {
                    
                    $sheet->row($index+8,
                        [$alimento->nombre_alimento, $alimento->cantidad_alimento, $alimento->costo_alimento, $alimento->descripcion_alimento, $alimento->escala_alimento]);
                }

                $objDrawing = new PHPExcel_Worksheet_Drawing;
                $objDrawing->setPath(public_path('images/logo-excel.png')); //your image path
                $objDrawing->setCoordinates('A2');
                $objDrawing->setWorksheet($sheet);
            });

        })->export('xlsx');
        od_end_clean();
    }

    public function ClientesExcel(Request $request)
    {
        //ob_end_clean();
        ob_start();

        $crit = $request['criterio'];

        Excel::create('ClientesExcel', function($excel) use ($crit){
                    // nombre del archivo a descargar
            $excel->sheet('ClientesExcel', function($sheet) use ($crit){

                $time = time();

                $sheet->row(1,['Fecha y hora de descarga:', date("d-m-Y , H:i:s", $time)]);
                $sheet->row(2,['','','','My Coffee Friends']);
                $sheet->row(3,['','','','http://www.mycoffefriends.com']);
                $sheet->row(4,['','','','Todos los derechos reservados My Coffee Friends®']);

                $sheet->row(6,['Cliente','Apellido Paterno','Apellido Materno','Dirección','Fecha de Nacimiento','Sexo','Teléfono']);
                
                $sheet->row(7,['']);    
                            
                $clientes = DB::SELECT("CALL read_clientes('$crit')");
                foreach ($clientes as $index => $cliente) {
                    
                    $sheet->row($index+8,
                        [$cliente->nombre_cliente, $cliente->ap_cliente, $cliente->am_cliente, 
                            $cliente->direccion_cliente, $cliente->fnac_cliente, 
                            $cliente->sexo_cliente, $cliente->telefono_cliente]);
                }

                $objDrawing = new PHPExcel_Worksheet_Drawing;
                $objDrawing->setPath(public_path('images/logo-excel.png')); //your image path
                $objDrawing->setCoordinates('A2');
                $objDrawing->setWorksheet($sheet);
            });

        })->export('xlsx');
        od_end_clean();
    }

    public function ProductosExcel(Request $request)
    {
        //ob_end_clean();
        ob_start();

        $crit = $request['criterio'];

        Excel::create('ProductosExcel', function($excel) use ($crit){
                    // nombre del archivo a descargar
            $excel->sheet('ProductosExcel', function($sheet) use ($crit){

                $time = time();

                $sheet->row(1,['Fecha y hora de descarga:', date("d-m-Y , H:i:s", $time)]);
                $sheet->row(2,['','','My Coffee Friends']);
                $sheet->row(3,['','','http://www.mycoffefriends.com']);
                $sheet->row(4,['','','Todos los derechos reservados My Coffee Friends®']);

                $sheet->row(6,['Producto','Cantidad','Costo','Descripción']);
                
                $sheet->row(7,['']);                
                $productos = DB::SELECT("CALL read_productos('$crit')");
                foreach ($productos as $index => $producto) {
                    
                    $sheet->row($index+8,
                        [$producto->nombre_producto, $producto->cantidad_producto, $producto->costo_producto, $producto->descripcion_producto]);
                }

                $objDrawing = new PHPExcel_Worksheet_Drawing;
                $objDrawing->setPath(public_path('images/logo-excel.png')); //your image path
                $objDrawing->setCoordinates('A2');
                $objDrawing->setWorksheet($sheet);
            });

        })->export('xlsx');
        od_end_clean();
    }

    public function UsuariosExcel(Request $request)
    {
        //ob_end_clean();
        ob_start();

        $crit = $request['criterio'];

        Excel::create('UsuariosExcel', function($excel) use ($crit){
                    // nombre del archivo a descargar
            $excel->sheet('UsuariosExcel', function($sheet) use ($crit){

                $time = time();

                $sheet->row(1,['Fecha y hora de descarga:', date("d-m-Y , H:i:s", $time)]);
                $sheet->row(2,['','','My Coffee Friends']);
                $sheet->row(3,['','','http://www.mycoffefriends.com']);
                $sheet->row(4,['','','Todos los derechos reservados My Coffee Friends®']);

                $sheet->row(6,['Usuario','Apellido Paterno','Apellido Materno','Dirección',
                                'Fecha de Nacimiento','Sexo','Telefono', 'Email']);
                
                $sheet->row(7,['']);                
                $usuarios = DB::SELECT("CALL read_usuarios('$crit')");
                foreach ($usuarios as $index => $usuario) {
                    
                    $sheet->row($index+8,
                        [$usuario->nombre_user, $usuario->ap_user, $usuario->am_user, 
                         $usuario->direccion_user, $usuario->fnac_user, 
                         $usuario->sexo_user, $usuario->telefono_user, 
                         $usuario->email_user]);
                }

                $objDrawing = new PHPExcel_Worksheet_Drawing;
                $objDrawing->setPath(public_path('images/logo-excel.png')); //your image path
                $objDrawing->setCoordinates('A2');
                $objDrawing->setWorksheet($sheet);
            });

        })->export('xlsx');
        od_end_clean();
    }
}
