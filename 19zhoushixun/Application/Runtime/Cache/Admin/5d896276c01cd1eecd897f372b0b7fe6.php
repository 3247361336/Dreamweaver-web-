<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="utf-8">
    <title>学生管理系统</title>
	<link href="/19zhoushixun/Public/css/style.css" rel="stylesheet">
</head>
<body>
	<div class="top">
	<div class="top-box">
		<h1 class="top-box-logo">学生管理系统</h1>
		<div class="top-box-nav">
			欢迎您！<a href="#">我的信息</a> <a href="#">密码修改</a> <a href="/19zhoushixun/index.php/Admin/Index/logout">安全退出</a>
		</div>
	</div>
</div>
<div class="main">
	<div class="main-left">
		<div class="main-left-nav">
			<div class="main-left-nav-head">
				<strong>院系专业</strong><div></div>
			</div>
			<a href="/19zhoushixun/index.php/Admin/Major/showList">专业列表</a>
			<a href="#">添加专业</a>

			<div class="main-left-nav-head">
				<strong>学生管理</strong><div></div>
			</div>
			<div class="main-left-nav-list">
				<div><a href="/19zhoushixun/index.php/Admin/Student/showList">学生列表</a></div>
				<div><a href="/19zhoushixun/index.php/Admin/Student/add">添加学生</a></div>
				<div><a href="/19zhoushixun/index.php/Admin/Student/addAll">批量添加</a></div>
			</div>
			<div class="main-left-nav-head">
				<strong>系统设置</strong><div></div>
			</div>
			<div class="main-left-nav-list">
				<div><a href="#">修改密码</a></div>
			</div>

			<div class="main-left-nav-head">
				<strong>教学系统</strong><div></div>
			</div>
		</div>
	</div>
	<div class="main-right">
</body>
</html>
<h2 class="main-right-nav">院系专业 &gt; 专业列表</h2>
<div class="main-right-titbox">
	<ul><li><a href="#">专业列表</a></li></ul>
</div>
<table class="table">
	 <tr><th>专业</th><th>班级</th><th>操作</th></tr>
	 <?php if(!empty($major_info)): if(is_array($major_info)): foreach($major_info as $key=>$v): if(is_array($v["Class"])): foreach($v["Class"] as $k=>$vv): ?><tr align="center">
				<?php if(($k == 0)): ?><td rowspan="<?php echo (count($v["Class"])); ?>" class="table-major"><?php echo ($v["major_name"]); ?></td><?php endif; ?>
				<td width="40%"><a href="/19zhoushixun/index.php/Admin/Student/showList/class_id/<?php echo ($vv["class_id"]); ?>"><?php echo ($vv["class_name"]); ?></a></td>
				<td><div align="center">编辑　删除</div></td>
				</tr><?php endforeach; endif; endforeach; endif; ?>
		<?php else: ?>
		<tr><td colspan="3">查询的结果不存在！</td></tr><?php endif; ?>
</table>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>学生管理系统</title>
</head>
<body>
</div>
	<div class="main-footer">
		<div>学生管理系统</div>
	</div>
</div>
</body>
</html>