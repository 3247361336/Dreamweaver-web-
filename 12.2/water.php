<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <title>图片添加水印功能</title>
 <style>
   body{background:#F1F1F1;font-family:"华文中宋";}
  img{width:200px;padding:0px;boder:1px soild #999;padding:2px;}
  table{boder-collapse:separate;boder:1px soild #f0f0f0;width:350px;text-align:center;margin:0 auto;background:#F1F1F1;}
</style>
 </head>
<body>
<?php 
/**
 * 添加水印功能
 *  @param string $source 原图
 *  @param string $water 水印图片
 *  @param int $postion  添加水印位置，默认9，右下角
 *  @param string $path  水印图片存放路径，默认为空，表示在当前目录
 */

function watermark($source,$water,$postion = 1,$path=''){
	$waterPrefix='water_';
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
   list($src_w,$src_h,$src_mime)=$src_info;
   list($wat_w,$wat_h,$wat_mime)=$water_info;
   $src_create_fname =$from[$src_info['mime']];
   $wat_create_fname =$from[$water_info['mime']];
   $src_img=$src_create_fname($source);
   $wat_img=$wat_create_fname($water);
   switch($postion){
   	case 1://左上
   		$src_x=0;
   		$src_y=0;
   	case 2://右上
   		$src_x=$src_w-$wat_w;
   		$src_y=0;
   	case 3://中间
   		$src_x=($src_w-$wat_w)/2;
   		$src_y=($src_h-$wat_h)/2;
   	case 4://左下
   		$src_x=0;
   		$src_y=$src_h-$wat_h;
   	default://右下
   		$src_x=$src_w-$wat_w;
   		$src_y=$src_h-$wat_h;
   		break;
   }
   /**
    * 将水印图片添加到目标图标上
    * @param resource $src_img 原图像资源
    * @param resource $wat_img 水印图像资源
    * @param int $src_x 水印图片在原图像中的横坐标
    * @param int $src_y 水印
    * @param int 0,0
    * @param int $wat_w
    * @param int $wat_h
    */
   //imagecopy($src_img, $wat_img, $src_x, $src_y, 0, 0, $wat_w, $wat_h);
   imagecopymerge($src_img,$wat_img,$src_x,$src_y,0,0,$wat_w,$wat_h,50);
   $waterfile=$path.$waterPrefix.$source;
   $generate_fname=$to[$src_info['mime']];
   if($generate_fname($src_img,$waterfile)){
   	echo"<table cellspacing='10'><tr><th colspan='2'> 为图片添加水印</th ></tr>";
   	echo"<tr><td>原图像:</td><td><img src='".$source."'/></td></tr>";
   	echo"<tr><td>加水印后:</td><td><img src='".$waterfile."'/></td></tr></table>";
   }else{
   	echo "";
   	return false;
   }
  
}
   $source='1.jpg';
   $water='2.jpg';
   watermark($source,$water);

?>
</body>
</html>