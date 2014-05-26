<?php
class AjaxAction extends Action{
	public function index(){
		$this->display('Admin/admin1');
	}
	public function login(){
		$this->display();
	}
	public function checkName(){
		if($_POST['username'] == "admin"){
			$this->success('用户名正确~');
		}else{
			$this->error('用户名错误！！');
		}
	}
	public function checkLogin(){
		if($_POST['username'] == 'root'){
			$data['type'] = 1;
			$data['info'] = 'zzzzzzzzzzzzzz';
			$data['num'] = 9;
			$data = json_encode($data);
			$this->ajaxReturn($data,'用户名正确',1);
			// success 方法返回
			//$this->success('用户名正确~',true);
			// 加载了 Js/Form/CheckForm.js 类库或提交了 ajax=1 隐藏表单元素
			//$this->success('用户名正确~');
		}else{
			$this->ajaxReturn('','用户名错误！',0);
			// error 方法返回
			//$this->error('用户名错误！',true);
			// 加载了 Js/Form/CheckForm.js 类库或提交了 ajax=1 隐藏表单元素
			//$this->error('用户名错误！');
		}
	}
	
	public function kk(){
		$Product = M('Product');
		$data = $Product->where("id=%d",18)->select();
		dump($data);
		die();
	}
}