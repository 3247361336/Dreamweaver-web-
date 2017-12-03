<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>系统信息</title>
</head>
<body>
   <h2>服务器信息列表</h2>
   <table>
   <tr><td>系统版本 </td><td><?php echo ($serverInfo['server_version']); ?></td></tr>
   <tr><td>apache版本 </td><td><?php echo ($serverInfo['apache_version']); ?></td></tr>
   <tr><td>php版本 </td><td><?php echo ($serverInfo['php_version']); ?></td></tr>
   <tr><td>脚本版本 </td><td><?php echo ($serverInfo['script_path']); ?></td></tr>
   <tr><td>系统时间 </td><td><?php echo ($serverInfo ['server_time']); ?></td></tr>
   </table>
</body>
</html>