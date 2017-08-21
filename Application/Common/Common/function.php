<?php
//获取项目封面
function getProductImg($id){
    $Dao=D('ProductImg');
    $where["pid"]=$id;
    $r=$Dao->where($where)->getField('img');
    echo $r;
}
