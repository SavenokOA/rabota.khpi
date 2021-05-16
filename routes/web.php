<?php

use App\Http\Controllers\VacancyFormController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::middleware(['set_locale'])->group(function(){

    Route::get('/', function () {
        return view('welcome');
    });


    Route::get('locale/{locale}', [MainController::class, 'changeLocale'])->name('locale');
    Route::post('/vacancy_form', [VacancyFormController::class, 'add_vacancy'])->name('send-form');
}
);




