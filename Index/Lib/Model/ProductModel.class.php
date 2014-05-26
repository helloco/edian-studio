<?php
class ProductModel extends Model{
	protected $_validate = array(
			array('name','require','作品名'),
			array('introduce','require','简介必填'),
			array('birthday','require','发布日期必填'),
			array('download_src','require','下载地址必填'),
	);
	
	protected $_auto = array(
			
	);
}