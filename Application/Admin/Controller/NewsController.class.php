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
        $this->display('table');
    }
}
