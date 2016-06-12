<?php
namespace App\Http\Controllers\home;
use App\Http\Controllers\controller;
use DB,Input;
class BrandController extends Controller
{
	public function brand()
	{
		return view('home\pinpai');
	}
}
?>