<!doctype html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <base href="/admin/" />
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
  <a href="rule_index"><button class="btn btn-default" style="margin-bottom:10px;margin-left:10px;">添加规则</button></a>
  <center>
  		<div class="table-responsive">
  			<table class="table" style="text-align:center;">
	  			<tr class="active">
	  				<td style="width:150px;">打卡规则编号</td>
	  				<td>打卡规则内容</td>
            <td>添加时间</td>
	  				<td>操作</td>
	  			</tr>
        @foreach($data as $key=>$val)
				<tr class="info" id="list_{{$val->id}}">
					<td>{{$val->id}}</td>
					<td>{{$val->rule_content}}</td>
					<td><?php echo date('Y-m-d H:i:s',$val->add_time);?></td>
          <td><a href="javascript:del_rule({{$val->id}})">删除</a></td>
				</tr>
        @endforeach
  			</table>
  		</div>
  </center>
</body>
<script src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	 function del_rule(id)
    {
      var url = "del_rule";
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