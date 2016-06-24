<?php
	namespace App\Http\Controllers\admin;
	use App\Http\Controllers\Controller;
	use DB,Redirect;
	use Illuminate\Support\Facades\Input;
	class BunchController extends Controller
	{
		/**
		*	显示打卡的页面
		**/
		public function bunch_index()
		{	
			if(!empty($_GET['code']))
			{
				$code = $_GET['code'];
				$access_token = $this->getAccessToken();
				// echo $access_token;die;
				$url = "https://qyapi.weixin.qq.com/cgi-bin/user/getuserinfo?access_token=$access_token&code=$code";
				$str = file_get_contents($url);
				$arr = json_decode($str,true);
				// print_r($arr);die;
				$userid = $arr['UserId'];
				//获取用户名
				$url1 = "https://qyapi.weixin.qq.com/cgi-bin/user/get?access_token=$access_token&userid=$userid";
				$strs = file_get_contents($url1);
				$data = json_decode($strs,true);
				//获取sapi_ticket 
				// $ti_data['ticket'] = $this->getTicket();
				// $ti_data['noncestr'] = 'Wm3WZYTPz0wzccnW';
				// $ti_data['timestamp'] = time();
				// $ti_data['url'] = "http://118.192.138.230:8081/admin/bunch_index";
				// $ti_data['corpId'] = 'wxdecbe577e44e61b6';
				// $ti_data['signature'] = sha1("jsapi_ticket=$ti_data[ticket]&noncestr=Wm3WZYTPz0wzccnW&timestamp=$ti_data[timestamp]&url=$ti_data[url]");
				// print_r($ti_data);die;
				return view('admin/bunch',['data'=>$data]);
			}
			else
			{
				// $access_token = $this->getAccessToken();
				// // echo $access_token;
				// $ti_data['ticket'] = $this->getTicket();
				// $ti_data['noncestr'] = 'Wm3WZYTPz0wzccnW';
				// $ti_data['timestamp'] = time();
				// $ti_data['url'] = "http://118.192.138.230:8081/admin/bunch_index";
				// $ti_data['corpId'] = 'wxdecbe577e44e61b6';
				// $ti_data['access_token'] = $access_token;
				// $ti_data['signature'] = sha1("jsapi_ticket=$ti_data[ticket]&noncestr=Wm3WZYTPz0wzccnW&timestamp=$ti_data[timestamp]&url=$ti_data[url]");
				// print_r($ti_data);die;
			    return view('admin/bunch');
			}
		}
		/**
		*	完成打卡                                                       
		**/
		public function sign_on()
		{
			$userid = Input::get('userid');
			$username = Input::get('user_name');
			$add_time = time();
			$sql = "insert into user_signon(user_id,user_name,add_time) values(null,'$user_id','$username','$add_time')";
			$res = DB::insert($sql);
			if($res)
			{
				$sql = "update user_signon set user_status = 1";
				$re = DB::update($sql);
				if($re)
				{
					echo 1;
				}
				else
				{
					echo 0;
				}
			}
			else
			{
				echo "<script>alert('签到失败');</script>";
			}
		}
		/**
		*获取accessToken
		**/
		public function getAccessToken()
		{
			if(isset($_SESSION['access_token']) && $_SESSION['expires_in']+7200>time())
			{
				return $_SESSION['access_token'];
				die;	
			}
			$corpId = 'wxdecbe577e44e61b6';
			$Secret = 'gUy4FjF5xJWFUcdSRvpidg7F0mMOHyg055EFzSjfUhncr_9HSJBCYBbtvgnwA6qt';
			$url = 'https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid='.$corpId.'&corpsecret='.$Secret;
			$data = file_get_contents($url);
			$arr = json_decode($data,true);
			// return $arr;
			$_SESSION['access_token'] = $arr['access_token'];
			$_SESSION['expires_in'] = time();
			return $arr['access_token'];
		}
		/**
		*获取js SDK
		**/
		public function getTicket()
		{
			if(isset($_SESSION['ticket']) && $_SESSION['expires_in']+7200>time())
			{
				return $_SESSION['ticket'];
				die;	
			}
			$access_token = $this->getAccessToken();
			$url = "https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket?access_token=$access_token";
			$data = file_get_contents($url);
			$arr = json_decode($data,true);
			// return $arr;
			$_SESSION['ticket'] = $arr['ticket'];
			$_SESSION['ticket'] = time();
			return $arr['ticket'];
		}
	}


?>