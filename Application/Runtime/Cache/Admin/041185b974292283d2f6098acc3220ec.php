<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H+ 后台主题UI框架 - 登录</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/Public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <link href="/Public/css/animate.min.css" rel="stylesheet">
    <link href="/Public/css/style.min.css?v=4.0.0" rel="stylesheet"><base target="_blank">
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">H+</h1>
            </div>
            <h3>欢迎使用 H+</h3>
            <form class="m-t">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="用户名" required="" id='txt_login'>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" required="" id='txt_pwd'>
                </div>
                <button type="button" id='btn_login' onclick='login();' class="btn btn-red block full-width m-b">登 录</button>

            </form>
        </div>
    </div>
    <script src="/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/Public/js/bootstrap.min.js?v=3.3.5"></script>
    <script type="text/javascript">
        function login(){
           var login=$('#txt_login').val();
           var pwd=$('#txt_pwd').val();
           $.post("Admin/Index/login",{login:login,pwd:pwd},function(data){
               if (data==200) {
                 window.location.href="Admin/Index/main?login="+login;
            }
            else{
                     alert('用户名或密码错误');
            }
    });
        }
    </script>
</body>

</html>