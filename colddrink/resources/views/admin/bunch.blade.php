<!doctype html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
  <base href="/admin/">
  <link rel="stylesheet" href="weixin/example.css">
  <link rel="stylesheet" href="weixin/weui.css">
  <link rel="stylesheet" href="weixin/weui.min.css">
  <link rel="stylesheet" href="weixin/router.min.js">
  <link rel="stylesheet" href="weixin/example.js">
  <link rel="stylesheet" href="weixin/zepto.min.js">
  <title></title> 
  <style>
	.wrap{
		height:35px;
		font-size: 18px;
		font-weight: 590;
		text-align: center;
		margin-top:8px;
		/*font-family:"Times New Roman",Georgia,Serif; */
		color: #04be02;
	}
	.wrap1{
		height:50px;
		font-size: 35px;
		margin-top: 0px;
		text-align: center;
		color: #04be02;
		margin-bottom: 5px;
		/*font-family: ""Times New Roman",Georgia,Serif;*/
	}
	.wrap2{
		height:40px;
		font-size: 20px;
		margin-top: 0px;
		text-align: center;
		color: #04be02;
		margin-bottom: 5px;
	}
  </style>
</head>
<body>
  <h1></h1>
  <div class="wrap"></div>
  <div class="wrap1"></div>
  <div class="wrap2"><?php if(isset($data['name'])){ echo $data['name'];} ?></div>
  <input type="hidden" name="" id="username" value="<?php if(isset($data['name'])){ echo $data['name'];} ?>">
  <input type="hidden" name="" id="userid" value="<?php if(isset($data['userid'])){ echo $data['userid'];} ?>">
  <input type="hidden" name="" id="timer" value="<?php echo time(); ?>">
  <input type="button" onclick="sign_on()" class="weui_btn weui_btn_primary" value="签到">
  <div class="weui_icon_area" style="z-index=1;text-align:center;display:none;">
		<i class="weui_icon_success weui_icon_msg"></i>
  </div>
</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.1.0.js"></script>
<script src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	
	$(function(){
		timerout();
	})
	function timerout()
	{
		var timer = $("#timer").val();
		timer++;
		$("#timer").val(timer);
		var mydate = new Date();
		//不要秒数可以用replace代替    replace(/:\d{1,2}$/,' ')
		// time = new Date(parseInt(timer)*1000).toLocaleString().replace(/:\d{1,2}$/,' ');
		// today += mydate.getFullYear() + '年';   //返回年份
		var today = '';
		var year = '';
		year = mydate.getFullYear();+'年';
		today += mydate.getMonth()+1 + '月';    //返回月份，因为返回值是0开始，表示1月，所以做+1处理
		today += mydate.getDate() + '日'; //返回日期
		var day = '';
		day += mydate.getHours()+ ':';
		//当分钟小于10时，就显示两位的判断
		function checkTime(i){
	    if (i<10){
	        i = "0" + i;
	    }
	    return i;
		}
		day += checkTime(mydate.getMinutes());
		var days = new Array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
		var weekday = mydate.getDay();         //返回每周的周几
		$(".wrap").html(today+'&nbsp;&nbsp;'+days[weekday]);
		$(".wrap1").html(day);
	}
	setInterval(timerout,1000);
</script>

<script>


//签到
	function sign_on()
	{
		// 	wx.getLocation({
		//     type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'
		//     success: function (res) {
		//         var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
		//         var longitude = res.longitude ; // 经度，浮点数，范围为180 ~ -180。
		//         var speed = res.speed; // 速度，以米/每秒计
		//         accuracy = res.accuracy; // 位置精度
		//         alert(accuracy);
		//     }
		// });
		// alert(accuracy);
		var userid = $("#userid").val();
		// alert(userid);
		var user_name = $("#username").val();
		var url = "sign_on";
		var data = {'userid':userid,'user_name':user_name};
		$.post(url,data,function(res){
				if(res == 1)
				{
					alert("签到成功");
					// $(".weui_icon_area").css('display','block');
					// setTimeout(function(){//定时器 
					// 	$(".weui_icon_area").css("display","none");//将图片的display属性设置为none
					// 	},
					// 3000);//设置三千毫秒即3秒
				}
				else if(res == 2)
				{
					alert("您已经签到了！");
				}
				else
				{
					alert("签到失败！请重新签到");
				}
		});
	}

</script>
</html>