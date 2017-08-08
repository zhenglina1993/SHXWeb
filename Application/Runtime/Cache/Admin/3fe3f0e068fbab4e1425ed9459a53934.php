<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>企业文化</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>

    <style type="text/css">
        div{
            width:100%;
        }
    </style>
        <link href="/Public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/Public/css/animate.min.css" rel="stylesheet">
    <link href="/Public/css/style.min.css?v=4.0.0" rel="stylesheet">
    
    
      <script src="/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/Public/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/Public/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="/Public/js/plugins/layer/layer.min.js"></script>
    <script src="/Public/js/hplus.min.js?v=4.0.0"></script>
    <script type="text/javascript" src="/Public/js/contabs.min.js"></script>
    <script src="/Public/js/plugins/pace/pace.min.js"></script>
</head>
<body>
<div>
    <h1>企业文化</h1>
    <script id="editor" type="text/plain" style="height:300px;"></script>
    <button type="button" onclick="request();" class="btn btn-w-m btn-info">保  存</button>
</div>
<!--<div id="btns">
    <div>
        <button onclick="getAllHtml()">获得html的内容</button>
        <button onclick="hasContent()">判断是否有内容</button>
    </div>
</div>-->


<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
   
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    
    function request(){
          alert(UE.getEditor('editor').getContent());
        $.post('updateQYWH',{data:UE.getEditor('editor').getContent()},function(data){
           if (data==200) {
    alert('保存成功');
}
        })
    }
    ue.addListener("ready", function () {  
               // editor准备好之后才可以使用  
               ue.setContent("<?php echo ($content); ?>");  
  
       }); 
</script>
</body>
</html>