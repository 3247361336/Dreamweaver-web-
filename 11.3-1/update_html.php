
<html>
 <head>
  <meta charset="utf-8">
  <title>员工信息列表</title>
  <style>
	.box{margin:20px;}
	.box .title{font-size:22px;font-weight:bold;text-align:center;}
	.box table{width:100%;margin-top:15px;border-collapse:collapse;font-size:12px;border:1px solid #B5D6E6;min-width:460px;}
	.box table th,.box table td{height:20px;border:1px solid #B5D6E6;}
	.box table th{background-color:#E8F6FC;font-weight:normal;}
	.box table td{text-align:center;}
	.search{float:right;font-size:12px;margin:20px;}
	.page{float:right;font-size:12px;margin:10px;}
	
	/*------------添加员工的样式-------------*/
	.add{float:right;font-size:12px;margin:10px;clear:both}
	
  </style>
</head>
<body>
<div class="box">
<form id="form1" name="form1" method="post" action="./empUpdate.php">
 <table width="200" border="1">
    <tr>
     <th>姓名</th>
     <td><label for="textfield"></label>
     <input type="text" name="name" id="name" value="<?php echo $lkf['name']?>"></td>
    </tr>
     <tr>
     <th>班级</th>
     <td><label for="textfield2"></label>
     <input type="text" name="class" id="class" value="<?php echo $lkf['class']?>"></td>
    </tr>
     <tr>
     <th>qq</th>
     <td><label for="textfield3"></label>
     <input type="text" name="qq" id="text" value="<?php echo $lkf['qq']?>"></td>
    </tr>
     <tr>
     <th>email</th>
     <td><label for="textfield4"></label>
     <input type="text" name="email" id="text" value="<?php echo $lkf['email']?>"></td>
    </tr>
     <tr>
     <th>tel</th>
     <td><label for="textfield5"></label>
     <input type="text" name="tel" id="text" value="<?php echo $lkf['tel']?>"></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
    <tr><th colspan="2" class="td-btn">
	<input type="submit" value="保存资料" class="button"/>
	<input type="reset" value="重新填写" class="button"/>
 </table>
</form>
</div>
</body>