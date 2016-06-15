<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>美好时光产品推广</title>
<base  />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">
<base href="/home/" />
<link href="index/css/news/news1_3.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="index/css/plugmenu.css">

<!-- 时间插件的引入 -->
    <link rel="stylesheet" type="text/css" href="date/src/DateTimePicker.css" />
    <script type="text/javascript" src="date/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="date/src/DateTimePicker.js"></script>
<style>
.themeStyle {
	background: #E83407
}
</style>
</head>
<body id="news">
    <center>
      <table class=".table-responsive" style="margin-top:20px;">
          <tr style="height:30px">
              <td>会议标题&nbsp;&nbsp;</td>
              <td><input type="text" name="meeting_title" id="meeting_title" /></td>    
          </tr>
          <tr style="height:30px">
              <td>会议内容</td>
              <td><input type="text" name="meeting_content" id="meeting_content" /></td>
          </tr>
          <tr style="height:30px">
              <td>开始时间</td>
              <td>
                    <input type="text" data-field="datetime" id="start_time" readonly>
                    <div id="dtBox"></div>
              </td>
          </tr>
          <tr style="height:30px">
               <td>结束时间</td>
               <td>
                    <input type="text" data-field="datetime" id="end_time" readonly>
                    <div id="dtBox"></div>
               </td>
          </tr>
          <tr style="height:30px">
                <td>提醒时间</td>
                <td>
                    <input type="text" data-field="datetime" id="remind" readonly>
                    <div id="dtBox"></div>
                </td>
          </tr>
          <tr>
                <td>会议地点</td>
                <td>
                    <select name="meeting_room" id="meeting_room">
                      <option value="1">第一会议室</option>
                      <option value="2">第二会议室</option>
                      <option value="3">第三会议室</option>
                      <option value="4">第四会议室</option>
                      <option value="5">第五会议室</option>
                    </select>
                </td>
          </tr>
          <tr style="height:30px">
                <td>是否签到</td>
                <td>
                    <select name="sign" id="sign">
                      <option value="0">需要职员签到</option>
                      <option value="1">不需要职员签到</option>
                    </select>
                </td>
          </tr>
          <tr>
                <td>会议室状态</td>
                <td>
                    <select name="room_status" id="room_status">
                        <option value="">会议室正在使用</option>
                        <option value="">会议室未被使用</option>
                    </select>
                </td>
          </tr>
          <tr>
                <td><input type="button" class="btn btn-default" id="add_meeting" value="提交" /></td>
                <td><input type="reset" class="btn btn-primary" value="清空" /></td>
          </tr>
      </table>
    </center>
      <script type="text/javascript">
      $(document).ready(function()
      {
        $("#dtBox").DateTimePicker();
      });
      $("#add_meeting").click(function(){
          var meeting_title = $("#meeting_title").val();
          var meeting_content = $("#meeting_content").val();
          var start_time = $("#start_time").val();
          var end_time = $("#end_time").val();
          var remind = $("#remind").val();
          var meeting_room = $("#meeting_room").val();
          var sign = $("#sign").val();
          var room_status = $("#room_status").val();
          var data = {'meeting_title':meeting_title,'meeting_content':meeting_content,'start_time':start_time,'end_time':end_time,'remind':remind,'meeting_room':meeting_room,'sign':sign,'room_status':room_status};
          var url = "";

      });
      
    </script>

</body>
</html>