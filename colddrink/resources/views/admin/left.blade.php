﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<base href="/admin/" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/jquery.js"></script>

<script type="text/javascript">
$(function(){	
	//导航切换
	$(".menuson li").click(function(){
		$(".menuson li.active").removeClass("active")
		$(this).addClass("active");
	});
	
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('ul').slideUp();
		if($ul.is(':visible')){
			$(this).next('ul').slideUp();
		}else{
			$(this).next('ul').slideDown();
		}
	});
})	
</script>


</head>

<body style="background:#f0f9fd;">
	<div class="lefttop"><span></span>常用操作</div>
    
    <dl class="leftmenu">
        
    <dd>
    <div class="title">
    <span><img src="images/leftico01.png" /></span>会议助手
    </div>
    	<ul class="menuson">
            <li><cite></cite><a href="add_meeting" target="rightFrame">新建会议</a><i></i></li>
            <li><cite></cite><a href="meeting_list" target="rightFrame">会议列表</a><i></i></li>
            <li><cite></cite><a href="meeting_room" target="rightFrame">新建会议室</a><i></i></li>
            <li><cite></cite><a href="meeting_room_list" target="rightFrame">会议室列表</a><i></i></li>
        </ul>    
    </dd>
        
    <dd>
    <div class="title">
    <span><img src="images/leftico01.png" /></span>打卡签到
    </div>
        <ul class="menuson">
            <li><cite></cite><a href="role_list" target="rightFrame">考勤规则列表</a><i></i></li>
            <li><cite></cite><a href="bunch_list" target="rightFrame">员工打卡列表</a><i></i></li>
            <li><cite></cite><a href="bunch_index" target="rightFrame">员工打卡页面</a><i></i></li>
            <li><cite></cite><a href="bu_bunch_list" target="rightFrame">员工补打卡记录</a><i></i></li>
        </ul>    
    </dd>
    
    
    <dd><div class="title"><span><img src="images/leftico03.png" /></span>通讯录管理</div>
        
    <ul class="menuson">
        <li><cite></cite><a href="#">通讯人列表</a><i></i></li>
       <!--  <li><cite></cite><a href="#">常用资料</a><i></i></li>
        <li><cite></cite><a href="#">信息列表</a><i></i></li>
        <li><cite></cite><a href="#">其他</a><i></i></li> -->
    </ul>
    
    </dd>  
    
    
    <!-- <dd><div class="title"><span><img src="images/leftico04.png" /></span>招商加盟</div> -->
        <!--
    <ul class="menuson">
        <li><cite></cite><a href="#">自定义</a><i></i></li>
        <li><cite></cite><a href="#">常用资料</a><i></i></li>
        <li><cite></cite><a href="#">信息列表</a><i></i></li>
        <li><cite></cite><a href="#">其他</a><i></i></li>
    </ul>-->
    
    </dd>   
    
    </dl>
</body>
</html>
