<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Edian Studio</title>
</head>
<body>
<form action="<?php echo U('checkLogin');?>" method="post">
NAME:<input type="text" name="adminName"><br>
PWD:<input type="password" name="adminPwd"><br>
verify:<input type="text" name="verify"><img src='<?php echo U('Admin/Index/verify');?>' />
<input type="submit">
</form>
</body>
</html>