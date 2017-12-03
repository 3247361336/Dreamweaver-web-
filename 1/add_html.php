<?php if(!defined('APP')) die('error');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>添加员工</title>
</head>>
<body>
<div>
    <hl>添加员工</hl>
    <form method="post" action="./emAdd.php">
    <table>
      <tr><th>姓名：</th><td><input type="text" name="name"/></td></tr>
      <tr><th>班级：</th><td><input type="text" name="class"/></td></tr>
      <tr><th>QQ：</th><td><input type="text" name="qq"/></td></tr>
      <tr><th>email：</th><td><input type="text" name="email"/></td></tr>
      <tr><th>tel：</th><td><input type="text" name="tel"/></td></tr>
      <tr><td colspan='2'>
      <input type='submit' value="保存资料" />
       <input type='reset' value="重新填写" />
       </td></tr>
       </table>
       </form>
</div>
</body>
</html>