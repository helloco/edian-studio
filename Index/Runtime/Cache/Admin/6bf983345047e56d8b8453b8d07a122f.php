<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Edian Studio</title>
<script type="text/javascript" src='__PUBLIC__/Js/jquery_min.js'></script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<a href='#'>博1客</a>  <a href='<?php echo U('Admin/Admin/addProductView');?>'>作品</a>  <a href='<?php echo U('Admin/Admin/logout');?>'>注销</a> 

<form method="post" action="<?php echo U('Admin/Admin/addBlog');?>">
<input type="text" name="title"><br>
<script id="editor" type="text/plain" style="width:1024px;height:300px;" name='content'></script>
<input type="submit">
</form>
<script type="text/javascript">
UE.getEditor('editor');
</script>
</body>
</html>