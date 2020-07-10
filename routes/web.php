<?php

use Illuminate\Support\Facades\Route;
use App\Task;
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

Route::get('/', function () {
    return redirect('/tasks');
});


Route::resource('/tasks', 'TaskController');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');


