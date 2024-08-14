<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SupplierController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/inventory', InventoryController::class);

Route::resource('/suppliers', SupplierController::class);

Route::resource('/orders', OrderController::class);

// Route for displaying the form
Route::get('/inventory/create', [InventoryController::class, 'create'])->name('inventory.create');

// Route for handling form submission
Route::post('/inventory', [InventoryController::class, 'store'])->name('inventory.store');

Route::get('inventory/{inventory_id}/products', [ProductController::class, 'productsByInventory'])->name('inventory.products');

Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/product/{id}/edit',  [ProductController::class, 'edit'])->name('products.edit');

Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');



Route::delete('/supplier/{id}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');

Route::get('/supplier/{id}',  [SupplierController::class, 'edit'])->name('suppliers.edit');

Route::put('/suppliers/{supplier}', [SupplierController::class, 'update'])->name('suppliers.update');




Route::delete('/order/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');

Route::get('/order/{id}',  [OrderController::class, 'edit'])->name('orders.edit');

Route::put('/order/{order}', [OrderController::class, 'update'])->name('orders.update');


Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

// Route to handle the form submission
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
