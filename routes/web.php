<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [LoginController::class, 'index'])->name('index');
Route::post('/', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get ('/home', function(){
//     return redirect('/admin');
// });

// Route::middleware(['auth'])->group(function(){
// Route::get('/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin');
// Route::get('/petugas', [AdminController::class, 'petugas'])->middleware('userAkses:petugas');
// Route::get('/peminjam', [AdminController::class, 'peminjam'])->middleware('userAkses:peminjam');
// Route::get('/logout', [LoginController::class, 'logout']);

// });
