<?php
class CommonAction extends Action{
	public function _initialize(){
		if (!isset($_SESSION['adminName']) || !isset($_SESSION['adminPwd'])) {
			$this->redirect('Admin/Index/index');
		}
	}
}