<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UsersController::class, 'index'])->name('user.index');
Route::get('/usuario', [UsersController::class, 'create'])->name('user.create');
Route::post('/usuario', [UsersController::class, 'store'])->name('user.store');
Route::get('/usuario/{user}', [UsersController::class, 'show'])->name('user.show');
Route::get('/usuario/editar/{user}', [UsersController::class, 'edit'])->name('user.edit');
Route::put('/usuario/update/{user}', [UsersController::class, 'update'])->name('user.update');
Route::delete('/usuario/delete/{user}', [UsersController::class, 'destroy'])->name('user.destroy');

