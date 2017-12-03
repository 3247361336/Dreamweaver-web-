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
<h2 class="main-right-nav">图书管理 &gt; 图书列表</h2>
<div class="main-right-titbox">
	<ul><li><a href="#">图书列表</a></li></ul>
</div>
<table class="table">
	<tr><th>图书号</th><th>图书名</th><th>作者</th><th>出版社</th><th>操作</th></tr>
	<?php if(!empty($book_info)): if(is_array($book_info)): foreach($book_info as $key=>$v): ?><tr align="center">
				<td><?php echo ($v["book_id"]); ?></td>
				<td><?php echo ($v["book_name"]); ?></td>
				<td><?php echo ($v["book_author"]); ?></td>
				<td><?php echo ($v["publishing house"]); ?></td>
				<td><div align="center"><a href="/19zhoushixun1/index.php/Admin/Student/update/student_id/<?php echo ($v["student_id"]); ?>">编辑</a>&nbsp; &nbsp;<a href="/19zhoushixun1/index.php/Admin/Student/delete/student_id/<?php echo ($v["student_id"]); ?>/class_id/<?php echo ($v["class_id"]); ?>"  onclick="javascript:if(confirm('确定要删除此信息吗？')){return true;}return false;">删除</a></div></td>
			</tr><?php endforeach; endif; ?>
		<?php else: ?>
		<tr align="center"><td colspan="5">查询的结果不存在！</td></tr><?php endif; ?>
</table>
<div><a href="/19zhoushixun1/index.php/Admin/Student/add/class_id/<?php echo ($class_id); ?>" class="main-right-tita">添加图书</a></div>
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