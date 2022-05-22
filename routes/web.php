<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('import',[ProduitController::class,'importForm'])->name('importForm');
Route::post('import',[ProduitController::class,'import'])->name('import');
Route::get('produits/index',[ProduitController::class,'index'])->name('produits.list');
Route::get('category/index',[CategorieController::class,'index'])->name('categories.list');
Route::get('category/delete/{id}',[CategorieController::class,'delete'])->name('categories.delete');
