$(function  () {
	headMenu ();
	footer ();
	sltPage ();
	phoneMenu ();
	if(getClientInfo()==true){
		menu()
	}
	else if(getClientInfo()==false){
		phoneClickmenu()
	}
})
//头部菜单
function headMenu () {
//	var pcmunu=$("<div class='headerWrap'>"+
//			"<div class='header'>"+
//			"<div class='logo fl' >"+
//			"</div>"+
//			"<div class='phoneMenu'>"+
//			"<span></span>"+
//			"<span></span>"+
//			"<span></span>"+
//			"</div>"+
//			"<div class='search fr'>"+
//			"<a href='search.html'></a>"+
//			"</div>"+
//			"<div class='headertab  fr' >"+
//			"<ul>"+
//			"<li><h2><a href='index.html'>首页</a></h2></li>"+
//			"<li>"+
//			"<h2 class='active'><a>关于我们</a></h2>"+
//			"<dl>"+
//			"<dd><a href='about.html'>企业介绍</a></dd>"+
//			"<dd><a href='about1.html'>企业文化</a></dd>"+
//			"<dd><a href='about2.html'>管理团队</a></dd>"+
//			"<dd><a href='about3.html'>企业年制</a></dd>"+
//			"</dl>"+
//			"</li>"+
//			"<li>"+
//			"<h2><a >新闻中心</a></h2>"+
//			"<dl>"+
//			"<dd><a href='news.html'>集团新闻</a> </dd>"+
//			"<dd><a href='newsindustry.html'>行业新闻</a> </dd>"+
//			"</dl>"+
//			"<li>"+
//			"<h2><a >产品服务</a></h2>"+
//			"<dl>"+
//			"<dd><a href='land.html'>森华信地产</a></dd>"+
//			"<dd><a href='marketing.html'>营销策划</a></dd>"+
//			"<dd><a href='travel.html'>生态旅游</a></dd>"+
//			"<dd><a href='medicine.html'>口腔医疗</a></dd>"+
//			"</dl>"+
//			"</li>"+
//			"<li>"+
//			"<h2><a>加入我们</a></h2>"+
//			"<dl>"+
//			"<dd><a href='idea.html'>人才理念</a> </dd>"+
//			"<dd><a href='joinus.html'>我要应聘</a> </dd>"+
//			"</dl>"+
//			"</li>"+
//			"<li><h2><a href='contact.html'>联系我们</a></h2></li>"+
//			"</ul>"+
//			"</div>"+
//	  		"</div> "+
//  			"</div>");
//	$("#pcMunu").html(pcmunu);
}
// 底部菜单
function footer () {
//	var footer=$("<div class='footerWrap'>"+
//		"<div class='footer'>"+
//		"<div class='footerTop '>"+
//		"<div class='footerLeft fl'>"+
//		"<img src='images/logo.png' alt=''>"+
//		"</div>"+
//		"<div class='footerCenter fl'>"+
//		"<dl>"+
//		"<dt>关于我们</dt>"+
//		"<dd><a href='about.html>企业介绍</a></dd>"+
//		"<dd><a href='about1.html'>企业文化</a></dd>"+
//		"<dd><a href='about2.html'>管理团队</a></dd>"+
//		"<dd><a href='about3.html'>企业年制</a></dd>"+
//		"</dl>"+
//		"<dl>"+
//		"<dt>新闻中心</a></dt>"+
//		"<dd><a href='news.html'>集团新闻</a></dd>"+
//		"<dd><a href='newsindustry.html'>行业新闻</a></dd>"+
//		"</dl>"+
//		"<dl>"+
//		"<dt>产品服务</a></dt>"+
//		"<dd><a href='land.html'>森华信地产</a></dd>"+
//		"<dd><a href='marketing.html'>营销策划</a></dd>"+
//		"<dd><a href='travel.html'>生态旅游</a></dd>"+
//		"<dd><a href='medicine.html'>口腔医疗</a></dd>"+
//		"</dl>"+
//		"<dl>"+
//		"<dt>加入我们</a></dt>"+
//		"<dd><a href='idea.html'>人才理念</a></dd>"+
//		"<dd><a href='joinus.html'>我要应聘</a></dd>"+
//		"</dl>"+
//		"</div>"+
//		"<div class='footerRight fr'>"+
//		"<p><span class='fl'>客服热线</span></p>"+
//		"<h2>0898-66788686</h2>"+
//		"<p><span class='fl'>公司地址</span><a href='http://map.baidu.com/?newmap=1&ie=utf-8&s=s%26wd%3D%E6%B5%B7%E5%8F%A3%E6%B5%B7%E5%8D%97%E6%A3%AE%E5%8D%8E%E4%BF%A1%E5%AE%9E%E4%B8%9A%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8' class='fr'>在地图上查看</a></p>"+
//		"<h3>海口市海甸岛四东路1号环岛大厦14楼</h3> "+
//		"</div>"+
//		"</div>"+
//		"<div class='Line'></div>"+
//		"<div class='footerBottom'>"+
//		"<p class='fl'><span>Copyright © 2017, XXXX Co., Ltd. All Rights Reserved. 海南森华信集团&海南森华信实业有限公司</span><span>琼ICP备13000622号-2 </span></p>"+
//		"<div class='fr language'>	"+	
//		"<a class='english'><i>英文</i></a>"+
//		"<a class='china'><i>中文</i></a>"+
//		"</div>"+
//		"</div>"+
//		"</div>"+
//		"</div>");	
//	$('#footer').html(footer);
}
//获取打开的是哪个页面
 function GetPage() {
//    var strUrl = window.location.href;
//    var lastIndex = strUrl.lastIndexOf('/');
//    var indexofhtml = strUrl.indexOf('.html');
//    var Page = strUrl.substring(lastIndex + 1, indexofhtml);
//    return Page;
return HEADER;
}
// 头部添加选中样式
function sltPage () {
	if(GetPage()==''||GetPage()=='index'){
		$(".headertab li").eq(0).addClass("active");
	}
	else if(GetPage()=='about'||GetPage()=='about1'||GetPage()=='about2'||GetPage()=='about3'){
		$(".headertab li").eq(1).addClass("active");
		if(GetPage()=='about'){
			$(".headertab li").eq(1).find("dl").children("dd").eq(0).addClass("slt");
		}
		else if(GetPage()=='about1'){
			$(".headertab li").eq(1).find("dl").children("dd").eq(1).addClass("slt");
		}
		else if(GetPage()=='about2'){
			$(".headertab li").eq(1).find("dl").children("dd").eq(2).addClass("slt");
		}
		else if(GetPage()=='about3'){
			$(".headertab li").eq(1).find("dl").children("dd").eq(3).addClass("slt");
		}
	}
	else if(GetPage()=='news'||GetPage()=='newinfo'||GetPage()=='newsindustry'){
		$(".headertab li").eq(2).addClass("active");
		if(GetPage()=='news'||GetPage()=='newinfo'){
			$(".headertab li").eq(2).find("dl").children("dd").eq(0).addClass("slt");
		}
		else if(GetPage()=='newsindustry'){
			$(".headertab li").eq(2).find("dl").children("dd").eq(1).addClass("slt");
		}
	}
	else if(GetPage()=='land'||GetPage()=='marketing'||GetPage()=='travel'||GetPage()=='medicine'||GetPage()=='landinfo'){
		$(".headertab li").eq(3).addClass("active");
		if(GetPage()=='land'||GetPage()=='landinfo'){
			$(".headertab li").eq(3).find("dl").children("dd").eq(0).addClass("slt");
		}
		else if(GetPage()=='marketing'){
			$(".headertab li").eq(3).find("dl").children("dd").eq(1).addClass("slt");
		}
		else if(GetPage()=='travel'){
			$(".headertab li").eq(3).find("dl").children("dd").eq(2).addClass("slt");
		}
		else if(GetPage()=='medicine'){
			$(".headertab li").eq(3).find("dl").children("dd").eq(3).addClass("slt");
		}
	}
	else if(GetPage()=='idea'||GetPage()=='joinus'||GetPage()=='joinusfrom'){
		$(".headertab li").eq(4).addClass("active");
		if(GetPage()=='idea'){
			$(".headertab li").eq(4).find("dl").children("dd").eq(0).addClass("slt");
		}
		else if(GetPage()=='joinus'||GetPage()=='joinusfrom'){
			$(".headertab li").eq(4).find("dl").children("dd").eq(1).addClass("slt");
		}
	}
	if(GetPage()=='contact'){
		$(".headertab li").eq(5).addClass("active");
	}
}
// pc头部菜单显示
function menu() {
	$(".headertab ").mouseover(function  () {
		$(".headertab dl").show();
	});
	$(".headertab ").mouseleave(function  () {
		$(".headertab dl").hide();
	})
}
// 手机头部菜单显示
function phoneClickmenu() {
	$(".headertab li").bind("click",function  () {
		if($(this).addClass("active")){
			$(".headertab li").removeClass("active")
			$(this).addClass("active")
		}
		else{
			$(".headertab li").removeClass("active")
			$(this).addClass("active");
			
		}
	})
}
// 企业介绍tab切换
function comptab () {
	var $li = $('#aboutTab li');
	var $count = $('#aboutTabcount .aboutmod2Tab');
	$("#aboutTab li").click(function  () {
		var $this = $(this);
		var $t = $this.index();
		$li.removeClass();
		$this.addClass('active');
		$count.css('display','none');
		$count.eq($t).css('display','block');
	})
}
// 营销策划tab切换
function marktab () {
	var $li = $('#marketTab p');
	var $count = $('#marketCount .tab1');
	$('#marketTab p').click(function  () {
		var $this = $(this);
		var $t = $this.index();
		$li.removeClass();
		$this.addClass('Active');
		$count.css('display','none');
		$count.eq($t).css('display','block');
	})
}
//生态旅游展示
function travelShow () {
	$('.ravelWrapflex').click(function  () {
		$(this).offsetParent(".travelWrap1box").attr("style","height:640px;background-color:rgba(0,0,0,0);")
		$(this).hide();
		$(this).prev(".travelWrap1Topshow").show();
		$(this).parents(".travelWrap1boxwrap").next(".travelWrap1boxTxt").hide();

	})
	$(".travelWrap1Topshow").click(function  () {
		
		$(this).hide();
		$(this).parents(".travelWrap1box").attr("style","height:368px;background-color:rgba(0,51,25,0.6);");
		$(this).next(".ravelWrapflex").show();
		$(this).parents(".travelWrap1boxwrap").next(".travelWrap1boxTxt").show();

	})
}
// 我要应聘
function joinshow () {
	$(".workJob").click(function  () {
		var box=$(this).parents("tr").next("tr").find('.workInfo');
	
		if(box.hasClass("Active")){
			box.removeClass("Active").addClass("hide").hide();
		}
		else{
			$('.workInfo').hide();
			box.addClass("Active").removeClass("hide").show();
		}
	})
}


// 手机端菜单显示
function phoneMenu () {
	$(".phoneMenu").bind("click",function  () {
		
		if($(this).hasClass("Active")){
			$(this).removeClass("Active");
			$(".headertab").hide();
			$(".zhezhao").remove();
		}
		else{
			$("body").append("<div class='zhezhao'></div>");
			$(this).addClass("Active");
			$(".headertab").show();
		}
	})


}


// 判断是否是手机端还是pc端
function getClientInfo(){  
  var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    return flag;
}





