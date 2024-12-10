<?php

use App\Http\Controllers\AccessoriesController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\Ferrari458Controller;
use App\Http\Controllers\FerrariItaliaController;
use App\Http\Controllers\Ferrari458SpeController;
use App\Http\Controllers\Ferrarif12Controller;
use App\Http\Controllers\FerrariSF90Controller;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\BuyController;
use App\Models\Buys;
use App\Models\Users;
use App\Models\Works;
use App\Models\Accessories;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('garage', function () {
    return view('garage');
});
Route::get('user', function () {
    return view('user');
});
Route::get('/ferrariItalia', [FerrariItaliaController::class, 'index']);
Route::get('/ferrari458Speciale', [Ferrari458SpeController::class, 'index']);
Route::get('/ferrarif12', [Ferrarif12Controller::class, 'index']);
Route::get('/ferrariSF90', [FerrariSF90Controller::class, 'index']);

/*Route::get('/insertar', function () {
    
    $work = new Works;
    $work->Nombre='Jesus Armando';
    $work->Apellidos='Chuc Cocom';
    $work->Gmail='jeus@gmail.com';
    $work->Contraseña='jeus';

    $work->save();

    return $work;

});*/

Route::get('/works',[WorksController::class, 'index']);
//formulario para la creación de computadoras
Route::get('/works/create',[WorksController::class, 'create']);
//despliegue de información almacenada en la BD
Route::get('/works/{disp}',[WorksController::class, 'show']);

Route::post('/works',[WorksController::class, 'store']);

Route::get('/works/{disp}/edit',[WorksController::class, 'edit']);

Route::put('/works/{disp}',[WorksController::class, 'update']);

Route::delete('/works/{disp}',[WorksController::class, 'destroy']);

//Buy----------------------------------------------------------------------------

Route::get('/buy',[BuyController::class, 'index']);
//formulario para la creación de computadoras
Route::get('/buy/create',[BuyController::class, 'create']);
//despliegue de información almacenada en la BD
Route::get('/buy/{disp}',[BuyController::class, 'show']);


/*Route::get('/insertar', function () {
    
    $buy = new Buys;
    $buy->nombre_cliente='jesus';
    $buy->modelo_auto='Nissan';
    $buy->año = 2020;
    $buy->precio=250000;
    $buy->fecha_compra = '2024-10-10';  
    $buy->save();

    return $buy;

});*/
Route::post('/buy',[BuyController::class, 'store']);

Route::get('/buy/{disp}/edit',[BuyController::class, 'edit']);

Route::put('/buy/{disp}',[BuyController::class, 'update']);

Route::delete('/buy/{disp}',[BuyController::class, 'destroy']);

//accesories

//Route::get('/accesorie', function () {
    
   // $accesories = new Accessories;
   // $accesories ->alerones='Ala';
   // $accesories ->llantas='Cara blanca';
   // $accesories ->rines='tipo-D16';
   // $accesories ->aceite='castrol 50w-40';
   // $accesories ->viniles='Gris';
   // $accesories ->save();

   // return $accesories;

// });

//despliegue de accesories en la base de datos
Route::get('/accesories',[AccessoriesController::class, 'index']);
//formulario para la creación de accesories
Route::get('/accesories/create',[AccessoriesController::class, 'create']);
//despliegue de información almacenada en la BD
Route::get('/accesories/{disp}',[AccessoriesController::class, 'show']);
//NÓTESE QUE AHORA YA NO ES UNA RUTA get... y se usa un nuevo método STORE
Route::post('/accesories',[AccessoriesController::class, 'store']);
//
Route::get('/accesories/{disp}/edit', [AccessoriesController::class, 'edit']);
//
Route::put('/accesories/{disp}',[AccessoriesController::class, 'update']);
//
Route::delete('/accesories/{disp}', [AccessoriesController::class, 'destroy']);