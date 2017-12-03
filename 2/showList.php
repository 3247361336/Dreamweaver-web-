<?php
	header('Content-type:text/html;charset=utf-8');
	$link=mysql_connect('localhost','root','');
	if(!$link){
		die('连接数据库失败'.mysql_error());
	}
	mysql_query('set names utf8');
	mysql_query('use `itcast`');
	$fields=array('name','class');
	$sql_order='';
	$order=isset($_GET['order'])?$_GET['order']:'';
	$sort=isset($_GET['sort'])?$_GET['sort']:'';
	if(in_array($order,$fields)){
	    if($sort=='desc'){
	        $sql_order="order by $order desc";
	        $sort='asc';
	    }else{
	        $sql_order="order by $order asc";
	        $sort='desc';
	    }
	}
	$where='';
	if (isset($_GET['keyword'])) {
	    $keyword = $_GET['keyword'];
	    $keyword = mysql_real_escape_string($keyword);
	    $where = "where name like '%$keyword%'";
	}
	
	$sql="select * from `lkf` {$sql_order}{$where}";
	$res=mysql_query($sql,$link);
	if(!$res)die(mysql_error());
	$lkf=array();
	while($row=mysql_fetch_assoc($res)){
		$lkf[]=$row;
	}
	define ('APP','itcast');
	require './list_html.php';

