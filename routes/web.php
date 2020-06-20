<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('redirect');
});

Route::get('Index', function () {
    return view('welcome');
});

Route::get('Index2', function () {
    return view('welcome2');
});

Route::get('hola', function () {
    return view('welcome3');
});

Route::get('carril', function () {
    return view('welcome4');
});

//Login
    //Login - Super usaurio
    Route::get('SuperUsuario','SuperUsuarioController@Login')->name('SuperUsuario');
    Route::post('/LoginSistema','SuperUsuarioController@LoginSU')->name('LoginSistema');

    //Cerrar Sesion
    Route::get('CerrarSesion','SuperUsuarioController@CerrarSesion');

    //Recuperar Contraseña
    Route::get('RecuperarPassword','SuperUsuarioController@IndexRecuperar');
    Route::post('enviar_password','SuperUsuarioController@ResetPw')->name('enviar_password');


    //Alimentos CRUD
    	//Create - Altas
    	Route::get('AltaAlimento','AlimentosController@create');
    	Route::post('alta_alimento','AlimentosController@store')->name('alta_alimento');

    	//Read - Consulta
    	Route::resource('Alimentos', 'AlimentosController');

        //Update - Modifocar
        Route::get('/ModificaAlimento/{id_aliment}','AlimentosController@edit');
        Route::post('modificar_alimento','AlimentosController@update')->name('modificar_alimento');

        //Delete - Eliminar - BajaLogica
        Route::get('/DesactivarAlimento/{id_alimentou}','AlimentosController@show');

        //Buscar Alimentos
        Route::post('buscarAlimentos','AlimentosController@index')->name('buscarAlimentos');
        Route::get('buscarAlimentos','AlimentosController@index');

        ///////

    //Clientes
        //Create - Altas
        Route::get('AltaCliente','ClientesController@create');
        Route::post('alta_cliente','ClientesController@store')->name('alta_cliente');

        //Read - Consulta
        Route::resource('Clientes', 'ClientesController');

        //Update - Modifocar
        Route::get('/ModificaCliente/{id_client}','ClientesController@edit');
         Route::post('modificar_cliente','ClientesController@update')->name('modificar_cliente');  

        //Delete - Eliminar - BajaLogica
        Route::get('/DesactivarCliente/{id_clienteo}','ClientesController@show');

        //Buscar Clientes
        Route::post('buscarClientes','ClientesController@index')->name('buscarClientes');
        Route::get('buscarClientes','ClientesController@index');

        ///////

        //Productos
            //Create - Altas
            Route::get('AltaProducto','ProductosController@create');
            Route::post('alta_producto','ProductosController@store')->name('alta_producto');

            //Read - Consulta
            Route::resource('Productos', 'ProductosController');

            //Update - Modifocar
            Route::get('/ModificaProducto/{id_product}','ProductosController@edit');
            Route::post('modificar_producto','ProductosController@update')->name('modificar_producto');

            //Delete - Eliminar - BajaLogica
            Route::get('/DesactivarProducto/{id_productou}','ProductosController@show');

            //Buscar Alimentos
            Route::post('buscarProductos','ProductosController@index')->name('buscarProductos');
            Route::get('buscarProductos','ProductosController@index');


        ///////

        //Usuarios
            //Create - Altas
            Route::get('AltaUsuario','UsuariosController@create');
            Route::post('alta_user','UsuariosController@store')->name('alta_user');

            //Read - Consulta
            Route::resource('Usuarios', 'UsuariosController');

            //Delete - Eliminar - BajaLogica
            Route::get('/ModificaUsuario/{id_usuari}','UsuariosController@edit');
            Route::post('modificar_usuario','UsuariosController@update')->name('modificar_usuario');

            //Delete - Eliminar - BajaLogica
            Route::get('/DesactivarUsuario/{id_usuariou}','UsuariosController@show');

            //Buscar Alimentos
            Route::post('buscarUsuarios','UsuariosController@index')->name('buscarUsuarios');
            Route::get('buscarUsuarios','UsuariosController@index');


/********************************************************************************************/

