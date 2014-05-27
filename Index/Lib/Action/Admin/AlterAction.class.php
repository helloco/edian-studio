<?php
/**
 * the controller is used for alter something in website
 * @author hizhenghang@gmail.com
 *
 */
class AlterAction extends CommonAction{
	public function alterProductView(){
		/**
		 * 查询出作品列表展示出来
		 * 注释详见thinkphp 的官方文档
		 */
		$Data = M('Product');
		import('ORG.Util.Page');
		$count = $Data->where($map)->count();
		$pageSize  = 2;
		$pageCount = ceil($count/$pageSize);
		$Page  = new Page($count,$pageSize);
		$nowPage = isset($_GET['p'])?$_GET['p']:1;
		if ($nowPage < 1) {
			$nowPage  = 1;
		}
 		
		$nowPage = ($nowPage > $pageCount)?$pageCount:$nowPage;
		$list = $Data->where($map)->order()->page($nowPage.','.$Page->listRows)->select();
		$show       = $Page->show();// 分页显示输出
		
		$this->assign('list',$list);
	 	$this->assign('page',$show);
	 	$this->assign('count',$count);
		$this->assign('pageCount',$pageCount);
		$this->assign('pageNow',$nowPage);
	
		$this->display('alterProductView');
	}
	public function updateProductView(){
		if (!empty($_POST['id'])) {
			$Product = M('Product');
			$data = $Product->where("id=%d",$_POST['id'])->select();
			$data = json_encode($data);
			$this->ajaxReturn($data,'请在下面的form组件中修改作品信息！',1);
		}

	}
	
	public function  alterProduct(){
		if (!empty($_POST['id'])) {
			$Product = M('Product');
			$id                = $_POST['id'];
			$data['name']      = $_POST['name'];
			$data['introduce'] = $_POST['introduce'];
			$data['birthday'] = $_POST['birthday'];
			$data['download_src'] = $_POST['download_src'];
			
			$Product->where("id=$id")->save($data);
			$this->ajaxReturn($data,'更新作品信息成功！',1);
		}else{
			$this->ajaxReturn(0,'您没有选择要修改的选项！',0);
		}
	}
	
	public function alterBlogList(){
		
		$Data = M('Article');
		import('ORG.Util.Page');
		$count = $Data->where($map)->count();
		$pageSize  = 2;
		$pageCount = ceil($count/$pageSize);
		$Page  = new Page($count,$pageSize);
		$nowPage = isset($_GET['p'])?$_GET['p']:1;
		if ($nowPage < 1) {
			$nowPage  = 1;
		}
			
		$nowPage = ($nowPage > $pageCount)?$pageCount:$nowPage;
		$list = $Data->where($map)->order()->page($nowPage.','.$Page->listRows)->select();
		$show       = $Page->show();// 分页显示输出
		
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->assign('count',$count);
		$this->assign('pageCount',$pageCount);
		$this->assign('pageNow',$nowPage);
		$this->display('alterBlogList');
	}
	public function alterListBase($model,$display){
		$Data = M($model);
		import('ORG.Util.Page');
		$count = $Data->where($map)->count();
		$pageSize  = 2;
		$pageCount = ceil($count/$pageSize);
		$Page  = new Page($count,$pageSize);
		$nowPage = isset($_GET['p'])?$_GET['p']:1;
		if ($nowPage < 1) {
			$nowPage  = 1;
		}
			
		$nowPage = ($nowPage > $pageCount)?$pageCount:$nowPage;
		$list = $Data->where($map)->order()->page($nowPage.','.$Page->listRows)->select();
		$show       = $Page->show();// 分页显示输出
		
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->assign('count',$count);
		$this->assign('pageCount',$pageCount);
		$this->assign('pageNow',$nowPage);
		$this->display($display);
	}
	
	public function alterFameList(){
		$this->alterListBase("Fame", "alterFameView");
	}
	public function ajaxTransformBase($model,$message="请在下面的组件中修改信息！"){
		if (!empty($_POST['id'])) {
			$Article = M($model);
			$data = $Article->where("id=%d",$_POST['id'])->select();
			$data = json_encode($data);
			$this->ajaxReturn($data,$message,1);
		}
	}
	public function updateArticleView(){
		if (!empty($_POST['id'])) {
			$Article = M('Article');
			$data = $Article->where("id=%d",$_POST['id'])->select();
			$data = json_encode($data);
			$this->ajaxReturn($data,'请在下面的form组件中修改作品信息！',1);
		}

	}
	
	public function  alterArticle(){
		if (!empty($_POST['id'])) {
			$Article = M('Article');
			$id              = $_POST['id'];
			$data['title']   = $_POST['title'];
			$data['content'] = $_POST['content'];
			
				
			$Article->where("id=$id")->save($data);
			$this->ajaxReturn(1,'更新作品信息成功！',1);
		}else{
			$this->ajaxReturn(0,'您没有选择要修改的选项！',0);
		}
	}
	//删除作品
	function deleteProduct(){
		$Product = M('Product');
		$id = $_POST['id'];
		$Product->where("id=$id")->delete();
		$this->ajaxReturn(1,'删除作品信息成功！',1);
	}
	//删除博客
	function deleteBlog(){
		$Article = M('Article');
		$id = $_POST['id'];
		$Article->where("id=$id")->delete();
		$this->ajaxReturn(1,'删除信息成功！',1);
	}
}