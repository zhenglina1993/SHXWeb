<?php
namespace Admin\Controller;
use Think\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author Administrator
 */
class IndexController extends Controller {
    //put your code here
    public function index() {
       // $this->assign("session",S("admin"));
        $this->display("login");
    }
     //登录
     public function login($login,$pwd) { 
        $p= strtoupper(md5($pwd)); 
        $Admin = D('admin');
        $condition = new \stdClass();
        $condition->login=$login;
        $condition->pwd=$p;
        $data =  $Admin->where($condition)->find();
        if ($data!=NULL) {
            session('admin',$login);
            echo 200;
        }
        else{
            echo 400;
        }
    }
    public function signout(){
        session('admin',null);
        $this->redirect('Index/index');
    }


//登录成功 进入首页
    public function main(){
        $s= session("admin");
        //echo 'sss---',$s;
        if ($s==NULL) {
             $this->display("login");
        }
        else{
       $this->display('index');       
        }
//$this->assign("username", $_GET["login"]);
        
    }
    
//服务器信息
    public function  info(){
        $info = array(
            '操作系统'=>PHP_OS,
            '运行环境'=>$_SERVER["SERVER_SOFTWARE"],
            '主机名'=>$_SERVER['SERVER_NAME'],
            'WEB服务端口'=>$_SERVER['SERVER_PORT'],
            '网站文档目录'=>$_SERVER["DOCUMENT_ROOT"],
            '浏览器信息'=>substr($_SERVER['HTTP_USER_AGENT'], 0, 40),
            '通信协议'=>$_SERVER['SERVER_PROTOCOL'],
            '请求方法'=>$_SERVER['REQUEST_METHOD'],
            'ThinkPHP版本'=>THINK_VERSION,
            '上传附件限制'=>ini_get('upload_max_filesize'),
            '执行时间限制'=>ini_get('max_execution_time').'秒',
            '服务器时间'=>date("Y年n月j日 H:i:s"),
            '北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
            '服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
            '用户的IP地址'=>$_SERVER['REMOTE_ADDR'],
            '剩余空间'=>round((disk_free_space(".")/(1024*1024)),2).'M',
        );
        $this->info=$info;
        $this->display('info');
    }
    //企业介绍
    public function qyjs(){
        $Kv = M('Kv');
        $where["key"]="qyjs";
        $r =  $Kv->where($where)->find();
        if ($r==NULL) {
            $Kv->create();
            $Kv->key="qyjs";
            $Kv->value="请在此输入企业介绍";
            $Kv->add();
             $this->assign("content","请在此输入企业介绍");
        }
        else{
            $this->assign("content",$r["value"]);
        }
        $this->display('qyjs');
    }
    public function updateQYJS($data){
        $Kv = M("Kv");
        $where["key"]="qyjs";
        $d["value"]=$data;
        $Kv->where($where)->save($d);
        echo 200;
    }
    //企业文化
      public function qywh(){
        $Kv = M('Kv');
        $where["key"]="qywh";
        $r =  $Kv->where($where)->find();
        if ($r==NULL) {
            $Kv->create();
            $Kv->key="qywh";
            $Kv->value="请在此输入企业文化";
            $Kv->add();
             $this->assign("content","请在此输入企业文化");
        }
        else{
            $this->assign("content",$r["value"]);
        }
        $this->display('qywh');
    }
    public function updateQYWH($data){
        $Kv = M("Kv");
        $where["key"]="qywh";
        $d["value"]=$data;
        $Kv->where($where)->save($d);
        echo 200;
    }
}
