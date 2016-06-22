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
    <li><a href="#">新建打卡规则</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    <div class="formtitle"><span>添加打卡规则</span></div>
    
    <form action="add_rule" method="post">
            <ul class="forminfo">
            <li><label>打卡规则内容：</label><input name="rule_content" type="text" class="dfinput" /></li>
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

