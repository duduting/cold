<!doctype html> 
<html> 
<head> 
  <meta charset="utf-8"> 
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.selectlist.css">
    <link rel="stylesheet" href="boot/css/bootstrap.css">
    <link rel="stylesheet" href="boot/css/bootstrap-theme.css">
    <link rel="stylesheet" href="boot/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="boot/css/bootstrap.min.css">
    <link rel="stylesheet" href="boot/js/bootstrap.js">
    <link rel="stylesheet" href="boot/js/bootstrap.min.js">
  <title></title> 
</head>
<body>
  <h1></h1>
  <center>
  		<div class="table-responsive">
  			<table class="table" style="text-align:center;">
	  			<tr class="active">
	  				<td>会议室编号</td>
	  				<td>会议室名称</td>
	  				<td>会议室地址</td>
	  				<td>会议室状态</td>
	  				<td>设备清单</td>
	  				<td>操作</td>
	  			</tr>
	  		@foreach($data as $key=>$val)
				<tr class="info" id="list_{{$val->room_id}}">
					<td>{{$val->room_id}}</td>
					<td>{{$val->room_name}}</td>
					<td>{{$val->room_address}}</td>
					<td>@if($val->room_status == 0)会议室正在使用@elseif($val->room_status == 1)会议室未被使用@else会议室停用@endif</td>
					<td>{{$val->facility}}</td>
					<td><a href="javascript:void(0);" onclick="del_meeting_room({{$val->room_id}})">删除</a>&nbsp;&nbsp;<a href="update_meeting_room?id={{$val->room_id}}">修改</a></td>
				</tr>
			@endforeach
  			</table>
  		</div>
  </center>
</body>
<script src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	function del_meeting_room(id)
	{
		var url = "del_meeting_room";
		var data = {'id':id};
		$.get(url,data,function(res){
			if(res == 1)
			{
				$("#list_"+id).remove();
			}
			else
			{
				alert("删除失败！请重复此操作");
			}
		});
	}
</script>
</html>