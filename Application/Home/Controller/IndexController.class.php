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
        $Dao=D('Product');
        $r=$Dao->order('\'order\' desc')->limit(6)->select();
        $this->assign("list", $r);
         $DaoNews=D('News');
        $news=$DaoNews->order('id desc')->limit(4)->select();
        $this->assign("news", $news);
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
    //新闻详情
    public function newinfo(){
        $id=I("id");
        $Dao=D('News');
        $where["id"]=$id;
        $Dao->where($where)->setInc('readnum');
        $r=$Dao->where($where)->find();
        $pre=$Dao->where('id>'.$id.' and category=(select category from jh_news where id='.$id.')')->order('id')->find();
        $next=$Dao->where('id<'.$id.' and category=(select category from jh_news where id='.$id.')')->order('id desc')->find();
       // echo $Dao->getLastSql();
        $this->assign("info", $r);
        $this->assign("pre", $pre);
        $this->assign("next", $next);
        $this->display();
    }
    //集团资讯
    public function news(){
        $p=I('p');
        $s=I('s');
        if ($p==NULL) {
            $p=1;
        }
        if ($s==NULL) {
            $s=100;
        }
        $Dao=D('News');
        $r=$Dao->where('category = 2')->order('id desc')->limit(($p-1)*$s.','.($p*$s))->select();
        $this->assign("list", $r);
        $this->display();
    }
    //行业资讯
    public function newsindustry(){
         $p=I('p');
        $s=I('s');
        if ($p==NULL) {
            $p=1;
        }
        if ($s==NULL) {
            $s=100;
        }
        $Dao=D('News');
        $r=$Dao->where('category = 1')->order('id desc')->limit(($p-1)*$s.','.($p*$s))->select();
        $this->assign("list", $r);
        $this->display();
    }
    public function search(){
        $this->display();
    }
    public function travel(){
        $this->display();
    }
}
