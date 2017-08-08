function status(type, content, statuslj) {
    if ($("#status")) {
        $("#status").remove();
    }
    var lj = statuslj;
    if (statuslj == null) {
        lj = window.location.host+"/Public/status/";
    }
    if (type == "info") {
        ceinfo(content, lj);
    } else if (type == "result") {
        ceresult(content, lj);
    } else {
        ceerror(content, lj);
    }
}
var ceinfo = function (content, lj) {
    $("#ts").append("<div id=\"status\" class=\"status info\"><p class=\"close\"><a href=\"#\" title=\"关闭\">x</a></p><p><span>提示：</span>" + content + "</p></div>")
                .hide().show(200).click(function () { $("#status").hide(200) });
}
var ceresult = function (content, lj) {
    $("#ts").append("<div id=\"status\" class=\"status result\"><p class=\"close\"><a href=\"#\" title=\"关闭\">x</a></p><p><span>报告：</span>" + content + "</p></div>")
                .hide().show(200).click(function () { $("#status").hide(200) });
}
var ceerror = function (content, lj) {
    $("#ts").append("<div id=\"status\" class=\"status error\"><p class=\"close\"><a href=\"#\" title=\"关闭\">x</a></p><p><span>错误：</span>" + content + "</p></div>")
                .hide().show(200).click(function () { $("#status").hide(200) });
}