<?php if(!defined('APP')) die('error!')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>舍友信息列表</title>
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
    <div align="center">舍友信息列表</div>
    <form action="./showList.php"  method="GET">
    <div align="right">快速查询：<input type="text" name="keyword"/>
    <input type="submit" value="提交"/></div>
    </form>
 <table border="1">
 
	<tr>
		<th width="5%">ID</th>
		<th><a href="./showList.php?order=name&sort=<?php echo($order=='name')?$sort :'desc';?>">姓名</a></th>
		<th><a href="./showList.php?order=class&sort=<?php echo($order=='class')?$sort :'desc';?>">班级</a></th>
		<th>QQ</th>
		<th>邮件</th>
		<th>电话</th>
		<th width="25%">相关操作</th>
	</tr>
	<?php if(!empty( $lkf)) { ?>	
	<?php foreach($lkf as $row){ ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['class']; ?></td>
		<td><?php echo $row['qq']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['tel']; ?></td>
		<td><div align ="center"><span><img src="C:\wamp\www\2\images\edt.gif"width="16" height="16">编辑&nbsp;&nbsp;<img src="C:\wamp\www\2\images\del.gif"width="16" height="16">删除</span></div></td>
		</tr>
		<?php } ?>
		<?php }else{ ?>
				<tr><td colspan="6">暂无舍友数据!</td></tr>
		<?php } ?>
</table>
</div>
<div align="right"><?php echo $page_html;?></div>
</body>
</html>