//Login - Administrador
    Route::get('Administrador','AdministradorController@Login')->name('Administrador');
    Route::post('/LoginSistema1','AdministradorController@LoginAdmin')->name('LoginSistema1');

    //Cerrar Sesion
    Route::get('CerrarSesion1','AdministradorController@CerrarSesion');

    //Recuperar Contraseña
    Route::get('RecuperarPassword1','AdministradorController@IndexRecuperar');
    Route::post('enviar_password1','AdministradorController@ResetPw')->name('enviar_password1');


    //Alimentos
        //Create - Altas
        Route::get('AltaAlimento1','AlimentosController@create1');
        Route::post('alta_alimento1','AlimentosController@store1')->name('alta_alimento1');

        //Read - Consulta
        Route::get('Alimentos1', 'AlimentosController@index1');

        //Update - Modifocar
        Route::get('/ModificaAlimento1/{id_aliment}','AlimentosController@edit1');
        Route::post('modificar_alimento1','AlimentosController@update')->name('modificar_alimento1');

        //Delete - Eliminar - BajaLogica
        Route::get('/DesactivarAlimento1/{id_alimentou}','AlimentosController@show1');

        //Buscar Alimentos
        Route::post('buscarAlimentos1','AlimentosController@index1')->name('buscarAlimentos1');
        Route::get('buscarAlimentos1','AlimentosController@index1');

        //PDF
        Route::get('AlimentosPDF/{criterio?}','PDFController@AlimentosPDF');

        //Excel
        Route::get('AlimentosExcel/{criterio?}','ExcelController@AlimentosExcel');


    //Clientes
        //Create - Altas
        Route::get('AltaCliente1','ClientesController@create1');
        Route::post('alta_cliente1','ClientesController@store1')->name('alta_cliente1');

        //Read - Consulta
        Route::get('Clientes1', 'ClientesController@index1');

        //Update - Modifocar
        Route::get('/ModificaCliente1/{id_client}','ClientesController@edit1');
        Route::post('modificar_cliente1','ClientesController@update1')->name('modificar_cliente1');

        //Buscar Clientes
        Route::post('buscarClientes1','ClientesController@index1')->name('buscarClientes1');
        Route::get('buscarClientes1','ClientesController@index1');

        //PDF
        Route::get('ClientesPDF/{criterio?}','PDFController@ClientesPDF');

        //Excel
        Route::get('ClientesExcel/{criterio?}','ExcelController@ClientesExcel');


    //Productos
        //Create - Altas
        Route::get('AltaProducto1','ProductosController@create1');
        Route::post('alta_producto1','ProductosController@store1')->name('alta_producto1'); 

        //Read - Consulta
        Route::get('Productos1', 'ProductosController@index1')->name('Productos1'); 

        //Update - Modifocar
        Route::get('/ModificaProducto1/{id_product}','ProductosController@edit1');
        Route::post('modificar_producto1','ProductosController@update')->name('modificar_producto1');

        //Buscar Productos
        Route::post('buscarProductos1','AlimentosController@index1')->name('buscarProductos1');
        Route::get('buscarProductos1','AlimentosController@index1');

        //PDF
        Route::get('ProductosPDF/{criterio?}','PDFController@ProductosPDF');

        //Excel
        Route::get('ProductosExcel/{criterio?}','ExcelController@ProductosExcel');


    //Usuarios
        //Create - Altas
        Route::get('AltaUsuario1','UsuariosController@create1');
        Route::post('alta_user1','UsuariosController@store1')->name('alta_user1');

        //Read - Consulta
        Route::get('Usuarios1', 'UsuariosController@index1');

        //Update - Modificar
        Route::get('/ModificaUsuario1/{id_usuari}','UsuariosController@edit1');
        Route::post('modificar_usuario1','UsuariosController@update1')->name('modificar_usuario1');

        //Buscar Usuarios
        Route::post('buscarUsuarios1','UsuariosController@index1')->name('buscarUsuarios1');
        Route::get('buscarUsuarios1','UsuariosController@index1');

        //PDF
        Route::get('UsuariosPDF/{criterio?}','PDFController@UsuariosPDF');

        //Excel
        Route::get('UsuariosExcel/{criterio?}','ExcelController@UsuariosExcel');

    //Aviso
        Route::get('Promociones', 'AvisosController@indexweb');

        //Create - Altas
        Route::get('AltaAviso','AvisosController@create');
        Route::post('alta_aviso','AvisosController@store')->name('alta_aviso');

        //Read - Consulta
        Route::get('AvisoSistema', 'AvisosController@indexsistema');

        //Update - Modifocar
        Route::get('/ModificaAviso/{id_aviso}','AvisosController@edit');
        Route::post('modificar_aviso','AvisosController@update')->name('modificar_aviso');

        //Delete - Eliminar - BajaLogica
        Route::get('/DesactivarAviso/{id_avisou}','AvisosController@show');
        //Mostrar aviso
        Route::get('getavisos','AvisosController@cargarAvisos');
        
/********************************************************************************************/

//Login - Usuario Comun
    Route::get('UsuarioComun','LoginController@Login')->name('UsuarioComun');
    Route::post('/LoginSistema2','LoginController@LoginComun')->name('LoginSistema2');

    //Cerrar Sesion
    Route::get('CerrarSesion2','LoginController@CerrarSesion');

    //Recuperar Contraseña
    Route::get('RecuperarPassword2','LoginController@IndexRecuperar');
    Route::post('enviar_password2','LoginController@ResetPw')->name('enviar_password2');


    //Alimentos

        //Read - Consulta
        Route::get('Alimentos2', 'AlimentosController@index2');

        //Buscar Alimentos
        Route::post('buscarAlimentos2','AlimentosController@index2')->name('buscarAlimentos2');
        Route::get('buscarAlimentos2','AlimentosController@index2');

    //Productos

        //Read - Consulta
        Route::get('Productos2', 'ProductosController@index2');

        //Buscar Alimentos
        Route::post('buscarProductos2','ProductosController@index2')->name('buscarProductos2');
        Route::get('buscarProductos2','ProductosController@index2');


//Enviar Duda o Comentario
    route::get('Comentarios', 'ContactoController@IndexComentario');
    Route::post('enviar_comentario','ContactoController@EnviarComentario')->name('enviar_comentario');

//Modulo
    //Read - Consulta
        Route::get('Index1', 'ModuloController@index');

    //Create - Altas
        Route::get('Reservacion','ModuloController@create');
        Route::post('alta_reservacion','ModuloController@store')->name('alta_reservacion');
	
    //Buscar Usuarios
        Route::post('buscarReservacion','ModuloController@index')->name('buscarReservacion');
        Route::get('buscarReservacion','ModuloController@index');

        Route::get('r', function () {
        return view('Modulo.reservacion');
});



/// Paypal
Route::resource('/in_shopping_carts','InShoppingCartsController',[
    'only' => ['store','destroy']
]);

Route::get('/carrito','ShoppingCartController@index');
Route::post('/carrito','ShoppingCartController@checkout');
Route::get('/payments/store','PaymentsController@store');

Route::resource('compras','ShoppingCartController',[
    'only'=>['show']
]);

Route::resource('/orders','OrdersController',[
	'only'=>[
		'update',
		'index',
		'show'
	]]);
