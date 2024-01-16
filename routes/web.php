<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Personas\PersonasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Usuarios\UsuariosController;
use Illuminate\Support\Facades\Route;

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
    return view('vendor/adminlte/auth/login');
});

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('Personas', PersonasController::class)->only(['index','destroy','update','create','store']);
    Route::resource('Usuarios', UsuariosController::class)->only(['index','destroy','update','create','store']);


});

require __DIR__.'/auth.php';


// Route::resources([
//     'Personas' => PersonasController::class,
//     // 'category' => CategoryController::class
// ]);
Route::get('/Persona/BusquedaSelect2',[PersonasController::class, 'BusquedaSelect2']);


