<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Factory;
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

Route::get('/', [
    'uses'=>'PostsController@getIndex',
    'as'=>'blogIndex'
])->name('blogIndex');

Route::post('/create', [
    'uses' => 'PostsController@create',
    'as' => 'create'
])->name('create');

Route::get('/delete/{id}', [
    'uses' => 'PostsController@delete',
    'as' => 'delete'
])->name('delete');

Route::post('/edit/{id}', [
    'uses' => 'PostsController@edit',
    'as' => 'edit'
])->name('edit');


Route::get('/edit/{id}', [
    'uses' => 'PostsController@getEdit',
    'as' => 'getEdit'
])->name('getEdit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
