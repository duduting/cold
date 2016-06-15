<?php
namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;
use DB,Input;
class BrandController extends Controller
{
	public function brand()
	{
		return view('home/pinpai');
	}
}
?>