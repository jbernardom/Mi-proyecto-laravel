<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ContactoController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('/banner');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


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



require __DIR__.'/auth.php';
