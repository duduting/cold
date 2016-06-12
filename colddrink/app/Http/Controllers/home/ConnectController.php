<?php
namespace App\Http\Controllers\home;
use App\Http\Controllers\controller;
use DB,Input;
class ConnectController extends Controller
{
	public function connect()
	{
		return view('home\lianxi');
	}
}
?>