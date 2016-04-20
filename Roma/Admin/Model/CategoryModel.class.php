<?php 
	namespace Admin\Model;
	use Think\Model;
	defined('THINK_VERSION') or die("Access Denied");
	class CategoryModel extends Model{
		public function get_all_nav($fid){
			$navArr = M("Category")->where("fid=$fid")->select();
			if($navArr){
				foreach ($navArr as $key => $value) {
					$navArr[$key]['subnav'] = $this->get_all_nav($value['cid']);
				}
			}
			return $navArr;
		}
		/*获取所有的父导航*/
		public function get_all_parent($cid){
			$data = $this->find($cid);
			echo $data['name']."=>";
			if ($data['fid'] != 0){
				$this->get_all_parent($data['fid']);
			}
		}
	}
?>