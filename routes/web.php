<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/about',function ()
{


    return view('about',[
        'articles'=> Article::latest()->get()
    ]);
});
Route::get('/contact',function ()
{


    return view('contact',[
        'articles'=> Article::latest()->get()
    ]);
});
Route::get('/articles','ArticlesController@index')->name('articles.index');
Route::post('/articles','ArticlesController@store');
Route::get('/articles/create','ArticlesController@create')->name('articles.create')->middleware('auth');
Route::get('/articles/{article}','ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit','ArticlesController@edit')->middleware('auth');
Route::put('/articles/{article}/','ArticlesController@update');
