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


	$("#search").bind("click",function  () {
		if($(this).hasClass("Active")){
			$(".headerWrap").attr("style","");
			$(this).removeClass("Active");
			$(".headertab").show();
			$(".searchinput").remove();
			$(".logo").attr("style",'');
		}
		else{
			$("#search").removeClass("Active");
			$(this).addClass("Active");
			$(".headerWrap").attr("style","background:#003319;");
			$(".headertab").hide();
			$(".logo").attr("style","background-image:url(/Public/web/images/logo3.png);");
			$(this).after("<input type='text' class='searchinput' placeholder='请输入搜索关键词' />");
			
			$(".searchinput").bind("keydown",function  (argument) {
				var searchKeyword=$(".searchinput").val();
				if(argument.keyCode == "13")
				 {
				   	window.location.href='/index.php/Home/Index/search?keywords='+searchKeyword+''
				 }
			})
		}
	})

	$(".hoverCode").mouseover(function(){$(".hoverCodeimg").show()})
	$(".hoverCode").mouseleave(function(){$(".hoverCodeimg").hide()})
	

})
//头部菜单
function headMenu () {
}
// 底部菜单
function footer () {

}
//获取打开的是哪个页面
 function GetPage() {
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
			$(this).addClass("active");
			box.removeClass("Active").addClass("hide").hide();
		}
		else{
			$('.workInfo').hide();
			$(".workJob").removeClass("active");

			$(this).addClass("active");
			
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




