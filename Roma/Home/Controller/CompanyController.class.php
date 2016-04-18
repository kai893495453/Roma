<?php
namespace Home\Controller;
use Think\Controller;
class CompanyController extends Controller {
    public function datalist(){
        $this->display("news");
    }
    public function maininfo(){
    	$this->display("Introduction");
    }
}