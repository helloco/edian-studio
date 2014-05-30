<?php
class TestAction extends Action{
	public function test(){
// 		$Model = M('Admin');
// 		$data["admin_passwd"] = "zhenghang";
// 		$condition['admin_name'] = $data["admin_passwd"];
// 		$res = $Model->where($condition)->select();
		
		
		$condition['admin_name'] =   'root1';
		$res = D('Admin')->where($condition)->select();
		dump($res);
		if (is_null($res)) {
			echo "empty";
		}else{
			echo "no empty";
		}
		echo count($res),PHP_EOL;
		
	}
	
	public function selectData(){
// 		$mydata = array(
				
// 					id =>  "2",
// 					admin_name => "kk",
// 					admin_passwd => "kk",
// 					type => "1"
				
				
// 		);
		
		dump(D('Admin')->select());
		$this->assign('mydata',D('Admin')->select());
		$this->display('selectData');
	}
}