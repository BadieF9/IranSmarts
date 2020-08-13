<?php

use Illuminate\Support\Facades\Route;

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
    \App\Role::create([
        'name' => 'admin',
        'label' => 'مدیر اصلی',
        'permission_id' => '1'
    ]);
    return view('landing-page');
});

Route::get('/home', function () {
    return view('landing-page');
});


Route::prefix('admin')->namespace('Admin')->middleware('auth')->group(function (){
    Route::get('/', 'LandingPage@index');
    Route::resource('products', 'ProductController');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');

    Route::group([],function (){
       Route::get('users', 'UserController@index');
       Route::get('user-info/{user}', 'UserController@info');
    });

});


Route::prefix('products')->namespace('products')->group(function (){
    Route::get('/automatic-gate-opener/', 'ProductController@automaticGateOpener');
    Route::get('/camera/', 'ProductController@camera');
    Route::get('/{product}','ProductController@index');
});

Auth::routes();

