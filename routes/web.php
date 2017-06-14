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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('/inicio', function()
{
    return View::make('pages.home');
});
Route::get('/nosotros', function()
{
    return View::make('pages.about');
});
Route::get('projects', function()
{
    return View::make('pages.projects');
});
/*Route::get('contact', function()
{
    return View::make('pages.contact');
});*/
Route::get('/contacto', 'ContactoController@index')->name('contacto');
Route::resource('contact','MailController');
