<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
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

Route::get('/', [LibraryController::class, 'index'])->name('home');
Route::get('/create-book', [LibraryController::class, 'create'])->name('formCreateBook');
Route::post('/create-book/store', [LibraryController::class, 'store'])->name('createBook');
Route::delete('/create-book/destroy/{id}', [LibraryController::class, 'destroy'])->name('destroyBook');
Route::get('/create-book/edit/{id}', [LibraryController::class, 'edit'])->name('editBook');
Route::put('/create-book/update/{id}', [LibraryController::class, 'update'])->name('updateBook');





