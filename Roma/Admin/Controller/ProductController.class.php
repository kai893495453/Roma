<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function productlist(){
    	//查产品表的产品
    	$productArr = D("Product")->limit(6)->page(1)->select();
    	$this->assign("productList",$productArr);
        $this->display("list");
    }
    /**
     * [add 插入产品]
     */
    public function add(){
    	$product = D('Product');
    	if(IS_POST){
    		if($product->create()){
	    		$arr = array(
	    			'title'=>I('post.title'),
	    			'des'=>I('post.des'),
	    			'content'=>I('post.content'),
	    			'time'=>time(),
	    			'cid'=>I('post.cate')
	    		);
	    		$res = $product->add($arr);
	    		if($res){
	    			$this->success('新增成功',U('admin/product/productlist'));
	    			die;
	    		}else{
	    			$this->error($product->getError());
	    		}
	    	}else{
	    		$this->error($product->getError());
	    	}
    	}
    	$this->assign("nav",D("Category")->get_all_nav(0));
    	$this->display("add");
    }
}