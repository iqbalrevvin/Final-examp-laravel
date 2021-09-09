<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsControler;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\OrderlistController;



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
Route::post('/products',[ProductsControler::class,'createproducts']);
Route::post('/CreateAkun',[AdminController::class,'CreateAkun']);
Route::get('/listadminApi',[OwnerController::class, 'listadminApi'])->name('listadminApi');
Route::get('/pemasukanApi',[PemasukanController::class,'pemasukanApi'])->name('pemasukanApi');
Route::get('/Orderlist',[OrderlistController::class,'indexApi'])->name('Orderlist');
