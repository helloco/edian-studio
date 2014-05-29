<?php
class TestAction extends Action{
	public function test(){
		$Model = M('Admin');
		$data["admin_passwd"] = "zhenghang";
		$condition['admin_name'] = $data["admin_passwd"];
		$res = $Model->where($condition)->select();
		dump($res);
		echo count($res),PHP_EOL;
		if (is_null($res)) {
			echo "ok";
		}else{
			echo "sorry";
		}
	}
}