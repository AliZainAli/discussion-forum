<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Resource_;

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('discussions', 'DiscussionsController');

Route::resource('discussions/{discussion}/replies', 'RepliesController');

Route::post('discussions/{discussion}/replies/{reply}/matk-as-best-reply', 'DiscussionsController@reply')->name('discussions.best-reply');

Route::get('users/notifications', [UsersController::class, 'notifications'])->name('users.notifications');
