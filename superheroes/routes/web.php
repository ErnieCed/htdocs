<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroesController;
use Illuminate\Routing\RouteGroup;

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
    return view('auth.login');
});
/*
Route::get('/heroes', function () {
    return view('heroes.index');
});

Route::get('/heroes/create',[HeroesController::class,'create']);
*/
Route::resource('heroes', HeroesController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [HeroesController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'],function (){

    Route::get('/', [HeroesController::class, 'index'])->name('home');
});

