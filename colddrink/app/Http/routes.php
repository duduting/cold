<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::any('/wechat','WeChatController@serve');
	 //后台的展示
Route::get('admin/main', 'admin\IndexController@main');
Route::get('admin/index', 'admin\IndexController@index');
Route::get('admin/top', 'admin\IndexController@top');
Route::get('admin/left', 'admin\IndexController@left');
Route::get('admin/login_out', 'admin\LoginController@login_out');
Route::get('admin/add_meeting', 'admin\MeetingController@add_meeting');
Route::get('admin/meeting_list', 'admin\MeetingController@meeting_list');
Route::get('admin/meeting_room', 'admin\MeetingController@meeting_room');
Route::get('admin/meeting_room_list', 'admin\MeetingController@meeting_room_list');
Route::get('admin/connect_list', 'admin\ConnectController@connect_list');
Route::post('admin/add_meeting_room', 'admin\MeetingController@add_meeting_room');
Route::post('admin/update_room', 'admin\MeetingController@update_room');
Route::get('admin/update_meeting_room', 'admin\MeetingController@update_meeting_room');


//前台首页的展示
Route::get('/', 'home\IndexController@index');
Route::get('home/indexs', 'home\IndexController@index');
Route::get('home/introduce', 'home\IntroController@introduce');
Route::get('home/brand', 'home\BrandController@brand');
Route::get('home/album', 'home\AlbumController@album');
Route::get('home/family', 'home\FamilyController@family');
Route::get('home/connect', 'home\ConnectController@connect');
Route::get('home/album_more', 'home\Album_moreController@album_more');
Route::get('home/add_meeting', 'home\MeetingController@add_meeting');
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

Route::group(['middleware' => ['web']], function () {
    //
});
