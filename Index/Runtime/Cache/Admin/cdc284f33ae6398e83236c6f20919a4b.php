<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>bootstrap</title>
<link href="__PUBLIC__/Css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Js/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="sticky-footer-navbar.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
<h1 class="page-header">Edian Studio<small> this is a tech group</small></h1>


<div class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Edian Studio</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./">HOME</a></li>
            <li><a href="blog.php">BLOG</a></li>
			<li><a href="famehall.php">FAME HALL</a></li>
            <li><a href="about.php">ABOUT US</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="./">SKIP</a></li>
            <li><a href="">HIGH</a></li>
            <li><a href="">GO</a></li>
          </ul>  
        </div><!--/.nav-collapse -->
      </div>
</div>
<div class="container">

  <ul class="breadcrumb">
  <li><a href="#">首页</a><span class="divider"></span></li>
  <li class="active">异点博客 / 博文</li>
  </ul>

<div class="page-header">
        <h1><?php echo ($data["title"]); ?></h1>
      </div>
      <div class="well">
        <p><center><h1><?php echo ($data["title"]); ?></h1></center><?php echo ($data["content"]); ?></p>
      </div>

  
  <ul class="pager">
  <li class="previous"><a href="#">前一页</a></li>
  <li class="next"><a href="#">后一页</a></li>
  </ul>

</div>

<!--footer-->
<div id="footer">
      <div class="container pull-right">
        <p class="text-muted credit">湖工大在线 <a href="http://www.hgdonline.net">Edian Studio</a> &copy; CopyRight 2013.</p>
      </div>
    </div> <!--footer-->
<script src="__PUBLIC__/Js/bootstrap.js"></script>
<script src="__PUBLIC__/Js/jquery_min.js"></script>
<script src="__PUBLIC__/Js/holder.js"></script>
<script src="__PUBLIC__/Js/dropdown.js"></script>
<script type="text/javascript">
function hide_join(){
	$(document).ready(function(){
  	$("#zh_join").click(function(){
  	$(this).hide();
  });
});

}
function fade_join() {
  $("#zh_join").hide(7000);
}
 fade_join() 
</script>
<style>

</style>
</body>
</html>