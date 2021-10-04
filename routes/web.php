<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/contact/{id}', [HomeController::class, 'getParamContact'])->name('getParamContact');

Route::get('/form', [FormController::class, 'getForm'])->name('get.form');

Route::post('postform', [FormController::class, 'postForm'])->name('post.form');

Route::get('querybuilder', [FormController::class, 'queryBuilder']);


Route::get('/request', function(Request $request){
    return view('form.request', ['request' => $request]);
})->name('request.get');



Route::group(['prefix' => 'category'], function() {
    Route::get('/add', [CategoryController::class, 'add']);

    Route::get('/show', function(){
        return "show";
    });
});

