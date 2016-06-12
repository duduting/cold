
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

// Route::get('/', function () {
//     return view('welcome');
// });
//前台首页的展示
Route::get('home/indexs', 'home\IndexController@index');
Route::get('home/introduce', 'home\IntroController@introduce');
Route::get('home/brand', 'home\BrandController@brand');
Route::get('home/album', 'home\AlbumController@album');
Route::get('home/family', 'home\FamilyController@family');
Route::get('home/connect', 'home\ConnectController@connect');
Route::get('home/album_more', 'home\Album_moreController@album_more');
//后台的展示
Route::get('admin/indexs', 'admin\IndexController@index');
Route::get('admin/top', 'admin\IndexController@top');
Route::get('admin/main', 'admin\IndexController@main');
Route::get('admin/left', 'admin\IndexController@left');
Route::get('admin/login_out', 'admin\LoginController@login_out');
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// Route::group(['middleware' => ['web']], function () {
//     //
// });
