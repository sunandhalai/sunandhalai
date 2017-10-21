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


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => config('url-route.show_locale') ? [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] : []
], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function()
    {
//        return config('url-route.show_locale') ? 'true' : 'false';
        return view('welcome');
    });

    Route::get('test',function(){
        return 'test';
    });
});