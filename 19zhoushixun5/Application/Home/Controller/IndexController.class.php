<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $version_arr=explode(' ',$_SERVER['SERVER_SOFTWARE']);
        $serverInfo['apache_version']=$version_arr[0];
        $serverInfo['server_version']=$version_arr[1];
        $serverInfo['php_version']=$version_arr[2];
        $serverInfo['server_time']=date('Y-m-d H:i:s',time());
        $serverInfo['script_path']=$_SERVER['SCRIPT_FILENAME'];
        $this->assign('serverInfo',$serverInfo);
        $this->display();
    }
}