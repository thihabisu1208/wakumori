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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/student', 'AdminController@index');

Route::get('/usagi', 'AdminController@usagi');

Route::get('/kuma', 'AdminController@kuma');

Route::get('/risu', 'AdminController@risu');

Route::get('/teacher', 'SuperAdminController@index');

// Route::get('/admin', function() {
//     return 'you are admin';
// })->middleware(['auth', 'role']);

// Route::group(['middleware' => 'web'], function () {

//     Route::auth();

//     Route::group(['middleware' => ['auth', 'role']], function () {
//         // All routes you put here can only be accessible to users with super-admin role
//         Route::get('/superadmin', 'SuperAdminController@index');
//     });

//     Route::group(['middleware' => 'auth'], function () {
//         // All routes you put here can be accessible to all authenticated users
//         Route::get('/admin', 'AdminController@index');
//     });
// });