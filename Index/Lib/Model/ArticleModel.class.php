<?php
class ArticleModel extends Model{
	
	protected $_validate = array(
		array('title','require','标题必填'),
		array('content','require','文章内容必填'),
	);
	
	protected $_auto = array(
		array('time','time',1,'function'),	
	);
}