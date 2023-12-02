<?php

use App\Http\Controllers\MainController;
use App\Livewire\TopMain;
use App\Livewire\AdcMain;
use App\Livewire\MidMain;
use App\Livewire\JungleMain;
use App\Livewire\SupportMain;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('HomePage');
});
Route::get('/championselect', function () {
    return view('ChampionSelect');
});
Route::get('/Documentation', function () {
    return view('Documentation');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/pytania', TopMain::class);

Route::get('/pytaniaadc', AdcMain::class);

Route::get('/pytaniasupport', SupportMain::class);

Route::get('/pytaniamid', MidMain::class);

Route::get('/pytaniajungle', JungleMain::class);







//Route::get('/main', [MainController::class, 'index']);
//Route::post('/show', [MainController::class, 'show']);

