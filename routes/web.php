<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(HomeController::class)
    ->prefix('/homes')
    ->name('homes.')
    ->group(static function(): void {
        Route::get('', 'index')->name('index');
    })
;


Route::controller(AboutMeController::class)
    ->prefix('/about-me')
    ->name('about-me.')
    ->group(static function(): void {
        Route::get('', 'index')->name('index');
    })
;
