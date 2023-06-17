<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teknik;
use App\Http\Controllers\admin;


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
//folder profil
Route::get('/index', [teknik::class, 'index']);
Route::get('/index', [teknik::class, 'menu']);
Route::get('/pesanan', [teknik::class, 'order']);
Route::get('/pesanan', [teknik::class, 'list_menu']);
Route::get('/pesanan', [teknik::class, 'list']);

//foreach daftar menu
Route::get('/daftar_menu', [teknik::class, 'list']);
Route::get('/daftar_menu', [teknik::class, 'order_list']);
//admin
Route::get('/admin/', [admin::class, 'index']);
Route::get('/admin/daftar_menu', [admin::class, 'list_menu']);
Route::get('/admin/tamba_menu', [admin::class, 'submit']);
Route::post('/admin/simpan_menu', [admin::class, 'save_menu']);
Route::get('/admin/{id}/edit_menu', [admin::class, 'edit']);
Route::post('/admin/{id}/update_menu', [admin::class, 'update_menu']);
Route::post('/admin/{id}', [admin::class, 'delete_menu']);