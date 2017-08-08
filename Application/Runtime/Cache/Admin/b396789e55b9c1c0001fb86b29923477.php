<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="/Public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/Public/css/animate.min.css" rel="stylesheet">
    <link href="/Public/css/style.min.css?v=4.0.0" rel="stylesheet">
    </head>
    <body>
        <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-archon">
                        <div class="panel-heading">
                            <h3 class="panel-title">服务器信息
                                <span class="pull-right">
                                    <a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
                                    <a  href="#"  class="panel-settings"><i class="icon-cog"></i></a>
                                    <a  href="#"  class="panel-close"><i class="icon-remove"></i></a>
                                </span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>名称</th>
                                        <th>参数</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                                        <td><?php echo ($key); ?></td>
                                        <td><?php echo ($v); ?></td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>                            
                        </div>
                    </div>
                </div>
    </body>
        <script src="/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/Public/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/Public/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="/Public/js/plugins/layer/layer.min.js"></script>
    <script src="/Public/js/hplus.min.js?v=4.0.0"></script>
    <script type="text/javascript" src="/Public/js/contabs.min.js"></script>
    <script src="/Public/js/plugins/pace/pace.min.js"></script>
</html>