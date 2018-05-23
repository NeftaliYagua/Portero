<?php
//if(env('APP_ENV')=='production') {
URL::forceScheme('https');
//}
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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/pusher', function () {
    event(new \App\Events\Event('Hola mundo'));
    return 'ok';
});
Auth::routes();
Route::get('/home', 'HomeController@home')->name('home');
