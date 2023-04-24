<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Photo;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PhotographerController;


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

Route::get('/', function () {
    //$max=DB::select('select count(*) from photos');
    return view('presentation.index');
})->name('presentation.index');

Route::get('/about', function () {
    return view('presentation.about');
})->name('presentation.about');

Route::resource('photos', PhotoController::class);
Route::resource('photographers', PhotographerController::class);

Route::controller(LoginController::class)->group(function () {    
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate')->name('login.authenticate');
    Route::get('/logout', 'logout')->name('logout'); 
}); 

Route::controller(PhotographerController::class)->group(function () {
    Route::get('/photographers', 'index')->name('photographers.index');
});
