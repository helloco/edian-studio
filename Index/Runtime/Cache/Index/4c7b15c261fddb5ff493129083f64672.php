<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Edian Studio</title>
<link href="__PUBLIC__/Css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Js/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Css/sticky-footer-navbar.css" rel="stylesheet" type="text/css">
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
            <li><a href="<?php echo U('Index/Index/index');?>">HOME</a></li>
            <li  class="active"><a href="<?php echo U('Index/Index/blog');?>">BLOG</a></li>
			<li><a href="<?php echo U('Index/Index/fame');?>">FAME HALL</a></li>
            <li><a href="<?php echo U('Index/Index/about');?>">ABOUT US</a></li>
            
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
  <li class="active">异点博客</li>
  </ul>


      <div class="row">
    

        <div class="col-sm-7">
          <div class="list-group">
            <a href="#" class="list-group-item active">
            Blog List 
            </a>
            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><a href="<?php echo U('Index/Index/content',array('id' => $vo['id']));?>" class="list-group-item"><?php echo ($vo["title"]); echo ($vo["time"]); ?></a><?php endforeach; endif; ?>
			
			<a href="#" class="list-group-item">第<?php echo ($pageNow); ?>/<?php echo ($pageCount); ?>页 共<?php echo ($count); ?>条记录</a>
          </div>
        </div><!-- /.col-sm-4 -->
        
      </div>
	
  <div>
  <ul class="pagination pagination-right" >
  
  <?php $__FOR_START_837__=1;$__FOR_END_837__=$pageCount+1;for($i=$__FOR_START_837__;$i < $__FOR_END_837__;$i+=1){ ?><li><a href="<?php echo U('Index/Index/blog',array('p' => $i));?>"><?php echo ($i); ?></a></li><?php } ?>
  </ul>
  </div>
  
  <ul class="pager">
  <li class="previous"><a href="<?php echo U('Index/Index/blog',array('p' => $pageNow-1));?>">前一页</a></li>
  <li class="next"><a href="<?php echo U('Index/Index/blog',array('p' => $pageNow+1));?>">后一页</a></li>
  </ul>

</div>

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
 
</script>
<style>

</style>
</body>
</html>