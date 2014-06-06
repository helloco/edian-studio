<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Edian Studio</title>
<link href="__PUBLIC__/Css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Css/my.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Css/sticky-footer-navbar.css" rel="stylesheet" type="text/css">

<script src="__PUBLIC__/Js/jquery2.js"></script>
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
            <li  class="active"><a href="<?php echo U('Index/Index/index');?>">HOME</a></li>
            <li><a href="<?php echo U('Index/Index/blog');?>">BLOG</a></li>
            <li><a href="<?php echo U('Index/Index/product');?>">OUR WORK</a></li>
			<li><a href="<?php echo U('Index/Index/fame');?>">FAME HALL</a></li>
            <li><a href="<?php echo U('Index/Index/about');?>">ABOUT US</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">SKIP</a></li>
            <li><a href="#">HIGH</a></li>
            <li><a href="<?php echo U('Admin/Index/index');?>" target=_blank>Admin</a></li>
          </ul>  
        </div>
      </div>
</div>
<div class="container">
		
		<div id="carousell" class="carousel slide">
			<div class="carousel-inner">
				<div class="item active">
					<img src="http://placehold.it/1170x360/c24704/ffffff&text=wordpress" alt="" />
					<div class="carousel-caption">
						<h4>标题一</h4>
						<p>探险家伊泽瑞尔攻略：蛋刀蓝EZ冲分利器单挑王</p>
					</div>
				</div>
				
				<div class="item">
					<img src="http://placehold.it/1170x360/ffeb79&text=joomla" alt="" />
					<div class="carousel-caption">
						
					</div>
				</div>
				
				<div class="item">
					<img src="http://placehold.it/1170x360/a0e0a9/ffffff&text=drupal" alt="" />
					<div class="carousel-caption">
						
					</div>
				</div>				
				 
			</div>
			
			<a href="#carousell" data-slide="prev" class="left carousel-control"></a>
			<a href="#carousell" data-slide="next" class="right carousel-control"></a>
		</div>
		
    </div>

<!--content-->
<div class="container">
<h1 class="page-header">我们的文化<small>简单可依赖</small></h1></h1>
<p>群众意见调查及综述（至少10+1份，加封面）由联系人组织与考察对象有学习、生活、工作接触的学生代表进行群众评议，需要开群众评议座谈会。在整理群众评议过中，发现有异议的评议内容，应立即进行进一步的调查，排除不符合客观情况的推测，进一步明确评议中所指的具体真实的内容。不应将模糊的评议交到支部会议上。（字迹潦草可能会打会重写）7、团组织推荐材料团支书，团委老师部分需要学生代写8、思想汇报（至少10份，加封面）思想汇报内容要真实，要联系自己的思想、工作、学习、生活实际。三、特殊说明： 1、特别重要的材料有  团组织推荐表、培养考察登记表、群众调查  2、原则性问题：群众调查和培养考察登记表不能与发展对象见面</p>

</div>


<div class="container">
	  <div class="page-header">
        <h1>A Quick Glance</h1>
      </div>
      <a href="http://hr.hgdonline.net/" target=_blank><img  src="__PUBLIC__/Images/join.gif"  class="img-thumbnail" alt=""></a>
	  <a href="http://hr.hgdonline.net/" target=_blank><img  src="__PUBLIC__/Images/join.gif"  class="img-thumbnail" alt=""></a>
      <a href="http://hr.hgdonline.net/" target=_blank><img  src="__PUBLIC__/Images/join.gif"  class="img-thumbnail" alt=""></a>
	  </div>


<!--footer-->
<div id="footer">
      <div class="container pull-right">
        <p class="text-muted credit">湖工大在线 <a href="http://www.hgdonline.net">Edian Studio</a> &copy; CopyRight 2013.</p>
      </div>
    </div> <!--footer-->
<script src="__PUBLIC__/Js/bootstrap.js"></script>
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