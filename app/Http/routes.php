<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\BlogContent;

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/blog',function()
{
	$blogContents = BlogContent::all();
	print_r($blogContents);
	$result = '';

  //return View::make('blog');
	//return 'Hello World';

});

Route::get('debug',function()
{
  return 'debug';
});
