﻿<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>美好时光产品推广</title>
<base href="/home/" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<base  />
<meta charset="utf-8">
<link href="index/css/photoswipe/photo.css" rel="stylesheet" type="text/css" />
</head>

<body id="photo">
<div class="qiandaobanner"> <a href="wxapi.php@ac=cate16&tid=569" ><img src="img/fBc6FjGtff.jpg" ></a> </div>
<div id="todayList"> 
  <!--显示相册名称+说明-->
  <ul  class="chatPanel">
    <li class="media mediaFullText"> <a href="wxapi.php@ac=photomore&tid=456">
      <div class="mediaPanel">
        <div class="mediaHead"><span class="title">2013秋冬</span>
          <div class="clr"></div>
        </div>
        <div class="mediaImg"><img src="weixin/2013qd/0.jpg"> </div>
        <div class="mediaContent mediaContentP">
          <p>2013秋冬</p>
        </div>
        <div class="mediaFooter"> <span class="mesgIcon right"></span><span class="bt">查看全部</span>
          <div class="clr"></div>
        </div>
      </div>
      </a> </li>
    <li class="media mediaFullText"> <a href="wxapi.php@ac=photomore&tid=455">
      <div class="mediaPanel">
        <div class="mediaHead"><span class="title">2013春夏</span>
          <div class="clr"></div>
        </div>
        <div class="mediaImg"><img src="weixin/2013cx/0.jpg"> </div>
        <div class="mediaContent mediaContentP">
          <p>2013春夏</p>
        </div>
        <div class="mediaFooter"> <span class="mesgIcon right"></span><span class="bt">查看全部</span>
          <div class="clr"></div>
        </div>
      </div>
      </a> </li>
    <li class="media mediaFullText"> <a href="wxapi.php@ac=photomore&tid=454">
      <div class="mediaPanel">
        <div class="mediaHead"><span class="title">2012秋冬</span>
          <div class="clr"></div>
        </div>
        <div class="mediaImg"><img src="weixin/2012qd/0.jpg"> </div>
        <div class="mediaContent mediaContentP">
          <p>2012秋冬</p>
        </div>
        <div class="mediaFooter"> <span class="mesgIcon right"></span><span class="bt">查看全部</span>
          <div class="clr"></div>
        </div>
      </div>
      </a> </li>
  </ul>
</div>
<!--页码--> 

<script>
function dourl(url){
location.href= url;
}
</script>
<link rel="stylesheet" href="index/css/plugmenu.css">
<style>
 .themeStyle{background:#E83407}  
</style>
<div class="plug-div">
  <div class="plug-phone">
    <div class="plug-menu themeStyle"><span class="close"></span></div>
    <div class="themeStyle plug-btn plug-btn1 close"><a  href="tel_3A057185195985"><span style="background-image: url(index/images/plugmenu/plugmenu1.png);" ></span></a></div>
    <div class="themeStyle plug-btn plug-btn2 close"><a  href="@ac=fans&c=&tid=569"><span style="background-image: url(index/images/plugmenu/plugmenu2.png);" ></span></a></div>
    <div class="themeStyle plug-btn plug-btn3 close"><a  href="../comment.duapp.com/@openid=&wxid=041dea8184944dbe512144f5307a67b4"><span style="background-image: url(index/images/plugmenu/plugmenu4.png);" ></span></a></div>
    <div class="themeStyle plug-btn plug-btn4 close"><a  href="@ac=cardunion&tid=569&c="><span style="background-image: url(index/images/plugmenu/plugmenu10.png);" ></span></a></div>
  </div>
</div>
<script src="index/js/zepto.min.js" type="text/javascript"></script> 
<script src="index/js/plugmenu.js" type="text/javascript"></script>
<div class="copyright"  >温馨提示：本信息仅供提供演示方便链接，与原网站无关！ <a href="default.htm">首页</a> <a href="jaimeng.htm">加盟页</a> <a href="jieshao.htm">介绍页</a> <a href="lianxi.htm">联系我们页</a> <a href="pinpai.htm">品牌页</a> <a href="xiangce.htm">相册列表页</a> <a href="xiangcemore.htm">相册正文页</a></div>
<script type="text/javascript">
 	        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        window.shareData = {  
           "imgUrl": "../bcs.duapp.com/baeimg/fBc6FjGtff.jpg", 
            "timeLineLink": "wxapi.php@ac=photo&tid=569&from=app",
            "sendFriendLink": "wxapi.php@ac=photo&tid=569&from=app",
            "weiboLink": "wxapi.php@ac=photo&tid=569&from=app",
            "tTitle": "微信相册",
            "tContent": "微信相册",
            "fTitle": "微信相册",
            "fContent": "微信相册",
            "wContent": "微信相册" 
        };
        // 发送给好友
        WeixinJSBridge.on('menu:share:appmessage', function (argv) {
            WeixinJSBridge.invoke('sendAppMessage', { 
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.sendFriendLink,
                "desc": window.shareData.fContent,
                "title": window.shareData.fTitle
            }, function (res) {
                _report('send_msg', res.err_msg);
            })
        });

        // 分享到朋友圈
        WeixinJSBridge.on('menu:share:timeline', function (argv) {
            WeixinJSBridge.invoke('shareTimeline', {
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.timeLineLink,
                "desc": window.shareData.tContent,
                "title": window.shareData.tTitle
            }, function (res) {
                _report('timeline', res.err_msg);
            });
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.wContent,
                "url": window.shareData.weiboLink,
            }, function (res) {
                _report('weibo', res.err_msg);
            });
        });
        }, false)
    </script>
</body>
</html>
