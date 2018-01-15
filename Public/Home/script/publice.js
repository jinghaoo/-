// 获取传递参数
function getUrlParam(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
    var r = window.location.search.substr(1).match(reg);  //匹配目标参数
    if (r != null) return unescape(r[2]); return null; //返回参数值
}
$(".navbar-collapse").click(function(){
    $(".navbar-collapse").css("height","1px");
    $("#example-navbar-collapse").attr("class", "navbar-collapse collapse");
})
// 监听窗口滚动改变导航透明度
$(function() {
    var p = 0;
    t = 0;
    $(window).scroll(function (e) {
        p = $(window).scrollTop();
        if (t <= p) {
            $(".navbar").css("opacity", (600 - p) / 600);
            if(p>=600){
                $(".navbar").css("display","none");
            }else{
                $(".navbar").css("display","block");
            }
        }
        else {
            $(".navbar").css("display","block");
            $(".navbar").css("opacity", 1);
        }
        t = p;
    });
    // 清楚导航栏首页选中状态
    function clearAtive(){
        $(".navbar .nav li a").each(function(i,elem){
            $(elem).parent().attr("class","");
        })
    };
    var hashValue = location.hash;
    var pathname = location.pathname;
    if(pathname == "/index.html"){
        clearAtive();
        console.log("a1");
    }
    if(hashValue && hashValue != "#"){
        console.log(hashValue);
        var activeIndex;
        $(".navbar .nav li a").each(function(i,elem){
            if($(elem).attr("href") == hashValue){
                $(elem).parent().addClass("active");
                activeIndex = i;
            }
        })
    }
    // 监听哈希值的变化
    $(window).on("hashchange", function() {
        hashValue = location.hash;
        console.log("bbbb");
        if(hashValue && hashValue != "#"){
            console.log(hashValue);
            var activeIndex;
            $(".navbar .nav li a").each(function(i,elem){
                if($(elem).attr("href") == hashValue){
                    clearAtive();
                    $(elem).parent().addClass("active");
                    console.log($(elem).parent());
                    activeIndex = i;
                }
            })
        }
    });
})