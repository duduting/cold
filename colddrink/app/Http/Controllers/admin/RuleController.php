<?php
	namespace App\Http\Controllers\admin;
	use App\Http\Controllers\Controller;
	use DB,Redirect;
	use Illuminate\Support\Facades\Input;
	class RuleController extends Controller
	{
		/**
		*	规则列表的显示
		**/
		public function rule_list()
		{
			$sql = "select * from rule";
			$data = DB::select($sql);
			return view('admin/rule_list',['data'=>$data]);
		}
		/**
		*	规则添加的表单显示页
		**/
		public function rule_index()
		{
			return view('admin/rule_index');
		}
		/**
		*	规则的添加
		**/
		public function add_rule()
		{
			$rule_content = input::get('rule_content');
			$add_time = time();
			$sql = "insert into rule values(null,'$rule_content','$add_time')";
			$res = DB::insert($sql);
			if($res)
			{
				echo "<script>alert('添加成功')</script>";
				return Redirect::action('admin\RuleController@rule_list');
			}
			else
			{
				echo "<script>alert('添加失败')</script>";
			}
		}
		/**
		*	规则的删除
		**/
		public function del_rule()
		{
			$id = input::get('id');
			$sql = "delete from rule where id = $id";
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
	}

?>