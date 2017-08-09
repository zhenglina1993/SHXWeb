<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Admin\Controller;
use Think\Controller;
/**
 * Description of ProductController
 *
 * @author Administrator
 */
class ProductController extends Controller {
    
    public function index(){
        $Product=D('Product');
        $list=$Product->order('id desc')->select();
        $this->assign('list',$list);
        $this->display('table');
    }

    public function add(){       
        $this->display();
    }
    
    
    //增加/修改项目
    public function update($t){
        //t: 1 add 2update
        $Product=D('Product');
        if (t==1) {
            $Product->create();
            $Product->content=$_POST["content"];
            $Product->add();
            //echo $_POST["imgs"];
            //TODO: add imgs
            echo 0;;
        }
        else{
            echo 400;
        }
       
//        $Product->name=$_POST["name"];
//        $Product->address=$_POST["address"];
//        $Product->area_yd=$_POST["area_yd"];
//        $Product->area_jz=$_POST["area_jz"];
//        $Product->rongji=$_POST["rongji"];
//        $Product->lvhua=$_POST["lvhua"];
//        $Product->category=$_POST["category"];
//        $Product->content=$_POST["content"];
//        $Product->sell=$_POST["sell"];
       
    }
    //修改排序
    public function order($id,$order){
        $Product=M('Product');
        $Product->order=$order;
        $where["id"]=$id;
        $Product->where($where)->save();
    }
    //删除
    public function del($id){
        $Product=D('Product');
        $where["id"]=$id;
        $Product->where($where)->delete();
        $Img=D('ProductImg');
        $where_img["pid"]=$id;
        $Img->where($where_img)->delete();
        echo 200;
    }
}
