<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function datalist(){
        $this->display("product");
    }
    public function maininfo(){
    	$this->display("productMain");
    }
}