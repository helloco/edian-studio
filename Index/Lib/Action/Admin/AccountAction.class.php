<?php
class AccountAction extends CommonAction{
	public function accountSettingView(){
		$Model = D('Admin');
		$id = $_SESSION['id'];
		$res = $Model->where("id=$id")->select();
		$this->assign('res',$res);
		$this->display('accountSettingView');
	}
	public function accountUpdateView(){
		if(!empty($_POST['id'])){
			
		}
	}
	public function accountUpdate(){
		if (!empty($_POST["id"])&&!empty($_POST["update_admin_name"])&&!empty($_POST["password"])&&!empty($_POST["password2"])) {
			if ($_POST["password"]!=$_POST["password2"]) {
				$this->ajaxReturn(0,"两次输入的密码不一致",0);;
			}else{
				$id = $_POST['id'];
				$data["admin_name"] = $_POST["update_admin_name"];
				$data["admin_passwd"] = md5($_POST['password']);
				$Model = M('Admin');
				$Model->where("id=$id")->save($data);
				$this->ajaxReturn(1,"修改密码成功",1);
			}
		}else{
			$this->ajaxReturn(0,"您输入的信息有误，请重新输入",0);
		}
	}
}