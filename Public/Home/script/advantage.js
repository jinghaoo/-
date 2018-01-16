/**
 * Created by user on 2017/11/10.
 */
// 滚动动画
var executeAnimation = function(dom,cssNmae,offset){
    $(dom).each(function(){
        var a,b,c,d;
        a = $(this).offset().top;//元素相对于窗口的距离
        console.log(a);
        b = $(window).scrollTop();//窗口已滚动的距离
        c = $(document).height();//整个文档的高度
        d = $(window).height();//浏览器窗口的高度
        if(b+d>a+200){
            console.log($(this).find(".iconLeft"));
            $(this).find(".scroll-left-in").addClass("fadeInLeft");
            $(this).find(".scroll-right-in").addClass("fadeInRight");
            $(this).find(".scroll-fade").addClass("fadeIn");
            $(this).find(".scroll-fade").addClass("animated");
        }
    });

};

$(document).ready(function() {
    $("section").each(function(){
        var a,b,c,d;
        a = $(this).offset().top;//元素相对于窗口的距离
        console.log(a);
        b = $(window).scrollTop();//窗口已滚动的距离
        c = $(document).height();//整个文档的高度
        d = $(window).height();//浏览器窗口的高度
        if(b+d>a){
            console.log($(this).find(".iconLeft"));
            $(this).find(".scroll-left-in").addClass("fadeInLeft");
            $(this).find(".scroll-right-in").addClass("fadeInRight");
            $(this).find(".scroll-fade").addClass("fadeIn");
        }
    });
    $(window).scroll(function(e){
        executeAnimation("section",'xz',100);
    });
})
