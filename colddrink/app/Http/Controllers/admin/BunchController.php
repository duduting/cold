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
				$access_token = $this->getAccessToken();
				$url = "https://qyapi.weixin.qq.com/cgi-bin/user/getuserinfo?access_token=$access_token&code=$code";
				echo file_get_contents($url);die;
			}
			else
			{
			    return view('admin/bunch');
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
	}


?>