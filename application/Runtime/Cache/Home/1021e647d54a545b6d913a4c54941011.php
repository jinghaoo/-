<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php echo (html_entity_decode($nav["header"])); ?>
    <link rel="stylesheet" type="text/css" href="/Public/Home/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/Home/libs/swiper/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/public.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css">
</head>
<body>
<!--导航 -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo U('Index/index');?>" style="padding: 5px 0;"><img src="/Public/Home/imgs/logo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#aboutUs">关于睿梵</a></li>
                    <li><a href="<?php echo U('Index/advantage');?>">优势</a></li>
                    <li><a href="<?php echo U('Index/product');?>">产品链</a></li>
                    <li><a href="#case">案例</a></li>
                    <li><a href="#news">新闻</a></li>
                    <li><a href="#footer">联系我们</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <!-- 顶部轮播图 -->
        <div class="swiper-container" id="bannerSwiper">
            <div class="swiper-wrapper">
                <?php if(is_array($bannerList)): $i = 0; $__LIST__ = $bannerList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
                        <img src="<?php echo (ltrim($vo['ban_pic'],'.')); ?>" alt="">
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
              <!--   <div class="swiper-slide">
                    <img src="/Public/Home/imgs/banner/banner2.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/Public/Home/imgs/banner/banner3.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/Public/Home/imgs/banner/banner4.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/Public/Home/imgs/banner/banner5.jpg" alt="">
                </div> -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!--关于我们-->
        <div id="aboutUs" class="aboutUs">
            <div class="typeSize clearfix">
                <img src="/Public/Home/imgs/index/aboutUs.png" class="hidden-xs col-sm-5" alt="">
                <div class="des col-xs-12 col-sm-offset-1 col-sm-6">
                    <h4>关于睿梵</h4>
                    <p>
                        苏州睿梵工业设计有限公司成立于2014年。是一支专业、有朝气的设计团队，专注于工业产品的设计研发服务。
                    </p>
                    <p>
                        睿梵设计服务集设计研究、产品设计、品牌策略及后端产业化服务于一体，涉及家电、智能家居、工业设备、医疗器械、智能机器人、UI设计等领域。涵盖交互设计，服务设计，以及从品牌战略、产品战略、产品线规划、产品定义到产品设计的系统服务。融合技术需求与市场运作，寻求可持续的创新解决方案，协力客户挖掘自身品牌潜在价值，引领产业新潮流。整合行业研究、用户体验、人机交互、品牌规划以及先进技术工艺方面的资源优势，为企业发展提供产品策略规划和完整的解决方案，为客户提供以品牌和产品竞争力为核心的综合解决方案。
                    </p>
                    <p>
                        随着工业设计行业的不断发展，面对激烈竞争与快速变化的经济环境，专注设计、坚持原创，是睿梵永恒不变的追求，重视创新设计的同时，睿梵更关注设计方案转化为商品的可行性，保证产品的实现，才能真正为客户创造增值空间，帮助客户提高企业竞争力。
                    </p>
                </div>
            </div>
        </div>
        <!--数量-->
        <div class="number">
            <div class="typeSize clearfix outBox">
               <div class="item">
                   <img src="/Public/Home/imgs/index/number/1.png" alt="">
                   <div class="line1">企业合作</div>
                   <div class="line2">100+</div>
               </div>
               <div class="item">
                   <img src="/Public/Home/imgs/index/number/2.png" alt="">
                   <div class="line1">产品销量</div>
                   <div class="line2">300万+</div>
               </div>
               <div class="item">
                   <img src="/Public/Home/imgs/index/number/3.png" alt="">
                   <div class="line1">经济价值</div>
                   <div class="line2">10亿+</div>
               </div>
            </div>
        </div>
        <!--案例-->
        <div id="case" class="case">
            <div class="title">
                案例
            </div>

            <div class="typeSize">
           
                <ul class="row">
               <!-- 
                    <li class="col-xs-6 col-md-3">
                        <div>
                            <a href="#">
                                <span style="background-image: url('/Public/Home/imgs/case/11@3x.png')"></span>
                            </a>
                        </div>
                    </li>
                    <li class="col-xs-6 col-md-3">
                        <div>
                            <a href="#">
                                <span style="background-image: url('<?php echo (ltrim($new["new_pic"],'.')); ?>')">地贝锂电吸尘器</span>
                                <p class="textCenter">地贝锂电吸尘器</p>
                            </a>
                        </div>
                    </li> -->
                    <?php if(is_array($cases)): $i = 0; $__LIST__ = $cases;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="col-xs-12 col-md-6">
                        <div>
                            <a href="<?php echo U('Cases/detail','id='.$vo['case_id']);?>">
                                <span style="background-image: url(<?php echo (ltrim($vo["case_pic"],'.')); ?>)">迎宾机器人</span>
                                <p class="textLeft"><?php echo ($vo["case_title"]); ?></p>
                            </a>
                        </div>
                    </li>
