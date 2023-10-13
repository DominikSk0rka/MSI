<?php

use App\Http\Controllers\MainController;
use App\Livewire\Main;
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
Route::get('/', function () {
    return view('HomePage');
});

Route::get('/main', function () {
    return view('main');
});



Route::get('/main', Main::class);

//Route::get('/main', [MainController::class, 'index']);
//Route::post('/show', [MainController::class, 'show']);

Route::get('/test', function () {
    return view('test');
});
