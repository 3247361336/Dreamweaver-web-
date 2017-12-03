<?php
/*
 * 初始化数据库连接
 * */
function dbInit(){
	$link=mysql_connect('localhost','root','');
	if(!$link){
		die('连接数据库失败！'.mysql_error());
	}
	mysql_query('set names utf8');
	mysql_query('use itcast');
}

/*
 执行SQL函数
 
 */
function query($sql){
	if($result=mysql_query($sql)){
		return $result;
	}else{
		echo 'SQL执行失败:<br>';
		echo '错误的SQL为:',$sql,'<br>';
		echo '错误的代码为:',mysql_errno(),'<br>';
		echo '错误的信息为:',mysql_errno(),'<br>';
	}
}

/*
 * 处理结果中有多条数据的方法
 * 
 * */
function fetchAll($sql){
	if($result=query($sql)){
		$row=array();
		while($row=mysql_fetch_array($result,MYSQL_NUM)){
			$rows[]=$row;			
		}
		mysql_free_result($result);
		return $rows;
	}else{
		return false;
	}	
}

/*
 * 判断只有一条数据的方法
 * */
function fetchRow($sql){
	if($result=query($sql)){
		$row=mysql_fetch_row($result);
		return $row;
	}else{
		return false;
	} 		
}

/*
 * 对数据进行安全处理
 * */
function safeHandle($data){
	$data=htmlspecialchars($data);
	$data=mysql_real_escape_string($data);
	return $data;
}


