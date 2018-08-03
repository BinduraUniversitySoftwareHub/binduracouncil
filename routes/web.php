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
use App\Mail;
use Carbon\Carbon;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/mail','MailController');
Route::get('/outbox','MailController@outbox');
Route::get('/inbox','MailController@inbox');
Route::get('/counter','MailController@counter');
Route::get('/count','MailController@count');
Route::get('/delivered','MailController@countDelivered');
Route::get('/deli','MailController@delivered');

Route::resource('department','DepartmentController');
Route::get('/agents','UserController@agents');

Route::group(['middleware' => ['admin']], function () {

    Route::get('/admin',function(){
    return view('admin');
    });

     Route::get('/addUsers',function(){
    return view('auth.register');
    });
      Route::post('/user','UserController@create');
    


});
Route::group(['middleware' => ['registry']], function () {

 Route::get('/registry',function(){
    return view('registry');
    });
 Route::post('/messenger','UserController@create');
 //Route::get('/agent','UserController@agents');

});

    Route::get('/rand',function(){
   
    });