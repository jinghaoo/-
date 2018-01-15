<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>睿梵设计后台管理系统</title>
  <meta name="description" content="这是一个 user 页面">
  <meta name="keywords" content="user">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/Public/assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/Public/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/Public/assets/css/admin.css">
   <script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/ueditor/ueditor.all.min.js"></script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
    UE.getEditor('intro_detail',{    //intro_detail为要编辑的textarea的id
        initialFrameWidth: 700,   //初始化宽度
        initialFrameHeight: 300,   //初始化高度
    });

</script>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>睿梵设计</strong> <small>后台管理</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">

      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
            <li>
                <a href="<?php echo U('Index/loginout');?>"><span class="am-icon-power-off"></span> 退出</a>
            </li>
        </ul>
      </li>
      <li><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>
<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar">
    <ul class="am-list admin-sidebar-list">
      <li><a href="<?php echo U('Main/index');?>"><span class="am-icon-home"></span> 首页</a></li>
      <li><a href="<?php echo U('Nav/nav');?>"><span class="am-icon-table"></span> 首页SEO管理</a></li>
      <li><a href="<?php echo U('Banner/ban');?>"><span class="am-icon-check"></span> 轮播图管理</a></li>
      <li><a href="<?php echo U('News/news');?>"><span class="am-icon-table"></span> 新闻管理</a></li>
      <li><a href="<?php echo U('Cases/cases');?>"><span class="am-icon-pencil-square-o"></span> 案例管理</a></li>
      <!-- <li><a href="<?php echo U('Contacts/contacts');?>" class="am-cf"><span class="am-icon-check"></span> 联系方式<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li> -->
      <li> <a href="<?php echo U('Main/savepass');?>"><span class="am-icon-file"></span> 修改密码 </a></li>
    </ul>

    <div class="am-panel am-panel-default admin-sidebar-panel">
      <div class="am-panel-bd">
        <p><span class="am-icon-bookmark"></span> 公告</p>
        <p>时光静好，与君语；细水流年，与君同。—— Refedine</p>
      </div>
    </div>
</div>
<!-- sidebar end -->


  <!-- content start -->
  <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">新闻管理</strong> / <small>添加</small></div>
    </div>
    <hr/>
    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
      </div>

      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form class="am-form am-form-horizontal" method="post" action="<?php echo U('add');?>" enctype="multipart/form-data">

         <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">序号 / Order</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-name" placeholder="" name="order">
             
            </div>
          </div>
       
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">标题 / Title</label>
            <div class="am-u-sm-9">
              <input type="text" id="new-title" placeholder="" name="new_title">
             
            </div>
          </div>

            <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">头部 / Html </label>
            <div class="am-u-sm-9">
              <textarea  name="header" id="header" cols="30" rows="10" style="width: 600px;height: 200px"></textarea>
             
            </div>
          </div>

          <div class="am-form-group" style="border: 1px ">
            <label for="user-email" class="am-u-sm-3 am-form-label">底部 / Html </label>
            <div class="am-u-sm-9">
              <textarea  name="footer" id="nav_footer" cols="30" rows="10"  style="width: 600px;height: 200px"></textarea>
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-email" class="am-u-sm-3 am-form-label">封面图(彩色) / Pic</label>
            <div class="am-u-sm-9">
              <input type="file" id="new-pic" name="new_pic" >
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-email" class="am-u-sm-3 am-form-label">封面图(灰色) / Pic</label>
            <div class="am-u-sm-9">
              <input type="file" id="new-pic" name="new_gpic" >
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">新闻简介 / Intro </label>
            <div class="am-u-sm-9">
              <textarea  name="new_intro" id="header" cols="30" rows="10" style="width: 600px;height: 150px"></textarea>
             
            </div>
          </div>
            
          <div class="am-form-group">
            <label for="user-phone" class="am-u-sm-3 am-form-label">内容 / Content</label>
            <div class="am-u-sm-9">
              <!--<input type="text" id="user-phone" placeholder="">-->
              <textarea  name="new_content" id="intro_detail" cols="30" rows="10"></textarea>
            </div>

          </div>
          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <button type="submit" class="am-btn am-btn-primary">保存修改</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- content end -->

</div>

<footer>
    <hr>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/polyfill/rem.min.js"></script>
<script src="assets/js/polyfill/respond.min.js"></script>
<script src="assets/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/Public/assets/js/jquery.min.js"></script>
<script src="/Public/assets/js/amazeui.min.js"></script>
<!--<![endif]-->
<script src="/Public/assets/js/app.js"></script>
</body>
</html>