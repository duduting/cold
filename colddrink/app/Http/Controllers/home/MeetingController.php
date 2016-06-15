<?php
	namespace App\Http\Controllers\home;
	use App\Http\Controllers\Controller;
	use DB,Input;
	class MeetingController extends Controller
	{
		public function add_meeting()
		{
			return view('home/add_meeting');
		}
	}

?>