<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/product/create' , [ProductController::class, 'store'])->name('product.store'); // metodo store perchè andremo a salvare qualcosa nel database


// rotta per l'indice dei miei  prodotti
Route::get('/product/index' , [ProductController::class, 'index'])->name('product.index');  // get per recuperare informazioni