<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use DB,Redirect;
use Illuminate\Support\Facades\Input;
class MeetingController extends Controller
{
	// 添加会议
	public function add_meeting()
	{
		return view('admin/form');
	}
	// 会议列表
	public function meeting_list()
	{
		return view('admin/form');
	}
	// 添加会议室列表
	public function meeting_room()
	{
		return view('admin/meeting_room');
	}
	//会议室的添加
	public function add_meeting_room()
	{
		$room_name = Input::get('room_name');
		$room_address = Input::get('room_address');
		$status = Input::get('status');
		$facility = Input::get('facility');
		$sql = "insert into meeting_room(room_name,room_address,room_status,facility) values('$room_name','$room_address','$status','$facility')";
		$res = DB::insert($sql);
		if($res)
		{
			echo "<script>alert('添加成功，请到会议室列表查看');</script>";
			return Redirect::action('admin\MeetingController@meeting_room_list');
		}
	}
	// 会议室列表
	public function meeting_room_list()
	{
		$sql = "select * from meeting_room";
		$data = DB::select($sql);
		return view('admin/meeting_room_list',['data'=>$data]);
	}
	//会议室列表的删除
	public function del_meeting_room()
	{
		$id = Input::get('id');
		$sql = "delete from meeting_room where id = $id";
		$res = DB::delete($sql);
		if($res)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	//会议室列表的修改
	public function update_meeting_room()
	{
		$id = Input::get('id');
		$sql = "select * from meeting_room where room_id = $id";
		$arr = DB::select($sql);
		return view('admin/update',['data'=>$arr]);
	}
	//传值进行修改
	public function update_room()
	{
		$id = Input::get('id');
		$room_name = Input::get('room_name');
		$room_address = Input::get('room_address');
		$room_status = Input::get('status');
		$facility = Input::get('facility');
		$sql = "update meeting_room set room_name = '$room_name',room_address = '$room_address',room_status = '$room_status',facility = '$facility' where room_id = $id";
		// echo $sql;die;
		$res = DB::update($sql);
		if($res)
		{
			echo "<script>alert('修改成功！请返回列表查看')</script>";
			return Redirect::action('admin\MeetingController@meeting_room_list');
		}
	}

}