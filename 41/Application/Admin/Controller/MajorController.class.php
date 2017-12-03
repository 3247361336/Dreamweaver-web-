<?php
namespace Admin\Controller;
use Think\Controller;
class MajorController extends  Controller{
	public function getMajorClass(){
		$major_info=D('major')->relation(true)->select();
		$this->assign('major_info',$major_info);
		$this->display();
	}
}
