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
Route::get('martin', function()
{
    return 'Martin Rowe! Again and again for github';
});
Route::get('users', function()
{
	/*$users = DB::table('users')->get(); */
	$users = User::all();
	return $users; 
});
Route::get('town', function()
{
	/*$users = DB::connection('foo')->select(...); */
	/*$results = DB::connection('usersConn')->select('select * from users'); */
	$users = DB::table('town')->get();
	return $users; 
});
