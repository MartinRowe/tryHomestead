<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('trysass', function()
{
	return View::make('trysass');
});
Route::get('users',function()
{
 return View::make('users');
});
Route::get('martin', function()
{
    return 'Martin Rowe! Again and again for github';
});
Route::get('users', function()
{
	$users = DB::table('Users')->get();
	return $users;
//	return View::make('users.index', ['users' => $users]);
});
