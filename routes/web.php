<?php

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

Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);

Route::post('cart/add', [App\Http\Controllers\CartController::class, 'add'])->name('add');
Route::get('cart/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('checkout');
Route::get('cart/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('clear');
Route::post('cart/removeitem', [App\Http\Controllers\CartController::class, 'removeItem'])->name('removeitem');




Auth::routes();

use App\Models\Product;

Route::get('/insertar-datos', function () {
    $product = new Product();
    $product->name = 'Polo';
    $product->price = 50.00;
    $product->iamge = 'img/1.jpg'; // Guarda la ruta de la imagen en la base de datos
    $product->save();

    return "Datos insertados correctamente";
});

