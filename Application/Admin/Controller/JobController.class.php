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
    
     function add(){
        $this->display('add');
    }
    
    function save($zw,$xz,$dd,$content,$lx) {
        $Job=M("Job");
        $Job->create();
        $Job->job=$zw;
        $Job->address=$dd;
        $Job->category=$lx;
        $Job->content=$content;
        $Job->money=$xz;
        $Job->add();
        echo 200;
    }
    
    function del($id){
        $Job=M("Job");
        $where["id"]=$id;
        $Job->where($where)->delete();
        echo 200;
    }
}
