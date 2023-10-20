<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\QuestionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/api-exemplo', ApiController::class);
Route::get('/api-exemplo/{id}', ApiController::class);

Route::get('/api-resposta', [App\Http\Controllers\QuestionController::class, 'fetchInsert']);
Route::get('/', [App\Http\Controllers\QuestionController::class, 'show']);