<!--               
                    <li class="col-xs-12 col-md-6">
                        <div>
                            <a href="#">
                                <span style="background-image: url('/Public/Home/imgs/case/21@3x.png')">电磁理疗仪</span>
                                <p class="textLeft">电磁理疗仪</p>
                            </a>
                        </div>
                    </li>
                    <li class="col-xs-6 col-md-3">
                        <div>
                            <a href="#">
                                <span style="background-image: url('/Public/Home/imgs/case/22@3x.png')">小狗除螨器</span>
                                <p class="textCenter">小狗除螨器</p>
                            </a>
                        </div>
                    </li>
                    <li class="col-xs-6 col-md-3">
                        <div>
                            <a href="#">
                                <span style="background-image: url('/Public/Home/imgs/case/23@3x.png')"></span>
                            </a>
                        </div>
                    </li>

                    <li class="col-xs-6 col-md-3">
                        <div>
                            <a href="#">
                                <span style="background-image: url('/Public/Home/imgs/case/31@3x.png')">角磨机</span>
                                <p class="textCenter">角磨机</p>
                            </a>
                        </div>
                    </li>
                    <li class="col-xs-6 col-md-3">
                        <div>
                            <a href="#">
                                <span style="background-image: url('/Public/Home/imgs/case/32@3x.png')"></span>
                            </a>
                        </div>
                    </li>
                    <li class="col-xs-12 col-md-6">
                        <div>
                            <a href="#">
                                <span style="background-image: url('/Public/Home/imgs/case/33@3x.png')">断路器</span>
                                <p class="textRight">断路器</p>
                            </a>
                        </div>
                    </li>

                    <li class="col-xs-12 col-md-6">
                        <div>
                            <a href="#">
                                <span style="background-image: url('/Public/Home/imgs/case/41@3x.png')"></span>
                            </a>
                        </div>
                    </li>
                    <li class="col-xs-6 col-md-3">
                        <div>
                            <a href="#">
                                <span style="background-image: url('/Public/Home/imgs/case/42@3x.png')"></span>
                            </a>
                        </div>
                    </li>
                    <li class="col-xs-6 col-md-3">
                        <div>
                            <a href="#">
                                <span style="background-image: url('/Public/Home/imgs/case/43@3x.png')">除螨手持二合一</span>
                                <p class="textCenter">除螨手持二合一</p>
                            </a>
                        </div>
                    </li>

                    <li class="col-xs-6 col-md-3">
                        <div>
                            <a href="#">
                                <span style="background-image: url('/Public/Home/imgs/case/51@3x.png')"></span>
                            </a>
                        </div>
                    </li>
                    <li class="col-xs-6 col-md-3">
                        <div>
                            <a href="#">
                                <span style="background-image: url('/Public/Home/imgs/case/52@3x.png')">扫地机器人</span>
                                <p class="textCenter">扫地机器人</p>
                            </a>
                        </div>
                    </li>
                    <li class="col-xs-12 col-md-6">
                        <div>
                            <a href="#">
                                <span style="background-image: url('/Public/Home/imgs/case/53@3x.png')">高压泵</span>
                                <p class="textLeft">高压泵</p>
                            </a>
                        </div> -->
                   <!--  </li> --><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

            </div>
          

        </div>
        <!--书法-->
        <div class="handwriting">
            <img src="/Public/Home/imgs/index/handwriting.png" alt="睿梵" style="width: 100%;">
        </div>
        <!--新闻-->
        <div id="news" class="news">
            <div class="title">新闻</div>
            <div class="typeSize row">
            <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><div class="newsItem clearfix col-md-3 col-sm-6 col-xs-12" data-colour="<?php echo (ltrim($new["new_pic"],'.')); ?>" data-gray="<?php echo (ltrim($new["new_gpic"],'.')); ?>">
                    <a href="<?php echo U('News/detail','id='.$new['new_id']);?>">
                        <div class="imgBox">
                            <div class="news-cover" style="background-image: url(<?php echo (ltrim($new["new_gpic"],'.')); ?>)"></div>
                        </div>
                        <div class="news-text">
                            <h3 class="newsTitle"><?php echo ($new["new_title"]); ?></h3>
                            <div class="newsContent">
                                <?php echo ($new["new_intro"]); ?>
                            </div>
                        </div>
                    </a>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            <a class="moreBtn" href="<?php echo U('News/news');?>"></a>
        </div>
        <!--合作伙伴-->
        <div class="partner">
            <div class="title">合作企业</div>
            <div class="typeSize row" style="overflow: hidden;">
                <div class="swiper-container partnerSwiper partnerSwiper1">
                    <div class="swiper-wrapper" >
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(1,this)"  onmouseleave="beNormal(1,this)" alt="1"></div>
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(2,this)"  onmouseleave="beNormal(2,this)" alt="2"></div>
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(3,this)"  onmouseleave="beNormal(3,this)" alt="3"></div>
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(4,this)"  onmouseleave="beNormal(4,this)" alt="4"></div>
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(5,this)"  onmouseleave="beNormal(5,this)" alt="5"></div>
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(6,this)"  onmouseleave="beNormal(6,this)" alt="6"></div>
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(7,this)"  onmouseleave="beNormal(7,this)" alt="7"></div>
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(8,this)"  onmouseleave="beNormal(8,this)" alt="8"></div>
                    </div>
                </div>
                <div class="swiper-container partnerSwiper partnerSwiper2">
                    <div class="swiper-wrapper" >
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(9,this)"  onmouseleave="beNormal(9,this)" src="/Public/Home/imgs/index/partner/9.png" alt="9"></div>
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(10,this)"  onmouseleave="beNormal(10,this)" src="/Public/Home/imgs/index/partner/10.png" alt="10"></div>
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(11,this)"  onmouseleave="beNormal(11,this)" src="/Public/Home/imgs/index/partner/11.png" alt="11"></div>
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(12,this)"  onmouseleave="beNormal(12,this)" src="/Public/Home/imgs/index/partner/12.png" alt="12"></div>
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(13,this)"  onmouseleave="beNormal(13,this)" src="/Public/Home/imgs/index/partner/13.png" alt="13"></div>
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(14,this)"  onmouseleave="beNormal(14,this)" src="/Public/Home/imgs/index/partner/14.png" alt="14"></div>
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(15,this)"  onmouseleave="beNormal(15,this)" src="/Public/Home/imgs/index/partner/15.png" alt="15"></div>
                        <div class="swiper-slide swiper-no-swiping partnerItem"><img onmouseover="highlight(16,this)"  onmouseleave="beNormal(16,this)" src="/Public/Home/imgs/index/partner/16.png" alt="16"></div>
                    </div>
                </div>

            </div>
        </div>

    </div>
