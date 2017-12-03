<?php
     header('Content-type:text/html;charset=utf-8');
     require './pubilc_function.php';
     dbInit();
     if(!empty($_POST)){
     	$fileds=array('name','class','qq','email','tel');
     	$value=array();
     	foreach($fileds as $k => $v){
     		$data=isset($_POST[$v])?$_POST[$v]:'';
     		if($data=='')die($v.'字段不能为空');
     		$data=safeHandle($data);
     		$fileds[$k]="`$v`";
     		$values[]="'$data'";
     	}
     	$fileds=implode(',', $fileds);
     	$values=implode(',', $values);
     	$sql="inset into `emp_info` ($fileds) values ($values)";
     	if($res = query($sql)){
     		header('Location:./showList.php');
     		die;
     	}else{
     		die('员工添加失败！');
     	}
     }
define('APP','itcast');
require './add_html.php';