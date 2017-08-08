<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Admin\Controller;
use Think\Controller;
/**
 * Description of NewsController
 *
 * @author Administrator
 */
class NewsController extends Controller {
    //put your code here
    function index($t){
        //t=1行业动态  2 集团新闻
        $News = D('News');
        $wher["category"]=$t;
        $list = $News->where($wher)->order('id desc')->select();
        $this->assign("list",$list);
        $this->assign("title",$t==1?"行业动态":"集团新闻");
        $this->assign("t",$t);
        $this->display('table');
    }
    
    function add(){
        $this->display('add');
    }
    
    function save($title,$source,$img,$content,$category) {
        $News=M("News");
        $News->create();
        $News->title=$title;
        $News->source=$source;
        $News->category=$category;
        $News->content=$content;
        $News->img=$img;
        $News->add();
        echo 0;
    }
    
    function del($id,$t){
        $News=M("News");
        $where["id"]=$id;
        $News->where($where)->delete();
        echo 200;
    }
}
