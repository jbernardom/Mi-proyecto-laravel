<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ContactoController;
use Illuminate\Http\Request;

Route::resource('empleado', EmpleadoController::class);

Route::get('/', function () {
    return view('banner');
});

Route::get('/banner', function () {
    return view('banner');
});

Route::get('/cotizar', function () {
    return view('cotizar');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);
    dd($token->plainTextToken);
    return ['token' => $token->plainTextToken];
})->name("crear.token");

Route::post('/usuario', 'App\Http\Controllers\Controller@crearUsuario');

Route::get('/nosotros', [NosotrosController::class, 'index']);

