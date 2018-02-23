<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});*/



Route::group(['middleware' => 'web'], function () {

    Route::get('users/getCurrentPlan', 'UsersController@getCurrentPlan');

    Route::resource('users', 'UsersController');
    Route::resource('posts', 'PostsController');
    Route::resource('plans', 'PlansController');
    Route::resource('todos', 'TodosController');
    Route::resource('criptos', 'CriptosController');

    //Route::get('logout', 'UsersController@logout');

    Auth::routes();

    Route::get('/logout', 'UsersController@logout')->name('logout');

    Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');

    Route::post('/users/saveKeys',['as' => 'users.saveKeys', 'uses' => 'UsersController@saveKeys']);
    Route::post('/users/refreshAccount',['as' => 'users.refreshAccount', 'uses' => 'UsersController@refreshAccount']);


    Route::post('/plans/activate',['as' => 'plans.activate', 'uses' => 'PlansController@activate']);

});

Route::get('/', 'PagesController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
