<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display("index");
    }
    public function edit(){
    	$this->display("add");
    }
    public function li(){
    	$this->display("list");
    }
}