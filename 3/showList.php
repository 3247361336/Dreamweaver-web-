<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-type;text/html;charest=utf-8');
$link=mysql_connect('localhost','root','');
if(!$link){
	die('连接数据库失败！'.mysql_error());
}
mysql_query('set names utf8');
mysql_query('use `test`');

$where = '';
if(isset($_GET['keyword'])){
	$keyword = $_GET['keyword'];
	$keyword = mysql_real_escape_string($keyword);
	$where = "where name like '%$keyword%' ";
}



$res=mysql_query('select * from `student` $where');
$student=array();
while($row = mysql_fetch_assoc($res)){
	$student[]=$row;
}
define('APP','test');
require './list_html.php';
mysql_close();
?>