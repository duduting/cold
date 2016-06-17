<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use DB,Input;
class ConnectController extends Controller
{
	// 通讯管理
	public function connect_list()
	{
		return view('admin/form');
	}

}