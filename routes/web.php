<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookController::class, 'welcome']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/book/{id}', [BookController::class, 'show']);
Route::get('/book/{id}/edit', [BookController::class, 'edit']);
Route::post('/book', [BookController::class, 'store']);
Route::put('/book/{id}', [BookController::class, 'update']);
Route::delete('book/{id}',[BookController::class, 'destroy']);
