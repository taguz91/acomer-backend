<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('api\v1')->group(function () {
    Route::prefix('v1/')->group(function () {
        Route::apiResource('administrador', 'AdministradorController');
        Route::apiResource('cliente', 'ClienteController');
        Route::apiResource('combo', 'ComboController');
        Route::apiResource('usuario/historial', 'HistorialUsuarioController');
        Route::apiResource('menu', 'MenuController');
        Route::apiResource('reserva', 'ReservaController');
        Route::apiResource('sugerencia', 'SugerenciaController');
        Route::apiResource('restaurante', 'RestauranteController');
        Route::apiResource('reporte','ReporteController');
        Route::apiResource('calificacion','CalificacionController');
        Route::apiResource('categoria','CategoriaController');
        Route::apiResource('pedido','PedidoController');
        Route::apiResource('menudia','MenuDiaController');
        Route::apiResource('mesa','MesaController');
        Route::apiResource('usuario', 'UsuarioController');
        Route::apiResource('empleado', 'EmpleadoController');
        Route::apiResource('sucursal', 'SucursalController');
        Route::apiResource('favorito', 'FavoritoController');
        Route::apiResource('plato', 'PlatoController');
        Route::apiResource('encabezado/factura', 'EncabezadoFacturaController');
        Route::apiResource('promocion', 'PromocionController');
        Route::apiResource('producto', 'ProductoController');
        Route::apiResource('url', 'UrlController');
        Route::apiResource('rol', 'RolController');
        // Rutas para restaurante 
        Route::get('plato/restaurante/{id}', 'PlatoController@restaurante');
        Route::get('producto/restaurante/{id}', 'ProductoController@restaurante');
        Route::get('empleado/restaurante/{id}', 'EmpleadoController@restaurante');
        Route::get('sucursal/restaurante/{id}', 'SucursalController@restaurante');
        Route::get('promocion/restaurante/{id}', 'PromocionController@restaurante');
        Route::get('encabezado/factura/restaurante/{id}', 'EncabezadoFacturaController@restaurante');
    });
});