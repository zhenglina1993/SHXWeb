<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Admin\Controller;
use Think\Controller;

/**
 * Description of JobController
 *
 * @author zhangfengyang
 */
class JobController extends Controller {
    
    function index(){
        $Job = D('Job');
        //$where["category"]=$t;
        $list = $Job->order('id desc')->select();
        $this->assign("list",$list);
        //$this->assign("title",$t==1?"行业动态":"集团新闻");
        $this->display('table');
    }
    
    function apply(){
        $Apply=D('Apply');
        $where["state"]=0;
        $list=$Apply->where($where)->order('id desc')->select();
        $this->assign("list",$list);
        $this->display();
    }
            
     function add(){
         $this->assign("title", "新增职位");
        $this->display('add');
     }
     
     function edit(){
          $id=  I("id");
        if ($id==NULL) {
            $this->assign("title","新增职位");
        }
        else{
             $this->assign("title","编辑职位");
          $Job=M("Job");
         $where["id"]=$id;
         $r=$Job->where($where)->find();
         $this->assign("job",$r);
        }
        $this->display('add');
       
     }
             
    function save($zw,$zw_en,$xz,$dd,$dd_en,$content,$content_en,$lx) {
        $id=$_GET["id"];
        $Job=D("Job");
        $Job->create();
        $Job->job=$zw;
        $Job->job_en=$zw_en;
        $Job->address=$dd;
        $Job->address_en=$dd_en;
        $Job->category=$lx;
        $Job->content=$content;
        $Job->content_en=$content_en;
        $Job->money=$xz;
        if ($id==NULL) {    
            $Job->add(); 
        }
        else{
            $Job->id=$id;
            $Job->save();
        }
        
        echo 200;
    }
    
    function del($id){
        $Job=M("Job");
        $where["id"]=$id;
        $Job->where($where)->delete();
        echo 200;
    }
}
