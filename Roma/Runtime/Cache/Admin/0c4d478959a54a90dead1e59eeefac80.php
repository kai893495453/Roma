<?php if (!defined('THINK_PATH')) exit();?><div class="navbar">
    <div class="navbar-inner">
            <ul class="nav pull-right">
                <li>
                    <a href="#" role="button">
                        <i class="icon-user"></i> admin
                    </a>
                </li>
                <li><a href="logout.php" class="hidden-phone visible-tablet visible-desktop" role="button">Logout</a></li>
            </ul>
            <a class="brand" href="index.html"><span class="first">Blog</span> <span class="second">Admin</span></a>
    </div>
</div>
<div class="sidebar-nav">
    <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>控制面板</a>
    <ul id="dashboard-menu" class="nav nav-list collapse in">
        <li><a href="<?php echo U('admin/index/index');?>">首页</a></li>
        <li ><a href="<?php echo U('admin/product/productlist');?>">产品管理</a></li>
        <li ><a href="li">导航管理</a></li>
    </ul>
</div>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Blog Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="/Public/admin/lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="/Public/admin/stylesheets/theme.css">
    <link rel="stylesheet" href="/Public/admin/lib/font-awesome/css/font-awesome.css">

    <script src="/Public/admin/lib/jquery-1.7.2.min.js" type="text/javascript"></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    <div class="content">
        <div class="header">
            <h1 class="page-title">插入产品</h1>
        </div>
                <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active">插入产品</li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                    
<div class="btn-toolbar">
    <button class="btn btn-primary" onClick="location='<?php echo U('admin/product/productlist');?>'"><i class="icon-list"></i> 产品列表</button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <form method="post">
            <label>产品分类</label>
            <select name="cate" class="input-xlarge">
              <?php if(is_array($nav)): foreach($nav as $key=>$v): ?><option value="<?php echo ($v[cid]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
            </select>
            <label>产品标题</label>
            <input type="text" value="" class="input-xlarge" name="title">
            <label>产品描述</label>
            <input type="text" value="" class="input-xlarge" name="des">
            <label>产品详情</label>
            <textarea value="Smith" rows="3" class="input-xxlarge" name="content"></textarea>
            <label></label>
            <input class="btn btn-primary" type="submit" value="提交" />
        </form>
      </div>
  </div>

</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Delete Confirmation</h3>
  </div>
  <div class="modal-body">
    
    <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    <button class="btn btn-danger" data-dismiss="modal">Delete</button>
  </div>
</div>
  </body>
</html>




    <script src="/Public/admin/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>