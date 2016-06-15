<?php
namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;
use DB,Input;
class Album_moreController extends Controller
{
	public function album_more()
	{
		return view('home/xiangcemore');
	}
}
?>