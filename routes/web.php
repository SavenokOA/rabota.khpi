<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VacancyFormController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;




Route::middleware(['set_locale'])->group(function(){

    Route::get('/', [MainController::class, 'ReturnLocale']);
    Route::get('/main', [MainController::class, 'allVacancy'])->name('welcome');


    Route::get('locale/{locale}', [MainController::class, 'changeLocale'])->name('locale');
    Route::post('/vacancy_form', [VacancyFormController::class, 'add_vacancy'])->name('send-form');

    Route::get('/login', [HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('home')-> group( function () {
    Route::get('/register', function (){
        return view('auth.register');
    });
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('post', PostController::class);


});
});




Auth::routes();


