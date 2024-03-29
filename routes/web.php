<?php

use App\Http\Controllers\ButtonsController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModalsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TablesController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/forms', [FormsController::class, 'index']);
Route::get('/cards', [CardsController::class, 'index']);
Route::get('/charts', [ChartsController::class, 'index']);
Route::get('/buttons', [ButtonsController::class, 'index']);
Route::get('/modals', [ModalsController::class, 'index']);
Route::get('/tables', [TablesController::class, 'index']);

Route::get('/pages/login', [PagesController::class, 'login']);
Route::get('/pages/register', [PagesController::class, 'register']);
Route::get('/pages/forgot-password', [PagesController::class, 'forgotPassword']);
Route::get('/pages/404', [PagesController::class, 'notFound']);
Route::get('/pages/blank', [PagesController::class, 'blank']);
