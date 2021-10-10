<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MailController;

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

Route::get('/',[PagesController::class,'home']);
Route::get('/contact',[PagesController::class,'contact']);
Route::get('/actualité',[PagesController::class,'actualité']);
Route::get('/mosque',[PagesController::class,'mosque']);
Route::get('/imam',[PagesController::class,'imam']);
Route::get('/khatibClub',[PagesController::class,'club']);
Route::post('/contacts',[MailController::class,'contact']);

