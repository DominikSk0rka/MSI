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

Route::get('/championselect', function () {
    return view('ChampionSelect');
});

Route::get('/Documentation', function () {
    return view('Documentation');
});

// Remove this duplicate route
// Route::get('/main', function () {
//     return view('main');
// });

// Replace with the Livewire component route
Route::get('/main', Main::class);

// Route for displaying the form
Route::get('/main/{lane?}', [MainController::class, 'index'])->name('main');

// Route for handling form submission
Route::post('/main/show', [MainController::class, 'show'])->name('main.show');
