<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>用户登录</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="/Public/Admin/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/Public/Admin/lib/font-awesome/css/font-awesome.css">

    <script src="/Public/Admin/lib/jquery-1.11.1.min.js" type="text/javascript"></script>

    

    <link rel="stylesheet" type="text/css" href="/Public/Admin/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/stylesheets/premium.css">

</head>
<body class=" theme-blue">

    <!-- Demo page code -->

    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/Public/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/Public/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/Public/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/Public/assets/ico/apple-touch-icon-57-precomposed.png">
  

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
   
  <!--<![endif]-->

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> 睿梵设计后台管理系统</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">

        </div>
      </div>
    </div>
    


        <div class="dialog">
    <div class="panel panel-default">
        <p class="panel-heading no-collapse">登录/Sign In</p>
        <div class="panel-body">
            <form method="post" action="<?php echo U(login);?>">
                <div class="form-group">
                    <label>用户名 / Username</label>
                    <input type="text" class="form-control span12" name="user_name">
                </div>
                <div class="form-group">
                <label>密码 / Password</label>
                    <input type="password" class="form-controlspan12 form-control" name="user_pass">
                </div>
                <input type="submit" name="" value="登录 / Sign In" class="btn btn-primary pull-right"></a>
               
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
    <p class="pull-right" style=""><a href="#" target="blank" style="font-size: .75em; margin-top: .25em;">Design by Portnine</a></p>
</div>



    <script src="/Public/Admin/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  
</body></html>