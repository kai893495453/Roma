<?php 
	namespace Admin\Model;
	use Think\Model;
	defined('THINK_VERSION') or die("Access Denied");
	class ProductModel extends Model{
		protected $_validate = array(
			array('title','require','标题不能为空'), //默认情况下用正则进行验证
			array('content','require','内容不能为空')
		);
	}
?>