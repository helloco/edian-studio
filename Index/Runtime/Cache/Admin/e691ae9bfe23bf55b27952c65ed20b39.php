<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>异点工作室 | Edian Studio</title>
		<meta name="keywords" content="异点工作室 | Edian Studio" />
		<meta name="description" content="异点工作室 | Edian Studio" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<!-- basic styles -->

		<link href="__PUBLIC__/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="__PUBLIC__/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="__PUBLIC__/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="__PUBLIC__/assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="__PUBLIC__/assets/css/chosen.css" />
		<link rel="stylesheet" href="__PUBLIC__/assets/css/datepicker.css" />
		<link rel="stylesheet" href="__PUBLIC__/assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="__PUBLIC__/assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="__PUBLIC__/assets/css/colorpicker.css" />

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="__PUBLIC__/assets/css/ace.min.css" />
		<link rel="stylesheet" href="__PUBLIC__/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="__PUBLIC__/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="__PUBLIC__/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="__PUBLIC__/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="__PUBLIC__/assets/js/html5shiv.js"></script>
		<script src="__PUBLIC__/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							异点工作室 | Edian Studio
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-ok"></i>
									4 Tasks to complete
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Software Update</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="progress-bar "></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Hardware Upgrade</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:35%" class="progress-bar progress-bar-danger"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Unit Testing</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:15%" class="progress-bar progress-bar-warning"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Bug Fixes</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See tasks with details
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-warning-sign"></i>
									8 Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary icon-user"></i>
										Bob just signed up as an editor ...
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												New Orders
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-envelope-alt"></i>
									5 Messages
								</li>

								<li>
									<a href="#">
										<img src="__PUBLIC__/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="__PUBLIC__/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="__PUBLIC__/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="__PUBLIC__/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo ($_SESSION["adminName"]); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?php echo U('Admin/Account/accountSettingView');?>">
										<i class="icon-cog"></i>
										设置
									</a>
								</li>


								<li>
									<a href="<?php echo U('Admin/Account/logout');?>">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->
<ul class="nav nav-list">
						<li>
							<a href="<?php echo U('Admin/Admin/admin');?>">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制台 </span>
							</a>
						</li>


						<li class="active open">
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 修改 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Alter/alterProductView');?>">
										<i class="icon-double-angle-right"></i>
										作品修改
									</a>
								</li>

								<li>
									<a href="<?php echo U('Admin/Alter/alterBlogList');?>">
										<i class="icon-double-angle-right"></i>
										博客修改
									</a>
								</li>
								<li  class="active">
									<a href="<?php echo U('Admin/Alter/alterFameList');?>">
										<i class="icon-double-angle-right"></i>
										Fame修改
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php echo U('Admin/Admin/addProductView');?>" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 新增</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Admin/addProductView');?>">
										<i class="icon-double-angle-right"></i>
										作品管理
									</a>
								</li>

								<li>
									<a href="<?php echo U('Admin/Admin/addBlog');?>">
										<i class="icon-double-angle-right"></i>
										博客管理
									</a>
								</li>

								<li>
									<a href="<?php echo U('Admin/Admin/addFameView');?>">
										<i class="icon-double-angle-right"></i>
										fameHall管理
									</a>
								</li>

								
							</ul>
						</li>

						<li>
							<a href="<?php echo U('Admin/Account/accountSettingView');?>">
								<i class="icon-list-alt"></i>
								<span class="menu-text"> 个人配置 </span>
							</a>
						</li>

						<li>
							<a href="<?php echo U('Admin/Account/userManageView');?>">
								<i class="icon-text-width"></i>
								<span class="menu-text"> 管理员管理 </span>
							</a>
						</li>
