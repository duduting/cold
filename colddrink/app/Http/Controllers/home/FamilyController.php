<?php
namespace App\Http\Controllers\home;
use App\Http\Controllers\controller;
use DB,Input;
class FamilyController extends Controller
{
	public function family()
	{
		return view('home\jaimeng');
	}
}
?>