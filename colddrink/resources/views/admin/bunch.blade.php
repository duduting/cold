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
  <input type="hidden" name="" id="userid" value="<?php if(isset($data['UserId'])){ echo $data['UserId'];} ?>">
  <input type="hidden" name="" id="timer" value="<?php echo time(); ?>">
  <input type="button" onclick="sign_on()" class="weui_btn weui_btn_primary" value="签到">
</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.1.0.js"></script>
<script src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	//签到
	function sign_on()
	{
		var userid = $("#userid").val();
		var url = "sign_on";
		var data = {'userid':userid};
		$.post(url,data,function(res){
				// alert(res);
		});
	}

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
</html>