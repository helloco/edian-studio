<?php
class IndexAction extends Action{
	public function index(){
		$this->display('Index/index');
	}
	
	public function blog(){
		//博客列表页面
		$Data = M('Article');
		import('ORG.Util.Page');
		$count = $Data->where($map)->count();
		$pageSize  = 10;
		$pageCount = ceil($count/$pageSize);
		$Page  = new Page($count,$pageSize);
		$nowPage = isset($_GET['p'])?$_GET['p']:1;
		if ($nowPage < 1) {
			$nowPage  = 1;
		}
 		
		$nowPage = ($nowPage > $pageCount)?$pageCount:$nowPage;
		$list = $Data->where($map)->order('time desc')->page($nowPage.','.$Page->listRows)->getField('id,title,time');
		$show       = $Page->show();// 分页显示输出
		
		$this->assign('list',$list);
	 	$this->assign('page',$show);
	 	$this->assign('count',$count);
		$this->assign('pageCount',$pageCount);
		$this->assign('pageNow',$nowPage);
		$this->display('blog');
	}
	
	public function content(){
		
		$Data = M('Article');
		$id = I('id');
		$condition['id'] = $id;
		
		$data = $Data->where($condition)->select();
		if ($data) {
			$this->assign('data',$data);
			$this->display('content');
		}
		
	}
	public function pageBase($model,$display,$pageSize){
		$Data = M($model);
		import('ORG.Util.Page');
		$count = $Data->where($map)->count();
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
	public function fame(){
		$this->pageBase('Fame', 'fame',10);
		
	}
	
	public function product(){
		$this->pageBase('Product', 'product',3);
	}
	
	public function about(){
		$this->display('about');
	}
}