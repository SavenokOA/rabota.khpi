<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::middleware(['set_locale'])->group(function(){

    Route::get('/', function () {
        return view('welcome');
    });


    Route::get('locale/{locale}', [MainController::class, 'changeLocale'])->name('locale');

}
);


