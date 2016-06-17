<?php

namespace App\Http\Controllers; 
use Log;
use App\verify\WxBizMsgCryptController;
 class WeChatController extends Controller {
      /** 
           * 处理微信的请求消息     
            * 
           * @return string      
           */
       public function serve() 
       { 
         // Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志     
          $wechat = app('wechat');   
         //dd($wechat->server);
          $wechat->server->setMessageHandler(function($message){    
              return "欢迎关注 ！";       
            });      
            Log::info('return response.');   
              return $wechat->server->serve(); 
       } 
       public function verify(){
           //  include_once "verify/wxBizMsgCrypt.php";
            // // 加密key 
            // $encodingAesKey = "a5Uhuzo9MF2lo9JxtiqlhYQzoyyCioucBqWJCAaMEqH";
            // // token 值
            // $token = "testapi";
            // // 企业号ID

            // $appid = "wx07a6616a2553293f";

            // $corpsecret="1PeGUvsv4CnoEocGl3Ad-E-E0TtDpebchUVVfhtv56AHYNSYRTzgTJ7Zo55B_0cw";

            
            // $sVerifyMsgSig = $_GET['msg_signature'];
            // $sVerifyTimeStamp = $_GET['timestamp'];
            // $sVerifyNonce = $_GET['nonce'];
            // $sVerifyEchoStr = $_GET['echostr'];

            // 需要返回的明文
           //  $sEchoStr = "";
           // $wxcpt=new WXBizMsgCrypt();
           //  $wxcpt -> Wx($token, $encodingAesKey, $corpId);
           //  dd($wxcpt);
           //  $errCode = $wxcpt->VerifyURL($sVerifyMsgSig, $sVerifyTimeStamp, $sVerifyNonce, $sVerifyEchoStr, $sEchoStr);

           //  // print_r($errCode);die;

           //  if ($errCode == 0) {
           //   // 验证URL成功，将sEchoStr返回
           //   echo $sEchoStr;
           //  } else {
           //   print("ERR: " . $errCode . "\n\n");
           //  }
       }
       public 


}