<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<html>
<head>
    <meta  charset="utf-8">
    <title>学生管理系统</title>
   <link href="_PUBLIC_/css/Style.css" rel="stylesheet">
</head>
<body>
<div class="top">
     <div class="top-box">
           <hl class="top-box-logo">学生管理系统</hl>
           <div class="top-box-nav">        
                                欢迎你！<a href="#">我的信息</a><a href="#">密码修改</a><a href="#">安全退出</a>
           </div>
        </div>
      </div>
 <div class="main">
       <div class="main-left">
        <div class="main-left-nav">
         <div class="main-left-nav-head">
     <strong>院系专业</strong><div></div>
     </div>
     <a href="_MODULE_/Major/showList">专业列表</a>
     <a href="_MODULE_/Major/add">添加专业</a>
     <div class="main-left-nav-head">
     <strong>学生管理</strong>
     </div>
     <div class="main-left-nav-list">
     <div><a href="_MODULE_/Student/showList">学生列表</a></div>
     <div><a href="_MODULE_/Student/add">添加学生</a></div>
     <div><a href="_MODULE_/Student/addAll">批量添加</a></div>
     </div>
     <div class="main-left-nav-head">
     <strong>系统设置</strong><div></div>
     </div>
     <div class="main-left-nav-list">
     <div><a htef="#">修改密码</a></div>
     </div>
     
     <div class="main-left-nav-head">
     <strong>教学系统</strong><div></div>
        </div>
     </div>
</div>
<div class="main-right">
</body>
</html>



<table>
   <tr><th>专业</th><th>班级</th><th>操作</th></tr>
   <?php if(!empty($major_info)): if(is_array($major_info)): foreach($major_info as $key=>$v): if(is_array($v["Class"])): foreach($v["Class"] as $k=>$vv): ?><tr>
                <?php if(($k == 0)): ?><td rowspan="<?php echo (count($v["Class"])); ?>"><?php echo ($v["major_name"]); ?></td><?php endif; ?>
                <td><a href="_MODULE_/Student/showList/class_id/<?php echo ($vv["class_id"]); ?>"><?php echo ($vv["class_name"]); ?></a></td>
                <td><div>编辑 删除</div></td>
                </tr><?php endforeach; endif; endforeach; endif; ?>
               <?php else: ?>
               <tr><td>查询的结果不存在！</td></tr><?php endif; ?>
</table>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
 </div>
     <div class="main-footer">
      <div>学习系统欢迎应用</div>
</div>
</div>
</body>
</html>