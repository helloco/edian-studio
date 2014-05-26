<?php
class IndexAction extends Action{
	public function index(){
		$this->display();
	}
	public function checkLogin(){
		if (!IS_POST)
			_404('页面不存在',U('index'));
		if($_SESSION['verify'] != md5($_POST['verify'])) {
			$this->error('验证码错误！');
		}
		$data = array(
				'adminName' => I('adminName','','htmlspecialchars'),
				'adminPwd' => md5(I('adminPwd','','htmlspecialchars')),
		);
		$Admin = M('Admin');
		$res = $Admin->where("admin_name='%s' and admin_passwd='%s'",$data)->select();
		if ($res) {
			session_start();
			session('adminName',$data["adminName"]);
			session('adminPwd',$data["adminPwd"]);
			//$this->assign('adminName',$_SESSION['adminName']);
			//$this->display('Admin/admin');
			$this->redirect('/Admin/Admin/admin');
		}else {
			$this->error("用户名或者密码错误",'index');
		}
	}
	
	/**
	 * 验证码
	 */
	public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify();
	}
	
	
// 	public function read(){
// 		$Article = M('Article');
// 		$data = $Article->find(9);
// 		if ($data) {
// 			$this->data = $data;
// 			$this->display();
// 		}
// 	}
}