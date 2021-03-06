<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FairController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ResponseController;
use App\Http\Controllers\Admin\VacanciesController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\VacancyFormController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;




Route::middleware(['set_locale'])->group(function(){

    Route::get('/', [MainController::class, 'ReturnLocale']);
    Route::get('/main', [MainController::class, 'allVacancy'])->name('welcome');
    Route::get('/all_vacancies', [MainController::class, 'viewVacancies'])->name('all-vacancies');
    Route::get('/all_fairs', [MainController::class, 'viewFairs'])->name('all-fairs');
    Route::get('/all_vacancies/{id}', [MainController::class, 'viewThisVacancy'])->name('this_vacancy');
    Route::get('locale/{locale}', [MainController::class, 'changeLocale'])->name('locale');
    Route::post('/vacancy_form', [VacancyFormController::class, 'add_vacancy'])->name('send-form');
    Route::post('/vacancy_form-user', [VacancyFormController::class, 'add_response'])->name('send-form-user');
    Route::resource('subscribe', SubscribeController::class);
    Route::resource('response', ResponseController::class);
    Route::get('/login', [HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('home')-> group( function () {
    Route::get('/register', function (){
        return view('auth.register');
    });
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('post', PostController::class);
    Route::resource('fair', FairController::class);
    Route::resource('vacancy', VacancyController::class);
    Route::resource('vacancies', VacanciesController::class);
    Route::resource('response', ResponseController::class);
    Route::resource('subscribe', SubscribeController::class);
    Route::get('http://rabota.khpi/home/vacancies/{id}/apply', [VacancyFormController::class, 'ApplyVacancy'])->name('apply');


});
});




Auth::routes();


