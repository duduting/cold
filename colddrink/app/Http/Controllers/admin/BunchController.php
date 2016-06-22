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
				$url = "https://qyapi.weixin.qq.com/cgi-bin/user/getuserinfo?access_token=$access_token&code=$code";
				$str = file_get_contents($url);
				$arr = json_decode($str,true);
				print_r($arr);die;
				$userid = $arr['UserId'];
				$url1 = "https://qyapi.weixin.qq.com/cgi-bin/user/get?access_token=$access_token&userid=$userid";
				//获取sapi_ticket 
				$ticket_url = "https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket?access_token=$access_token";
				echo file_get_contents($ticket_str);
				die;
				$ticket_data = json_decode($ticket_data);
				// print_r($ticket_data);die;
				//获取用户名
				$strs = file_get_contents($url1);
				$data = json_decode($strs,true);
				return view('admin/bunch',['data'=>$data]);
			}
			else
			{
			    return view('admin/bunch');
			}
		}
		/**
		*	完成打卡                                                       
		**/
		public function sign_on()
		{
			$userid = Input::get('userid');

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
	}


?>