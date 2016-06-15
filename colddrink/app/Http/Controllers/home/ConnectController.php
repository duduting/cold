<?php
namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;
use DB,Input;
class ConnectController extends Controller
{
	public function connect()
	{
		return view('home/lianxi');
	}
}
?>