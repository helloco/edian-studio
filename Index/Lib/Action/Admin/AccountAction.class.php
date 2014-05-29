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
			$this->display('userManageView');
		}else{
			
			header("Content-type: text/html; charset=utf-8");
			echo "<script language='JavaScript'>alert('您不是超级管理员，暂不能进入此页面');  history.back();</script>";
		}
	}
}