<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>睿梵设计</title>
    <meta name="description" content="苏州睿梵工业设计有限公司主要服务有：苏州家电产品设计，工业结构设计，工业产品创意设计，工业外观设计公司，智能家电产品设计，仪器仪表设计，创意工业设计，联系电话：0512-68799367,苏州睿梵工业设计有限公司主要服务有：苏州家电产品设计，工业结构设计，工业产品创意设计，工业外观设计公司，智能家电产品设计，仪器仪表设计，创意工业设计，联系电话：0512-68799367" />
    <meta name="keywords" content="苏州工业结构设计|工业产品创意设计|工业设备设计|苏州工业外观设计公司|苏州智能家电产品设计|苏州仪器仪表设计|苏州创意工业设计,苏州工业结构设计,工业产品创意设计,工业设备设计,苏州工业外观设计公司,苏州智能家电产品设计,苏州仪器仪表设计,苏州创意工业设计" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/Public/Home/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/public.css">
    <style>
        .content{
            padding:0.3rem 0 0.5rem
        }
        .news-item{
            border-bottom:1px dashed #ccc;
            padding: 0.15rem 0;
            cursor: pointer;
        }
        .news-item img{
            width: 100%;
        }
        .item-title{
            color: #222;
            font-size: 0.18rem;
        }
        .item-des{
            padding-top: 0.1rem;
            color: #999;
            font-size: 0.14rem;
        }
        @media (max-width: 768px) {
            div.img{
                padding-left: 0;
            }
            .des{
                padding-right: 0.5rem;
            }
            .item-title{
                font-size: 0.24rem;
                line-height: 0.28rem;
                margin:0.05rem auto;
            }
            .item-des{
                font-size: 0.18rem;
                line-height: 0.25rem;
            }
        }
    </style>
</head>
<body>
<!--导航 -->
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('Index/index');?>" style="padding: 5px 0;"><img src="/Public/Home/imgs/logo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
               <li><a href="<?php echo U('Index/index');?>#aboutUs}">关于睿梵</a></li>
                <li><a href="<?php echo U('Index/advantage');?>">优势</a></li>
                <li><a href="<?php echo U('Index/product');?>">产品链</a></li>
                <li><a href="<?php echo U('Index/index');?>#case">案例</a></li>
                <li><a href="<?php echo U('News/news');?>">新闻</a></li>
                <li><a href="<?php echo U('Index/index');?>#footer">联系我们</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="content">
    <div id="content" class="typeSize">
        <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><a href="<?php echo U('News/detail','id='.$new['new_id']);?>">
                <div class="row news-item">
                    <div class="img col-xs-4"><img src=<?php echo (ltrim($new["new_pic"],'.')); ?>></div>
                    <div class="des col-xs-7 col-xs-offset-1">
                        <h3 class="item-title"><?php echo ($new["new_title"]); ?></h3>
                        <div class="item-des">
                            <?php echo ($new["new_intro"]); ?>
                        </div>
                    </div>
                </div>
            </a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>

<!--底部-->
<div class="footer">
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
</body>
<script id="news-main" type="text/html">
    {{each infos as value i}}
    <div class="row news-item">
        <div class="img col-xs-4"><img src={{value["cover-img"]}}></div>
        <div class="des col-xs-7 col-xs-offset-1">
            <h3 class="item-title">{{value.title}}</h3>
            <div class="item-des">
                {{value.des}}
            </div>
        </div>
    </div>
    {{/each}}
</script>
<script type="text/javascript" src="/Public/Home/libs/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Home/libs/bootstrap/js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="/Public/Home/libs/template-web.js"></script>
<script type="text/javascript" src="/Public/Home/script/publice.js"></script>
<script type="text/javascript" src="/Public/Home/script/news-list.js"></script> -->
</html>