<?php
header('content-type:text/html;charset=utf-8');
require './public_function.php';
dbInit();
$class=isset($_GET['class'])?intval($_GET['class']):0;
if(!empty($_POST)){
	$update=array();
	$fields=array('name','class','qq','email','tel');
	foreach($fields as $v){
		$data=isset($_POST[$v])?$_POST[$v]:'';
		if($data=='')die($v.' 字段不能为空');
		$data=safeHandle($data);
		$update[]="`$v`= '$data'";
		}
		$update_str=implode(',', $update);
		$sql="update `emp_info` set $update_str where `class`=$class";
		if($res =query($sql)){
			header("Location:./showlist.php");
		}else{
			die('员工信息修改失败');
		}
}else{
	$sql="select * from `lkf` where `class`=$class";
	$emp_info=fetchRow($sql);
	define('APP', `itcast`);
	require './update_html.php';
}
