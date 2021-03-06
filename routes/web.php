<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppsController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('', function() {
    return view('pages.app');
})->name('home');

Route::get('about',[AppsController::class,'about'])->name('about');
Route::get('contact',[AppsController::class,'contact'])->name('contact');