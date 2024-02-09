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

Route::get('/', [\App\Http\Controllers\Main\IndexController::class, 'index'])->name('main.index');

Route::group(['prefix' => 'categories'], function (){
    Route::get('/', [\App\Http\Controllers\Category\IndexController::class, 'index'])->name('category.index');
    Route::get('/create', [\App\Http\Controllers\Category\CreateController::class, 'create'])->name('category.create');
    Route::post('/', [\App\Http\Controllers\Category\StoreController::class, 'store'])->name('category.store');
    Route::get('/{category}/edit', [\App\Http\Controllers\Category\EditController::class, 'edit'])->name('category.edit');
    Route::get('/{category}', [\App\Http\Controllers\Category\ShowController::class, 'show'])->name('category.show');
    Route::patch('/{category}', [\App\Http\Controllers\Category\UpdateController::class, 'update'])->name('category.update');
    Route::delete('/{category}', [\App\Http\Controllers\Category\DeleteController::class, 'delete'])->name('category.delete');
});
