<?php
namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;
use DB,Input;
class FamilyController extends Controller
{
	public function family()
	{
		return view('home/jaimeng');
	}
}
?>