<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QoeController;
use App\Http\Controllers\QosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemancarController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\SurveylistController;
use App\Http\Controllers\SurveysController;
use App\Http\Controllers\SurveyquestionController;
use App\Http\Controllers\MapController;

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
    return view('home');
});

Route::controller(ArticlesController::class)->prefix('articles')->group(function () {
    Route::get('', 'index')->name('articles');
    Route::get('show{id}', 'show')->name('articles.show');
});

Route::controller(SurveysController::class)->prefix('surveys')->group(function () {
    Route::get('', 'index')->name('surveys');
    Route::get('create', 'form')->name('surveys.form');
    Route::get('store', 'success')->name('surveys.success');
});

Route::get('home',[HomeController::class, 'home'])->name('home');

Route::get('map',[MapController::class, 'map'])->name('map');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(QoeController::class)->prefix('qoedata')->group(function () {
        Route::get('', 'index')->name('qoedata');
        Route::get('create', 'create')->name('qoedata.create');
        Route::post('store', 'store')->name('qoedata.store');
        Route::get('show/{id}', 'show')->name('qoedata.show');
        Route::get('edit/{id}', 'edit')->name('qoedata.edit');
        Route::put('edit/{id}', 'update')->name('qoedata.update');
        Route::delete('destroy/{id}', 'destroy')->name('qoedata.destroy');
    });

    Route::controller(QosController::class)->prefix('qosdata')->group(function () {
        Route::get('', 'index')->name('qosdata');
        Route::get('create', 'create')->name('qosdata.create');
        Route::post('store', 'store')->name('qosdata.store');
        Route::get('show/{id}', 'show')->name('qosdata.show');
        Route::get('edit/{id}', 'edit')->name('qosdata.edit');
        Route::put('edit/{id}', 'update')->name('qosdata.update');
        Route::delete('destroy/{id}', 'destroy')->name('qosdata.destroy');
    });

    Route::controller(PemancarController::class)->prefix('pemancar')->group(function () {
        Route::get('', 'index')->name('pemancar');
        Route::get('create', 'create')->name('pemancar.create');
        Route::post('store', 'store')->name('pemancar.store');
        Route::get('show/{id}', 'show')->name('pemancar.show');
        Route::get('edit/{id}', 'edit')->name('pemancar.edit');
        Route::put('edit/{id}', 'update')->name('pemancar.update');
        Route::delete('destroy/{id}', 'destroy')->name('pemancar.destroy');
    });

    Route::controller(ArticleController::class)->prefix('article')->group(function () {
        Route::get('', 'index')->name('article');
        Route::get('create', 'create')->name('article.create');
        Route::post('store', 'store')->name('article.store');
        Route::get('show/{id}', 'show')->name('article.show');
        Route::get('edit/{id}', 'edit')->name('article.edit');
        Route::put('edit/{id}', 'update')->name('article.update');
        Route::delete('destroy/{id}', 'destroy')->name('article.destroy');
    });

    Route::controller(SurveyquestionController::class)->prefix('surveyquestion')->group(function () {
        Route::get('', 'index')->name('surveyquestion');
        Route::get('create', 'create')->name('surveyquestion.create');
        Route::post('store', 'store')->name('surveyquestion.store');
        Route::get('show/{id}', 'show')->name('surveyquestion.show');
        Route::get('edit/{id}', 'edit')->name('surveyquestion.edit');
        Route::put('edit/{id}', 'update')->name('surveyquestion.update');
        Route::delete('destroy/{id}', 'destroy')->name('surveyquestion.destroy');
    });

    Route::controller(SurveylistController::class)->prefix('surveylist')->group(function () {
        Route::get('', 'index')->name('surveylist');
        Route::post('store', 'store')->name('surveylist.store');
        Route::get('show/{id}', 'show')->name('surveylist.show');
        Route::delete('destroy/{id}', 'destroy')->name('surveylist.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

