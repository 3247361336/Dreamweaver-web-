<?php
    $error=array();//保存错误信息
    //当有表单提交时
    if(!empty($_POST)){
    	//接收用户登录表单
    	$username=isset($_POST['username'])?trim($_POST['username']):'';
    	$password=isset($_POST['password'])?$_POST['password']:'';
    	//载入表单验证数据库，验证用户名和密码格式
    	require 'check_form.lib.php';
    	if(($result=checkUsername($username))!==true) $error[]=$result;
    	if(($result=checkPassword($password))!==true) $error[]=$result;
    	//表单验证通过，再到数据库
    	if(empty($error)){
    		header('Content-type:text/html;charset=utf-8');
    		$link=mysql_connect('localhost','root','');
    		if(!$link){
    			die('连接数据库失败'.mysql_error());
    			mysql_query('set names utf8');
    			mysql_query('use `itcast`');
    			$username=mysql_real_escape_string($username);
    			$sql="select `id`,`password` from `user` where `username`='$username'";
    		}
    	}
    }