<!--底部-->
<div id="footer" class="footer">
    <div class="typeSize row">
        <div class="footerLogo col-sm-4">
            <img style="width: 100%;" src="/Public/Home/imgs/footer/logo.png" alt="">
        </div>
        <div class="contactUs col-sm-6">
            <div class="footerTitle">联系我们</div>
            <div class="clearfix">
                <ul class="pull-left ul1">
                    <li><img class="icon" src="/Public/Home/imgs/footer/phone@3x.png" alt="">189 1353 7782</li>
                    <li><img class="icon" src="/Public/Home/imgs/footer/tel@3x.png" alt="">0512-68799367</li>
                    <li><img class="icon" src="/Public/Home/imgs/footer/qq@3x.png" alt="">3369906628</li>
                </ul>
                <ul class="pull-left ul2">
                    <li><img class="icon" src="/Public/Home/imgs/footer/web.png" alt="">www.redefinedesign.cn</li>
                    <li><img class="icon" src="/Public/Home/imgs/footer/email.png" alt="">redefinedesign@163.com</li>
                    <li><img class="icon" src="/Public/Home/imgs/footer/address@3x.png" alt="">苏州市高新区竹园路209号苏州创业园</li>
                </ul>
            </div>
        </div>
        <div class="focusUs col-sm-2">
            <div class="footerTitle">关注我们</div>
            <img src="/Public/Home/imgs/footer/code.jpg" alt="">
        </div>
    </div>

</div>

<div class="copyRight">
    版权所有： 苏州睿梵工业设计有限公司&nbsp;&nbsp;&nbsp;苏ICP备15056404号
</div>
<script type="text/javascript" src="/Public/Home/libs/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Home/libs/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/Home/libs/swiper/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/Public/Home/script/browserType.js"></script>
<script type="text/javascript" src="/Public/Home/script/publice.js"></script>
<script type="text/javascript" src="/Public/Home/script/index.js"></script>
<?php echo (html_entity_decode($nav["footer"])); ?>
</body>
</html>