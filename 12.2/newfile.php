<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title>图片添加水印</title>
  	<style>
		body{background:#F1F1F1;font-family:"华文中宋";}
		img{width:200px;padding:0px;border:1px solid #999;padding:2px;}
		table{border-collapse:separate; border:1px solid #f0f0f0;width:350px;text-align:center;margin:0 auto;background:#F1F1F1;}
	</style>
 </head>
<body>
<?php
function watermark($source,$water,$postion=1,$path=''){
	//设置水印图片名称前缀
	$waterPrefix='water_';
	//图片类型和对应创建画布资源的函数名
	$from=array(
		'image/gif'=>'imagecreatefromgif',
		'image/png'=>'imagecreatefrompng',
		'image/jpeg'=>'imagecreatefromjpeg'
	);
	
	$to=array(
		'image/gif'=>'imagegif',
		'image/png'=>'imagepng',
		'image/jpeg'=>'imagejpeg'
	);

	$src_info=getimagesize($source);
	$water_info=getimagesize($water);
	
	list($src_w,$src_h,$src_mine)=$src_info;
	list($wat_w,$wat_h,$wat_mine)=$water_info;
	
	$src_create_fname=$from[$src_info['mime']];
	$wat_create_fname=$from[$water_info['mime']];
	
	$src_img=$src_create_fname($source);
	$wat_img=$wat_create_fname($water);
	
	switch ($postion){
		case 1:
			$src_x=0;
			$src_y=0;
			break;
		case 2:
			$src_x=$src_w-$wat_w;
			$src_y=0;
			break;
		case 3:
			$src_x=($src_w-$wat_w)/2;
			$src_y=($src_h-$wat_h)/2;
			break;
		case 4:
			$src_x=0;
			$src_y=$src_h-$wat_h;
			break;
	}
	
	//imagecopy($src_img,$wat_img,$src_x,$src_y,0,0,$wat_w,$wat_h);
	imagecopymerge($src_img,$wat_img,$src_x,$src_y,0,0,$wat_w,$wat_h,50);
	$waterfile=$path.$waterPrefix.$source;
	
	$generate_fname=$to[$src_info['mime']];
	
	if($generate_fname($src_img,$waterfile)){
		
		echo "<table cellspacing='10'><tr><th colspan='2'>为图片添加水印</th></tr>";
		echo "<tr><td>原图像：</td><td><img src='".$source."'/></td></tr>";
		echo "<tr><td>加水印后：</td><td><img src='".$waterfile."'/></td></tr></table>";
	}else{
		echo "输出水印图片到指定目录出错";
		return false;
	}	
}

$source='1.jpg'; 
$water='2.jpg';
watermark($source,$water);

?>
 </body>
</html>
