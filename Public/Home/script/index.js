// 顶部轮播图
var swiper = new Swiper('#bannerSwiper', {
    loop:true,
    lazyLoading : true,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    autoplayDisableOnInteraction:false,
    autoplay:3000,
    speed:300,
    autoHeight: true
});
// 案例放大
$(".case ul li a").on("mouseover",function(){
    var index = $(".case ul li a").index(this);

    $($(".case ul li a span")[index]).css("transform","scale(1.4)");
})
$(".case ul li a").on("mouseleave",function(){
    var index = $(".case ul li a").index(this);
    $($(".case ul li a span")[index]).css("transform","scale(1)");
})
// 案例跳转详情页
$(".case li a").on("click",function(){
    var index = $(".case ul li a").index(this);
    $(location).attr('href', '/view/product-detail.html?id='+index);
})

// 新闻高亮
$("#news .newsItem").mouseover(function(){
    var u = $(this).attr('data-colour');
    $(this).find(".news-cover").css("background-image","url(" + u + ")");
})
$("#news .newsItem").mouseout(function(){
    var u = $(this).attr('data-gray');
    $(this).find(".news-cover").css("background-image", "url("+ u +")");
})

// 合作企业
//轮播
var partnerSwiper1 = new Swiper('.partnerSwiper1', {
    loop:true,
    paginationClickable: true,
    slidesPerView: $(window).width()>768?4:2,
    noSwiping : true,
    autoplay:1500,
    speed:300,
    spaceBetween: 30
});
var partnerSwiper2 = new Swiper('.partnerSwiper2', {
    loop:true,
    lazyLoading : true,
    paginationClickable: true,
    slidesPerView: $(window).width()>768?4:2,
    noSwiping : true,
    autoplay:3000,
    speed:300,
    spaceBetween: 30
});
// 第一二行轮播图交错执行
window.setTimeout(function(){
    partnerSwiper1.params.autoplay=3000;
},1500)
var highlight,beNormal;
function whenSmall(){
    highlight = function(){};
    beNormal = function(){};
    $($(".partner .partnerItem img")).each(function(index,elem){
        $(this).attr("src","/Public/Home/imgs/index/partner/"+ $(this).attr("alt") +"hover.png")
    })
};
function whenBig(){
    highlight = function(index,dom){
        if(index<=8){
            partnerSwiper1.stopAutoplay();
        }else{
            partnerSwiper2.stopAutoplay();
        }
        $(dom).attr('src','/Public/Home/imgs/index/partner/'+ index +'hover.png');
    };
    beNormal = function(index,dom){
        if(index<=8){
            partnerSwiper1.startAutoplay();
        }else{
            partnerSwiper2.startAutoplay();
        }
        $(dom).attr('src','/Public/Home/imgs/index/partner/'+ index +'.png');
    };
    $($(".partner .partnerItem img")).each(function(index,elem){
        $(this).attr("src","/Public/Home/imgs/index/partner/"+ $(this).attr("alt") +".png")
    })
};
if($(window).width()<768){
    whenSmall();
}else{
    whenBig();
}
$(window).resize(function(){
    var windowWidth = $(window).width();
    if(windowWidth<768){
        partnerSwiper1.params.slidesPerView = 2;
        partnerSwiper2.params.slidesPerView = 2;
        whenSmall();
    }else{
        partnerSwiper1.params.slidesPerView = 4;
        partnerSwiper2.params.slidesPerView = 4;
        whenBig();
    }
})
