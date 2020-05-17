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
// Route::get('/test',function (){
//     echo '??get??';
// });

// Route::post('/test',function (){
//     echo '??post??';
// });

// Route::put('/test',function (){
//     echo '??put??';
// });

// Route::delete('/test',function (){
//     echo '??delete??';
// });

// Route::match(['get','post'],'/test',function (){
//     echo '????';
// });

// Route::get('test/{id}',function ($id){
//     dump($id);
// });

Route::get('a', function () {
    return '<a href="' .route('b').'">去b</a>';
})->name('a');

Route::get('b', function () {
    return '<a href="' .route('a').'">去a</a>';
})->name('b');

Route::get('user/index','UserController@index');

Route::get('admin/user','UserController@index');

Route::get('admin/login','Admin\LoginController@login');
Route::get('admin/user/{id}','Admin\LoginController@user');

Route::get('login','LoginController@index')->name('login');
Route::post('login','LoginController@login')->name('login');