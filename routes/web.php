<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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

// Rute untuk menampilkan semua buku
Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');

// Rute untuk menampilkan form penambahan buku
Route::get('/menus/create', [MenuController::class, 'create'])->name('menus.create');

// Rute untuk menyimpan buku baru
Route::post('/menus', [MenuController::class, 'store'])->name('menus.store');

// Rute untuk menampilkan detail buku
Route::get('/menus/{menu}', [MenuController::class, 'show'])->name('menus.show');

// Rute untuk menampilkan form edit buku
Route::get('/menus/{menu}/edit', [MenuController::class, 'edit'])->name('menus.edit');

// Rute untuk menyimpan perubahan pada buku yang diedit
Route::put('/menus/{menu}', [MenuController::class, 'update'])->name('menus.update');

// Rute untuk menghapus buku
Route::delete('/menus/{menu}', [MenuController::class, 'destroy'])->name('menus.destroy');

