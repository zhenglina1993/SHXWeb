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
    
    function add($t){
        $this->assign("t", $t);
        $id=  I("id");
        if ($id!=NULL) {
            $this->assign("title", "编辑新闻");
            $Dao=D('News');
            $r=$Dao->where('id='.$id)->find();
            $this->assign("info", $r);
            $this->assign("newsId", $r["id"]);
        }
        else{
            $this->assign("newsId", 0);
            $this->assign("title","添加新闻");
        }
        $this->display('add');
    }
    
    function save($id,$title,$source,$content,$category) {
        
        $News=M("News");
        $News->create();
        $News->title=$title;
        $News->source=$source;
        $News->category=$category;
        $News->content=$content;
        $img=$_POST["img"];
        if ($img!=NULL) {
            $News->img=$img;
        }
        if ($id==0) {
             $News->add();
        }
       else{
           $News->id=$id;
           $News->save();
       }
        echo 0;
    }
    
    function del($id,$t){
        $News=M("News");
        $where["id"]=$id;
        $News->where($where)->delete();
        echo 200;
    }
}
