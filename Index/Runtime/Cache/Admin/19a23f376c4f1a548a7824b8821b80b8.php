<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Edian Studio</title>
<script type="text/javascript" src='__PUBLIC__/Js/jquery_min.js'></script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/lang/zh-cn/zh-cn.js"></script>

<script type="text/javascript" src="__PUBLIC__/Js/Base.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/prototype.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/mootools.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/Ajax/ThinkAjax.js"></script>
</head>
<body>
<script language="JavaScript">
<!--
function checkName(){
	ThinkAjax.send('<?php echo U("Admin/Ajax/checkName");?>','ajax=1&username='+$("username").value,'','result');
}
function loginCheck(){
	ThinkAjax.sendForm('form1','<?php echo U("Admin/Ajax/checkLogin");?>',complete,'result');
}

function complete(data,status){
	if (status==1)
	{
	
	var data = eval("("+data+")");
	$('list').innerHTML = '<span style="color:blue">'+data.info+'你好!</span>';
	}
}
//-->
</script>
</head>
<body>
<div>
<div id="result"></div>
<div id="list"></div>
<form name="login" id="form1" method="post">
用户名: <input type="text" name="username" />
<input type="button" value="检查用户名" onClick="checkName()"><br />
密 码: <input type="password" name="password" /><br />
<input type="button" onClick="loginCheck()" value="提 交" />
</form>
</div>

</body>
</html>