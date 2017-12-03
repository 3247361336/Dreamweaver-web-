<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="utf-8">
    <title>图书管理系统</title>
	<link href="/19zhoushixun1/Public/css/style.css" rel="stylesheet">
</head>
<body>
	<div class="top">
	<div class="top-box">
		<h1 class="top-box-logo">图书管理系统</h1>
		<div class="top-box-nav">
			欢迎您！<a href="#">我的信息</a> <a href="#">密码修改</a> <a href="/19zhoushixun1/index.php/Admin/Index/logout">安全退出</a>
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
				<div><a href="/19zhoushixun1/index.php/Admin/Student/showList">图书列表</a></div>
				<div><a href="/19zhoushixun1/index.php/Admin/Student/add">添加图书</a></div>
				<div><a href="/19zhoushixun1/index.php/Admin/Student/addAll">批量添加</a></div>
			</div>
			<div class="main-left-nav-head">
				
			</div>
			<div class="main-left-nav-list">
		
			</div>

			<div class="main-left-nav-head">
				
			</div>
		</div>
	</div>
	<div class="main-right">
</body>
</html>
<h2 class="main-right-nav">图书管理 &gt; 批量添加</h2>
<div class="main-right-addAll">
	<form method="post">
	<table class="table">
		<tr>
			<th>图书号</th><th>图书名</th><th>作者</th><th>出版社</th><th width="60">操作</th>
		</tr>
		<tr align="center" class="js-student">
			<!--图书号-->
			<td><input type="text" class="form-text" name="book_id[]"></td>
			<!--图书名-->
			<td><input type="text" class="form-text" name="book_name[]">
			<!--作者-->
			<td><input type="text" class="form-text" name="book_author[]"></td>
			<!--出版社 -->
			<td><input type="text" class="form-text" name="publishing house[]"></td>
			<td><img id="append" src="/19zhoushixun1/Public/images/append.png" /> <img id="remove" src="/19zhoushixun1/Public/images/remove.png" /></td>
		</tr>
		<tr>
			<td colspan="6" align="center">
				<input type="submit" value="确认输入" class="form-btn">
				<input type="reset" value="重新填写" class="form-btn">
			</td>
		</tr>
	</table>
	</form>
</div>
<style>#append,#remove{cursor:pointer;vertical-align:middle}</style>
<script src="/19zhoushixun1/Public/js/jquery.min.js"></script>
<script>
	$("#append").click(function(){
		tr = $(this).parents("tr");
		tr.clone(true).insertAfter(tr);
	});
	$("#remove").click(function(){
		if( $(".js-student").length > 1){
			tr = $(this).parents("tr");
			$(tr).remove();
		}
	});
</script>
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