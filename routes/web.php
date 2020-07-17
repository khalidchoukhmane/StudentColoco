<?php

use Illuminate\Support\Facades\Route;
use App\Models\Offre;
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

//Route::get('/', 'offreController@index');

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/listCards', function () {
    return view('listCards');
});

View::composer(['*'], function($view){

    $contacts = Offre::all();
    $view->with('contacts', $contacts );
    
});


