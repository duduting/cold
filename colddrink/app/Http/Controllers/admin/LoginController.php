<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\controller;
use DB,Input;
class LoginController extends Controller
{
	public function login_out()
	{
		return view('admin\login');
	}
}
?>