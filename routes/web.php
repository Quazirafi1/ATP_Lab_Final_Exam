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

Route::get('/', function(){

	echo "welcome";
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');

Route::get('/homepage', 'GeneralController@index');


Route::get('/general/all', ['as'=>'general.all','uses'=>'GeneralController@all']);


Route::get('/general/edit/{id}', 'GeneralController@edit2')->name('general.edit2');
Route::post('/general/edit/{id}', 'GeneralController@update2')->name('general.update2');

Route::get('/homeuser', ['as'=>'home.index2','uses'=>'HomeController@index2']);
Route::get('/homeuser3', ['as'=>'home.index3','uses'=>'HomeController@index3']);

//Route::get('/admin/userList', 'StudentController@index')->name('student.index');

Route::get('/product/add', 'ProductController@add')->name('product.add');
Route::post('/product/add', 'ProductController@insert');

Route::get('/product/productList', ['as'=>'product.index','uses'=>'ProductController@index']);

Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::post('/product/edit/{id}', 'ProductController@update')->name('product.update');

Route::get('/scout/edit/{id}', 'ProductController@edit2')->name('product.edit2');
Route::post('/scout/edit/{id}', 'ProductController@update2')->name('product.update2');


Route::get('/product/delete/{id}', 'ProductController@delete')->name('product.delete');
Route::post('/product/delete/{id}', 'ProductController@destroy')->name('product.destroy');

Route::group(['middleware'=>['ver']],function(){
    Route::get('/home', ['as'=>'home.index','uses'=>'HomeController@index']);

    Route::get('/student/userList', ['as'=>'student.index','uses'=>'StudentController@index']);
    Route::get('/student/details/{id}', 'StudentController@details')->name('student.details');

    Route::get('/post/list', ['as'=>'post.index','uses'=>'PostController@index']);
    //Route::get('/student/details/{id}', 'StudentController@details')->name('student.details');

    Route::get('/student/edit/{id}', 'StudentController@edit')->name('student.edit');
    Route::post('/student/edit/{id}', 'StudentController@update')->name('student.update');

    Route::get('/post/edit/{id}', 'PostController@edit')->name('post.edit');
    Route::post('/post/edit/{id}', 'PostController@update')->name('post.update');


    Route::get('/post/approve/{id}', 'PostController@approve')->name('post.approve');
    Route::post('/post/approve/{id}', 'PostController@approval')->name('post.approval');

    Route::get('/post/delete/{id}', 'PostController@delete')->name('post.delete');
    Route::post('/post/delete/{id}', 'PostController@destroy')->name('post.destroy');

    Route::get('/student/delete/{id}', 'StudentController@delete')->name('student.delete');
    Route::post('/student/delete/{id}', 'StudentController@destroy')->name('student.destroy');

    Route::get('/student/add', 'StudentController@add')->name('student.add');
    Route::post('/student/add', 'StudentController@insert');

    Route::get('/live_search', 'LiveSearch@index')->name('livesearch.index');;
    Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');
});

