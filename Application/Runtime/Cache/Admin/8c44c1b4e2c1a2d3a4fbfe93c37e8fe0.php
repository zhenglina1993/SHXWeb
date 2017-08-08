<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H+ 后台主题UI框架 - 数据表格</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/Public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="/Public/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="/Public/css/animate.min.css" rel="stylesheet">
    <link href="/Public/css/style.min.css?v=4.0.0" rel="stylesheet"><base target="_blank">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><?php echo ($title); ?></h5>
<!--                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>-->
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style='width: 40px;'>编号</th>
                                    <th>标题</th>
                                    <th>来源</th>
                                    <th>浏览量</th>
                                    <th>发布时间</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            <?php if(is_array($list)): foreach($list as $key=>$i): ?><tr class="gradeX">
                                    <td  class="center"><?php echo ($i["id"]); ?></td>
                                    <td><?php echo ($i["title"]); ?></td>
                                    <td><?php echo ($i["source"]); ?></td>
                                    <td class="center"><?php echo ($i["readnum"]); ?></td>
                                    <td class="center"><?php echo ($i["create_dt"]); ?></td>
                                </tr><?php endforeach; endif; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>编号</th>
                                    <th>标题</th>
                                    <th>来源</th>
                                    <th>浏览量</th>
                                    <th>发布时间</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/Public/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/Public/js/plugins/jeditable/jquery.jeditable.js"></script>
    <script src="/Public/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/Public/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="/Public/js/content.min.js?v=1.0.0"></script>
    <script>
    $(document).ready(function () {
        $(".table").dataTable(
                { "bSort": false}
            );  
    });

</script>
</body>

</html>