<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [ClientController::class,'Home']);
Route::get('/Shop', [ClientController::class,'Shop']);
Route::get('/Cart', [ClientController::class,'Cart']);
Route::get('/Check', [ClientController::class,'Check']);
Route::get('/LoginClient', [ClientController::class,'login']);
Route::get('/SginClient', [ClientController::class,'sgin']);
Route::get('/dashboard', [AdminController::class,'dash']);
Route::get('/addcatogry', [AdminController::class,'addcatogry']);
Route::get('/catogry', [CategoryController::class,'View']);

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
*/