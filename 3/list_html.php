
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>员工信息列表</title>
 <style>
	.box{margin:20px;}
	.box .title{font-size:22px;font-weight:bold;text-align:center;}
	.box table{width:100%;margin-top:15px;border-collapse:collapse;font-size:12px;border:1px solid #B5D6E6;min-width:460px;}
	.box table th,.box table td{height:20px;border:1px solid #B5D6E6;}
	.box table th{background-color:#E8F6FC;font-weight:normal;}
	.box table td{text-align:center;}
  </style>
</head>

<body>
<div class="box">
<div>宿舍信息列表</div>
<form name="form1" action="index.php" method="get">
<div>快速查询：
<input type="text" name="keyword" />
<input type="submit" name="button" value="提交" />
</div>
</form>


<table border="1">
<tr>
<th width="5%">ID</th><th>姓名</th><th>班级</th><th>QQ号码</th><th>邮箱</th><th>手机号码</th><th width="25%">相关操作</th>
</tr>
<?php if(!empty($student)) { ?>
<?php foreach($student as $row ) { ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['class']; ?></td>
<td><?php echo $row['qq']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['tel']; ?></td>
<td><div align="center"><span><img src="edt.gif" width="16" height="16">编辑&nbsp;&nbsp;<img src="del.gif" width="16" height="16">删除</span></div></td>
</tr>
<?php } ?>
<?php }else{ ?>
<tr><td colspan='6'>暂无同学数据!</td></tr>
<?php } ?>
</table>
</body>
</html>

