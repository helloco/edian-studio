<?php
/**
 * the controller is used for alter something in website
 * @author hang
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
// 		if(!empty($_POST['id'])){
// 			$data['type'] = 1;
// 			$data['info'] = 'zzzzzzzzzzzzzz';
// 			$data['num'] = 9;
// 			$data = json_encode($data);
// 			$this->ajaxReturn($data,'修改作品信息！',1);
// 		}else{
// 			$this->error('错误！！');
// 		}
	}
	
	public function  alterProduct(){
		if (!empty($_POST['id'])) {
			$data['kk'] = 'zhenghang';
			$data = json_encode($data);
			$this->ajaxReturn($data,'更新作品信息成功！',1);
		}else{
			$this->ajaxReturn(0,'您没有选择要修改的选项！',0);
		}
	}
}