<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Edian Studio</title>

<link href="__PUBLIC__/Css/responsive.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Css/style.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Css/my.css" rel="stylesheet" type="text/css">
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
            <li><a href="<?php echo U('Index/Index/product');?>">OUR WORK</a></li>
			<li><a href="<?php echo U('Index/Index/fame');?>">FAME HALL</a></li>
            <li  class="active"><a href="<?php echo U('Index/Index/about');?>">ABOUT US</a></li>
            
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
  <li class="active">关于我们</li>
  </ul>
  
</div>


            <div class="container">
                <section>
                    <div class="row">
                    <div class="col-lg-4">
                        
                            <h2 class="title"><span>Our Culture.</span></h2>
                            <p><b>Simple and Reliable</b>, pharetra eget volutpat vel, consequat in lectus. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Vivamus purus arcu, commodo cursus egestas et, dictum lobortis dui. Curabitur at mi eu mi sollicitudin faucibus at at libero.</p>                        
                       
                        </div>
                        <div class="col-lg-4">
                       
                            <h2 class="title"><span>Our Mission!</span></h2>
                            <p>Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl. Morbi euismod ante quis tellus imperdiet porta. Morbi nisi nibh, facilisis a varius id, adipiscing.</p>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur purus.</p>
                     
                        </div>
                        <div class="col-lg-4">
                        
                            <h2 class="title"><span>Why Join Us ?</span></h2>
                            <p>Lorem ipsum dolor sit amet, tristique sem et, ridiculus metus, at id vestibulum, aliquam luctus. Justo hac in at duis orci montes, purus mauris eu turpis.</p>
                            <p>Vestibulum non vestibulum justo in vitae, posuere ipsum vitae vestibulum amet, vestibulum pulvinar mi, mauris pharetra. Sodales sed malesuada quisque nunc, massa bibendum vestibulum sed hac. Quam mauris orci tellus vel integer dis.</p> 
                          	<p>For detail requirement,go to <a href='http://hr.hgdonline.net/' target=_blank>hr.hgdonline.net</a> to see more</p>
                        </div>
                                           
                    </div>
                </section>
                
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
h2
{
  color: #F25C27;
  font-family: 'Open Sans', sans-serif;
  font-weight: 800;
  font-size: 40px;
}

</style>
</body>
</html>