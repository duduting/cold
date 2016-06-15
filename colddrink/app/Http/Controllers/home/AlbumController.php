<?php
namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;
use DB,Input;
class AlbumController extends Controller
{
	public function album()
	{
		return view('home/xiangce');
	}
}
?>