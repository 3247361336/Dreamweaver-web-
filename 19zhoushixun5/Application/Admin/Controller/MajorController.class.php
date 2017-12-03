<?php
namespace Admin\Controller;
use Think\Controller;
class MajorController extends Controller{
	public function showList(){
		$class_info = D('class')->relation(true)->select();
		$this->assign('class_info',$class_info);
		$this->display();
	}
}
?>