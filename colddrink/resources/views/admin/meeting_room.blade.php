<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
    <base href="/admin/" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.selectlist.css">

</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">新建会议室</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    <div class="formtitle"><span>添加会议室</span></div>
    
    <form action="add_meeting_room" method="post">
            <ul class="forminfo">
            <li><label>会议室名称：</label><input name="room_name" type="text" class="dfinput" /></li>
            <li><label>会议室地址：</label><input name="room_address" type="text" class="dfinput" /></li>
            <li><label>会议室状态：</label>
                    <select name="status" id="meeting_room">
                        <option value="">--请选择--</option>
                        <option value="0">会议室正在使用</option>
                        <option value="1">会议室没有使用</option>
                        <option value="2">会议室停用</option>
                    </select>
            </li>
            <li><label>设备清单：</label><input name="facility" type="text" class="dfinput" /></li>
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="确认保存"/></li>
            </ul>
    </form>
    
    
    </div>
</body>
</html>

<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery.selectlist.js"></script>
<script type="text/javascript">
    $(function(){
        $('select').selectlist({
            zIndex: 10,
            width: 200,
            height: 40
        });
    })
</script>

