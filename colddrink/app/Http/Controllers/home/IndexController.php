<?php
namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;
use DB,Input;
class IndexController extends Controller
{
	public function index()
	{
		return view('home/default');
	}
}
?>