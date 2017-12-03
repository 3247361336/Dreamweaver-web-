<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>管理员登录</title>
<style>
body{background-color:#eee;margin:0;padding:0;}
			.box{margin:20px auto;background-color:#fff;padding:20px;width:250px;}
			.box .title{font-size:22px;font-weight:bold;text-align:center;}
			.box table{margin-top:15px;border-collapse:collapse;font-size:12px;border:1px solid #B5D6E6;}
			.box table th,.box table td{height:20px;border:1px solid #B5D6E6;}
            .box table .button{background-color:#00CCCC;border:1px solid #0099ff;color:#fff;width:80px;height:25px;margin:0 5px;cursor:pointer;}
			.box table .td-btn{text-align:center;padding-top:10px;}
			.box table th{background-color:#E8F6FC;font-weight:normal;}
			.box table td{height:20px;border:1px solid #B5D6E6;text-align:center;}
			.page{float:right;font_size:12px;margin:20px;}
  		</style>
</head>
<body>
<div class="box" align="center">
		<div class="title">管理员登录</div>
	<form method="post">
		<table border="1">
			<tr><td>用户名:</td><td><input type="text" name="aname" /></td></tr>
			<tr><td>密码:</td><td><input type="password" name="apwd" /></td></tr>
			<tr><td colspan="2" class="td-btn"><input type="submit" value="登录" /></td></tr>
		</table>
	</form>
</div>
</body>
</html>