</ul>
<!--ul end-->
					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Tables</a>
							</li>
							<li class="active">Simple &amp; Dynamic</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="icon-double-angle-right"></i>
									Static &amp; Dynamic Tables
								</small>
								<div id='result3'></div>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>姓名</th>
														<th>toast（简介）</th>

														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															缩略图
														</th>
														<th class="hidden-480">链接（link）</th>

														<th></th>
													</tr>
												</thead>

												<tbody>
													<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
														<td class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
														
														<td>
															<input  type="hidden" id="ori_updateId" value="<?php echo ($vo["id"]); ?>"/>
															<a href="#"><?php echo ($vo["name"]); ?></a>
														</td>
														<td><?php echo ($vo["toast"]); ?></td>
														<td><?php echo ($vo["img_src"]); ?></td>

														<td class="hidden-480">
															<span class="label label-sm label-success"><a href=' <?php echo ($vo["link"]); ?> ' target=_blank/> <?php echo ($vo["link"]); ?> </a></span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success">
																	<i class="icon-ok bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-info" onclick=transform("<?php echo ($vo["id"]); ?>") >
																	<i class="icon-edit bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-danger" onclick=deleteFame("<?php echo ($vo["id"]); ?>")>
																	<i class="icon-trash bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-warning">
																	<i class="icon-flag bigger-120"></i>
																</button>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-cog icon-only bigger-110"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120" ></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr><?php endforeach; endif; else: echo "" ;endif; ?>
												</tbody>
											</table>
										</div>
										<div>
									  <ul class="pagination pagination-right" >
									  
									  <?php $__FOR_START_23258__=1;$__FOR_END_23258__=$pageCount+1;for($i=$__FOR_START_23258__;$i < $__FOR_END_23258__;$i+=1){ ?><li><a href="<?php echo U('Admin/Alter/alterFameList',array('p' => $i));?>"><?php echo ($i); ?></a></li><?php } ?>
									  </ul>
									  </div>
										<!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->
								
								<div id="result"></div>
								<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue" id="list">修改信息</h3>
										

										<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form" action="<?php echo U('Admin/Admin/upload');?>" method="post" enctype="multipart/form-data">
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 姓名</label>
										
										<div class="col-sm-9">
											<input type="hidden" name="updateId" id="updateId"/>
											<input type="text" name="productName" id="form-field-1" placeholder="姓名" class="col-xs-10 col-sm-5">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> toast（简介）</label>

										<div class="col-sm-9">
											<input type="text" name="introduce" id="form-field-2" placeholder="简介" class="col-xs-10 col-sm-5">
										</div>
									</div>
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4"> Link（对应博客） </label>

										<div class="col-sm-9">
											<input type="text" name="downloadSrc" id="form-field-4" placeholder="Link（对应博客）" class="col-xs-10 col-sm-5">
										</div>
									</div>
									
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5"> Images </label>
										
										<div class="col-sm-9">
											<div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>Custom File Input</h4>
														
													<span class="widget-toolbar">
														<a href="#" data-action="collapse">
															<i class="icon-chevron-up"></i>
														</a>

														<a href="#" data-action="close">
															<i class="icon-remove"></i>
														</a>
													</span>
												</div>
													
												<div class="widget-body">
													<div class="widget-main">
														<input type="file" id="id-input-file-2"  name="id-input-file-2" />
														<label>
															<input type="checkbox" name="file-format" id="id-file-format" class="ace" />
															<span class="lbl"> Allow only images</span>
														<img alt="tupian" id='pro_img' >
														</label>
													</div>
												</div>
											</div>
										</div>
											
											</div>
									</div>
									
									

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button" onclick="updatePro();">
												<i class="icon-ok bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<h3><div id='result2' ></div></h3>
										</div>
									</div>
								</div>
							</div>
								<!-- /.modal-dialog -->
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						

					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='__PUBLIC__/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='__PUBLIC__/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='__PUBLIC__/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="__PUBLIC__/assets/js/bootstrap.min.js"></script>
		<script src="__PUBLIC__/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<script src="__PUBLIC__/assets/js/jquery.dataTables.min.js"></script>
		<script src="__PUBLIC__/assets/js/jquery.dataTables.bootstrap.js"></script>

		<!-- ace scripts -->

		<script src="__PUBLIC__/assets/js/ace-elements.min.js"></script>
		<script src="__PUBLIC__/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
			
		</script>
		<script type="text/javascript">
		function deleteProduct_test(a){
			alert(a);
		}
		
		</script>
		<script language="JavaScript">
		<!--
		function transform(a){
			ThinkAjax.send('<?php echo U("Admin/Alter/alterFameView");?>','ajax=1&id='+a,complete,'result');
		}
		
		
		
		function complete(data,status){
			if (status==1)
			{
			
			var data = eval("("+data+")");
			/*得到回调数据，开始赋值*/
			$('updateId').value = data[0].id;
			$('form-field-1').value = data[0].name;
			$('form-field-2').value = data[0].toast;
			$('form-field-4').value = data[0].link;
			$('pro_img').src = "__ROOT__/Public/UploadsFame/"+data[0].img_src;
			$('list').innerHTML = '<span>修改id='+data[0].id+'的作品信息</span>';
			}
		}
		//-->
</script>

<script language="JavaScript">
		<!--
		function updatePro(){
			ThinkAjax.send('<?php echo U("Admin/Alter/alterFame");?>','ajax=1&name='+$('form-field-1').value+'&toast='+$('form-field-2').value+'&link='+$('form-field-4').value+'&id='+$('updateId').value,complete2,'result2');
		}
		
		
		
		function complete2(data,status){
			if (status==1){
			
			//var data = eval("("+data+")");
			//alert('修改成功！');
			}else{
				//alert('您没有选择要修改的选项！');
			}
		}
		//-->
</script>
<!-- 下面这段js是用于删除的 -->
<script language="JavaScript">
		<!--
		function deleteFame(a){
			alert(a);
			ThinkAjax.send('<?php echo U("Admin/Alter/deleteFame");?>','id='+a,complete3,'result3');
		}
		
		function complete3(data,status){
			if (status==1){
				alert("删除成功！!");
			}else{
				alert("操作失败");
			}
		}
		//-->
</script>
<script type="text/javascript" src="__PUBLIC__/Js/Base.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/prototype.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/mootools.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/Ajax/ThinkAjax.js"></script>

	<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>