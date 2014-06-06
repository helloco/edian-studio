<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Edian Studio</title>

<link href="__PUBLIC__/Css/responsive.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Css/style.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Css/sticky-footer-navbar.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Css/my.css" rel="stylesheet" type="text/css">
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
            <li><a href="<?php echo U('Index/Index/blog');?>">BLOG</a></li>
            <li  class="active"><a href="<?php echo U('Index/Index/product');?>">OUR WORK</a></li>
			<li><a href="<?php echo U('Index/Index/fame');?>">FAME HALL</a></li>
            <li><a href="<?php echo U('Index/Index/about');?>">ABOUT US</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">SKIP</a></li>
            <li><a href="#">HIGH</a></li>
            <li><a href="#">GO</a></li>
          </ul>  
        </div><!--/.nav-collapse -->
      </div>
</div>
<div class="container">
  <ul class="breadcrumb">
  <li><a href="#">首页</a><span class="divider"></span></li>
  <li class="active">我们的作品</li>
  </ul>
  
</div>

<div class="row-1">
        <div class="container">
        <div class="row">
              <ul class="thumbnails thumbnails-1">
        
                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="col-lg-4">
                  <div class="thumbnail thumbnail-1">
                <h3><?php echo ($vo["name"]); ?></h3>
                <img  src="__PUBLIC__/Uploads/<?php echo ($vo["img_src"]); ?>" alt="">
                <section> 
                    
                      <div class="meta">
                            <time datetime="2012-11-09" class="date-1"><i class="icon-calendar"></i></time>
                            
                            <a class="comments"><i class="icon-comment"></i>发布日期:<?php echo ($vo["birthday"]); ?></a>
                        </div> 
                        <div class="clear"></div>
                      <p><b>简介:</b><?php echo ($vo["introduce"]); ?></p>
                      <a href="<?php echo ($vo["download_src"]); ?>" class="btn btn-1" target=_blank>作品地址</a> </section>
              </div>
                </div><?php endforeach; endif; ?>
            
          	  </ul>
            </div>
              <ul class="pagination pagination-right" >
			  <?php $__FOR_START_4020__=1;$__FOR_END_4020__=$pageCount+1;for($i=$__FOR_START_4020__;$i < $__FOR_END_4020__;$i+=1){ ?><li><a href="<?php echo U('Index/Index/product',array('p' => $i));?>"><?php echo ($i); ?></a></li><?php } ?>
			  </ul>
			  
			  <ul class="pager">
			  <li class="previous"><a href="<?php echo U('Index/Index/product',array('p' => $pageNow-1));?>">前一页</a></li>
			  <li class="next"><a href="<?php echo U('Index/Index/product',array('p' => $pageNow+1));?>">后一页</a></li>
			  </ul>
      </div>
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
 
</script>
<style>

</style>
</body>
</html>