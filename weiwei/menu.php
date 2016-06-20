<?php
	$access_token = getAccessToken();
	// print_r($access_token);
    $corpId = 'wxdecbe577e44e61b6';
    $address = urlencode('http://118.192.138.230:8081/index.php/admin/meeting_room');
	$agentId = 10;
    $url1 = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$corpId.'&redirect_uri='.$address.'&response_type=code&scope=snsapi_base#wechat_redirect';
	// echo $url1;die;
    $url = "https://qyapi.weixin.qq.com/cgi-bin/menu/create?access_token=$access_token&agentid=$agentId";
	$arr = '{
    "button": [
        {
            "name": "签到打卡", 
            "type": "view",
            "url" : "'.$url1.'"
        }, 
        {
            "name": "发图", 
            "sub_button": [
                {
                    "type": "pic_sysphoto", 
                    "name": "系统拍照发图", 
                    "key": "rselfmenu_1_0", 
                   "sub_button": [ ]
                 }, 
                {
                    "type": "pic_photo_or_album", 
                    "name": "拍照或者相册发图", 
                    "key": "rselfmenu_1_1", 
                    "sub_button": [ ]
                }, 
                {
                    "type": "pic_weixin", 
                    "name": "微信相册发图", 
                    "key": "rselfmenu_1_2", 
                    "sub_button": [ ]
                }
            ]
        }, 
        {
            "name": "发送位置", 
            "type": "location_select", 
            "key": "rselfmenu_2_0"
        }
    ]
}';
    echo sendMsg($url,$arr);
	function sendMsg ( $url, $sendData )
    {
        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt ( $ch, CURLOPT_POST, 1 );
        curl_setopt ( $ch, CURLOPT_HEADER, 0 );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $sendData );
        $return = curl_exec ( $ch );
        curl_close ( $ch );
        return $return;
    }

	function getAccessToken()
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

?>