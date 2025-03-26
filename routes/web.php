<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ClientController;

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
Route::get('/welcome', function () { return view('welcome'); });

//home or principal page//
Route::get('/', function (){ return view('client.home'); })->name('home')->middleware('auth.client');

//login and register//
Route::get('/ingreso', [SessionsController::class, 'show'])->name('login.index')->middleware('guest');
Route::post('/ingreso', [SessionsController::class, 'store'])->name('login.store');
Route::get('/salida', [SessionsController::class, 'destroy'])->name('login.destroy')->middleware('auth');
#register
Route::get('/registro', [RegisterController::class, 'show'])->name('register.index')->middleware('guest');
Route::post('/registro', [RegisterController::class, 'store'])->name('register.store');

//views for manage//
//employee
Route::get('/emp', [ManageController::class, 'index_emp'])->name('emp.index')->middleware('auth.emp');
Route::get('/emp/productos/{id?}', [ManageController::class, 'view_products'])->name('emp.products')->middleware('auth.emp');
Route::post('/emp/productos/{id?}', [ProductsController::class, 'store'])->name('products.store')->middleware('auth.emp');
Route::patch('/emp/productos/{id?}', [ProductsController::class, 'update'])->name('products.update')->middleware('auth.emp');
Route::get('/emp/pedidos', [ManageController::class, 'view_orders'])->name('emp.orders')->middleware('auth.emp');
Route::get('/emp/pqrs', [ManageController::class, 'view_pqrs'])->name('emp.pqrs')->middleware('auth.emp');
//admin
Route::get('/admin', [ManageController::class, 'index_admin'])->name('admin.index')->middleware('auth.admin');
Route::get('/admin/empleados', [ManageController::class, 'view_employees'])->name('admin.employees')->middleware('auth.admin');
Route::post('/admin/empleados', [RegisterController::class, 'store_employee'])->name('employees.store');
Route::get('/admin/informes', [ManageController::class, 'view_reports'])->name('admin.reports')->middleware('auth.admin');

//views fros client//
#profile
Route::get('/perfil', [ClientController::class, 'profile'])->name('profile');
Route::get('/perfil/mis_pedidos', [ClientController::class, 'profile_orders'])->name('profile.orders');
Route::get('/perfil/mis_direcciones', [ClientController::class, 'profile_addresses'])->name('profile.address');
Route::get('/perfil/mi_cuenta', [ClientController::class, 'profile_account'])->name('profile.account');
Route::get('/perfil/mi_lista', [ClientController::class, 'profile_desires'])->name('profile.desires');
#basket
Route::get('/canasta', [ClientController::class, 'basket'])->name('basket');
Route::view('/nosotros', 'client.about')->name('about');
#catalogue
Route::get('/catalogo/{category?}', [ProductsController::class, 'catalogue'])->name('products.catalogue');
Route::get('/producto/{id_product}', [ProductsController::class, 'details_product'])->name('products.details');
