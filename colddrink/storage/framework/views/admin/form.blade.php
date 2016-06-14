<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.selectlist.css">

</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">表单</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    <div class="formtitle"><span>基本信息</span></div>
    
    <ul class="forminfo">
    <li><label>学生姓名：</label><input name="" type="text" class="dfinput" /></li>
    <li><label>班级：</label>
        <select id="classes" name="edu">
            <option value="0">1407phpC</option>
            <option value="0">1407phpC</option>
            <option value="0">1407phpC</option>
            <option value="0">1407phpC</option>
            <option value="0">1407phpC</option>
            <option value="0">1407phpC</option>
            <option value="0">1407phpC</option>
            <option value="0">1407phpC</option>
            <option value="0">1407phpC</option>
            <option value="0">1407phpC</option>
        </select>
    </li>
        <li><label>班主任：</label>
            <select id="banzhuren" name="edu">
                <option value="0">余定强</option>
                <option value="0">余定强</option>
                <option value="0">余定强</option>
                <option value="0">余定强</option>
                <option value="0">余定强</option>
                <option value="0">余定强</option>
                <option value="0">余定强</option>
                <option value="0">余定强</option>
                <option value="0">余定强</option>
            </select>
        </li>
        <li><label>讲师：</label>
            <select id="jiangshi" >
                <option value="0">李朋</option>
                <option value="0">李朋</option>
                <option value="0">李朋</option>
                <option value="0">李朋</option>
                <option value="0">李朋</option>
                <option value="0">李朋</option>
                <option value="0">李朋</option>
            </select>
        </li>
        <li><label>班长：</label>
            <select id="banzhang">
                <option value="0">王生辉</option>
                <option value="0">王生辉</option>
                <option value="0">王生辉</option>
                <option value="0">王生辉</option>
                <option value="0">王生辉</option>
                <option value="0">王生辉</option>
                <option value="0">王生辉</option>
                <option value="0">王生辉</option>
                <option value="0">王生辉</option>
                <option value="0">王生辉</option>
            </select>
        </li>
    <li><label>所属阶段：</label><cite><input name="" type="radio" value="" checked="checked" />专业阶段&nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="radio" value="" />高级阶段</cite></li>
    <li><label>违纪类型：</label>
        <select id="type">
            <option value="0">平台</option>
            <option value="0">自报旷课</option>
            <option value="0">自报旷课</option>
            <option value="0">自报旷课</option>
            <option value="0">自报旷课</option>
        </select>
    </li>

    <li><label>添加人：</label><input name="" type="text" class="dfinput" value="" /></li>

    <!--<li><label>文章内容</label><textarea name="" cols="" rows="" class="textinput"></textarea></li>-->
    <li><label>&nbsp;</label><input name="" type="button" class="btn" value="确认保存"/></li>
    </ul>
    
    
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

