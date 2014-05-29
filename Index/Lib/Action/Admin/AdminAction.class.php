<?php
/**
 * the controller is used for add something in website
 * @author hang
 *
 */
class AdminAction extends CommonAction{
	
	public function admin(){
		
		$this->display('admin');
	}
	public function logout(){
		session_unset();
		session_destroy();
		$this->redirect('Admin/Index/index');
	}
	public function addBlogView(){
		$this->display('addBlogView');
	}
	public function addBlog(){
	
		$Article = D('Article');
		
		if ($Article->create()) {
			$res = $Article->add();
			if ($res) {
				$this->success("操作成功!");
			}else {
				$this->error('写入错误');
			}
		}else{
			$this->error("操作失败");
		}
	}
	public function addProductView(){
		$this->display();
	}
	Public function upload(){
	
		//接受上传的文件
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 1048576 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg','txt');// 设置附件上传类型
		$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
		if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
		}
		//接受其他参数
		$data = array(
			'name' => I('productName','','htmlspecialchars'),
			'introduce' => I('introduce','','htmlspecialchars'),
			'birthday' => I('birthday','','htmlspecialchars'),
			'img_src' => $info[0]['savename'],
			'download_src' => I('downloadSrc','','htmlspecialchars'),
		);
		$Product = D('Product');
		if ($Product->create()) {
			$res = $Product->add($data);
			if ($res) {
				
				$this->success('添加成功！');
			}else {
				$this->error('添加失败！');
			}
		}

	}
	
	public function addFameView(){
		$this->display();
	}
	
	Public function uploadFame(){
		header("Content-Type:text/html; charset=utf-8");
		//接受上传的文件
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 1048576 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Public/UploadsFame/';// 设置附件上传目录
		if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
		}
		//接受其他参数
		
		$data = array(
				'name' => I('link','','htmlspecialchars'),
				'link' => I('link','','htmlspecialchars'),
				'img_src' => $info[0]['savename'],
				'toast' => I('fameName','','htmlspecialchars'),
		);

		$Fame = D("Fame");
		//$Fame->create($data);
		$res = $Fame->add($data);
			if ($res) {
				$this->success('添加成功！');
			}else {
				$this->error('添加失败！');
			}
	
	}
	
}