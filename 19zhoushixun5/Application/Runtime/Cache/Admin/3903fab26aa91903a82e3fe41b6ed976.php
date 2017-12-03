<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="utf-8">
    <title>图书管理系统</title>
	<link href="/19zhoushixun5/Public/css/style.css" rel="stylesheet">
</head>
<body>
	<div class="top">
	<div class="top-box">
		<h1 class="top-box-logo">图书管理系统</h1>
		<div class="top-box-nav">
			欢迎您！<a href="#">我的信息</a> <a href="#">密码修改</a> <a href="/19zhoushixun5/index.php/Admin/Index/logout">安全退出</a>
		</div>
	</div>
</div>
<div class="main">
	<div class="main-left">
		<div class="main-left-nav">
			<div class="main-left-nav-head">
				
			</div>
			
			<div class="main-left-nav-head">
				<strong>图书管理</strong><div></div>
			</div>
			<div class="main-left-nav-list">
				<div><a href="/19zhoushixun5/index.php/Admin/Student/showList">图书列表</a></div>
				<div><a href="/19zhoushixun5/index.php/Admin/Student/add">添加图书</a></div>
				<div><a href="/19zhoushixun5/index.php/Admin/Student/addAll">批量添加</a></div>
			</div>
			<div class="main-left-nav-head">
				<strong>系统设置</strong><div></div>
			</div>
			<div class="main-left-nav-list">
				<div><a href="#">修改密码</a></div>
			</div>

			<div class="main-left-nav-head">
				
			</div>
		</div>
	</div>
	<div class="main-right">
</body>
</html>
<h2 class="main-right-nav">图书管理 &gt; 图书添加</h2>
<div class="main-right-table">
	<form method="post">
	<table class="table">
	<tr>
			<th>图书号：</th><td><input type="text" class="form-text" name="student_id" required></td>
		</tr>
		<tr>
			<th>图书名：</th><td><input type="text" class="form-text" name="student_number" required></td>
		</tr>
		<tr>
			<th>作者：</th><td><input type="text" class="form-text" name="student_name" required>
		</tr>
		<tr>
			<th>出版社：</th>
			<td><input type="text" class="form-text" name="student_birthday" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="确认输入" class="form-btn">　<input type="reset" value="重新填写" class="form-btn"></td>
		</tr>
	</table>
	</form>
</div>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>图书管理系统</title>
</head>
<body>
</div>
	<div class="main-footer">
		<div>图书管理系统</div>
	</div>
</div>
</body>
</html>