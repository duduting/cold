<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use DB,Input;
class IndexController extends Controller
{
	public function main()
	{
	
		return view('admin/main');
	}
	public function index()
	{
		return view('admin/index');
	}
	public function top()
	{
		return view('admin/top');
	}
	public function left()
	{
		return view('admin/left');
	}
}
?>