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
				$this->ajaxReturn(0,"两次输入的密码不一致",0);
			}else{
				$id = $_POST['id'];
				$data["admin_name"] = $_POST['update_admin_name'];
				$data["admin_passwd"] = md5($_POST['password']);
				$Model = M('Admin');
				$condition['admin_name'] = $data["admin_name"];
				//$condition[id] = $id;
				$res = $Model->where($condition)->select();
				if (is_null($res) || (count($res)==1 && $res[0][id]==$id)) {
					$Model->where("id=$id")->save($data);
					$data = json_encode($data);
					$this->ajaxReturn($data,"修改账户成功",1);
				}else{
					$this->ajaxReturn(1,"用户名已经被占用",2);;
				}
				
				
			}
		}else{
			$this->ajaxReturn(0,"您输入的信息有误，请重新输入",0);
		}
	}
	
	public function userManageView(){
		/**
		 * type == 1 代表超级管理员，type == 2或者其他的代表普通管理员
		 */
		if ($_SESSION['type'] == 1) {
			$this->assign('list',D('Admin')->order('type')->select());
			$this->display('userManageView');
		}else{
			
			header("Content-type: text/html; charset=utf-8");
			echo "<script language='JavaScript'>alert('您不是超级管理员，暂不能进入此页面');  history.back();</script>";
		}
	}
	
	public function alterAccountView(){
		if (!empty($_POST['id'])) {
			$Model = M('Admin');
			$data = $Model->where("id=%d",$_POST['id'])->select();
			$data = json_encode($data);
			$this->ajaxReturn($data,"请在下面的表单中修改密码",1);
		}else{
			$this->ajaxReturn(1,"操作错误",0);;
		}
	}
	
	public function alterAccount(){
		if (!empty($_POST['id']) && !empty($_POST['password']) && !empty($_POST['password2'])) {
			if ($_POST['password'] == $_POST['password2']) {
				D('Admin')->where('id='.$_POST['id'])->setField('admin_passwd', md5($_POST['password']));
				$this->ajaxReturn(1,"修改成功",1);
			}else {
				$this->ajaxReturn(0,"密码不一致",2);
			}
		}else{
			$this->ajaxReturn(0,"输入不能为空",0);
		}
	}
	
	public function deleteUser(){
		if ($_POST['id'] != 1) {
			D('Admin')->where('id='.$_POST['id'])->delete();
			$this->ajaxReturn(1,"删除成功",1);
		}else if ($_POST['id'] == 1) {
			$this->ajaxReturn(0,"超级管理员暂不支持删除",0);
		}
	}
	
	public function addUser(){
		$data['admin_passwd'] = md5($_POST['add_password']);
		$data['admin_passwd2'] = md5($_POST['add_password2']);
		if ($data['admin_passwd'] != $data['admin_passwd2']) {
			$this->ajaxReturn(0,"密码不一致",0);
		}
		$data['admin_name'] = $_POST['add_username'];
		$data['tips'] = $_POST['comment'];
		if (!empty($data['admin_name']) && !empty($data["admin_passwd"]) && !empty($data['admin_passwd2'])) {
			$condition['admin_name'] = $data['admin_name'];
			$res = D('Admin')->where($condition)->select();
			if (is_null($res)){
				D('Admin')->add($data);
				$this->ajaxReturn(1,"新增用户成功",1);
				
			}else{
				$this->ajaxReturn(0,"用户名已经存在！请更换用户名重试",2);
				
			}
		}else{
			$this->ajaxReturn(0,"输入不能为空",3);
		}
	}
	public function logout(){
		session(null);
		$this->redirect('/Admin/Index/Index');
	}
}