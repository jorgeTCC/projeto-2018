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
Route::group(['prefix' => 'dashboard'], function(){
   Route::get('/', 'DashboardController@index')->name('home');
   Route::resource('colaboradores','ColaboradorController');
   Route::resource('empresas','EmpresaController');
   Route::resource('areas','AreaController');
   Route::get('/home', 'HomeController@index')->name('home');

   //PainelController
   //EmpresaController
   //PermissionController
   //RoleController
});

Route::get('/home', 'EmpresaController@index')->name('home');
Route::get('empresa/{id}/update', 'EmpresaController@update');
Route::get('roles-permissions', 'EmpresaController@rolesPermissions');

