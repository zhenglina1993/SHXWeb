<?php

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
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller{
    //index
    public function index(){
        $this->display();
    }
    //企业介绍
    public function about(){
        $KV=D('Kv');
        $where["key"]='qyjs';
        $r=$KV->where($where)->find();
        $this->assign("info", $r);
        $this->display();
    }
    //企业文化
    public function about1(){
        $KV=D('Kv');
        $where["key"]='qywh';
        $r=$KV->where($where)->find();
        $this->assign("info", $r);
        $this->display();
    }
    public function about2(){
        $this->display();
    }
    public function about3(){
        $this->display();
    }
    public function contact(){
        $this->display();
    }
    public function idea(){
        $this->display();
    }
    //招聘岗位
    public function joinus(){
        $Job=D('Job');
        $r=$Job->order('id desc')->select();
        $count=$Job->count();
        $this->assign("list", $r);
        $this->assign("count", $count);
        $this->display();
    }
    //我要应聘
    public function joinusfrom(){
        $job=I('job');
        $this->assign("job", $job);
        $this->display();
    }
    //项目列表
    public function land(){
        $Dao=D('Product');
        $r=$Dao->order('\'order\' desc')->select();
      //  echo $Dao->getLastSql();
        $this->assign("list", $r);
        $this->display();
    }
    //项目详情
    public function landinfo(){
        $id=I("id");
        $Dao=D('Product');
        $where["id"]=$id;
        $info=$Dao->where($where)->find();
        $DaoImg=D('ProductImg');
        $where_img["pid"]=$id;
        $imgs=$DaoImg->where($where_img)->select();
        $this->assign("info", $info);
        $this->assign("imgs",$imgs);
        $this->display();
    }
    public function marketing(){
        $this->display();
    }
    public function medicine(){
        $this->display();
    }
    public function newinfo(){
        $this->display();
    }
    public function news(){
        $this->display();
    }
    public function newsindustry(){
        $this->display();
    }
    public function search(){
        $this->display();
    }
    public function travel(){
        $this->display();
    }
}
