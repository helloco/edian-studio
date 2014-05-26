<?php
class FameModel extends Model{
	
	protected $_validate = array(
			array('img_src','require','照片不能为空！'),
			array('toast','require','toast必填'),
	);
	
	protected $_auto = array(
			
	);
}