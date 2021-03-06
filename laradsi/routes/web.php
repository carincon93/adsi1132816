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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login/google', 'GoogleController@redirectToGoogle');
Route::get('login/google/callback', 'GoogleController@handleGoogleCallback');
Route::get('login/twitter', 'TwitterController@redirectToTwitter');
Route::get('login/twitter/callback', 'TwitterController@handleTwitterCallback');
Route::get('login/facebook', 'FacebookController@redirectToFacebook');
Route::get('login/facebook/callback', 'FacebookController@handleFacebookCallback');

Route::get('/', 'ArticleController@listArticles');
Route::post('ajaxsearch', 'ArticleController@ajaxsearch');
Route::post('article/search', 'ArticleController@ajaxsearch');
Route::get('article/pdf', 'ArticleController@pdf');
Route::get('article/excel', 'ArticleController@excel');
Route::resource('article', 'ArticleController');

Route::resource('category', 'CategoryController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login/{locale}', function ($locale)
{
	App::setLocale($locale);
	return view('auth.login');
});
