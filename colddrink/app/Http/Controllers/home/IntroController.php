<?php
namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;
use DB,Input;
class IntroController extends Controller
{
	public function introduce()
	{
		return view('home/jieshao');
	}
}
?>