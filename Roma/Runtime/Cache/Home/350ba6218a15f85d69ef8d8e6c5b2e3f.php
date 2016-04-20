<?php if (!defined('THINK_PATH')) exit();?>	<?php $navArr = M("category")->where("fid=0")->select(); ?>
	<a href="#0" class="cd-top">Top</a>
	<div class="header">
		<div class="header_mid">
			<div class="logo fl"><img src="/Public/Images/logo.jpg"/></div>
			<div class="header_r fr pr">
			<span class="c-f f-12 mt-10 t-r fr">全国服务热线：020-84130064 / 400-678-5751</span>
			<ul class="nav fr pa">
				<?php if(is_array($navArr)): $i = 0; $__LIST__ = $navArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($v['url']);?>" class="language-tg" data-title="<?php echo ($v[ename]); ?>"><?php echo ($v[name]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			</div>	
		</div>
	</div>
<div class="banner1">
	<div class="ban_mid">
	<img src="/Public/Images/banner1.jpg" alt="" style="width:1000px;">
	</div>
</div>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta charset="UTF-8">
	<title>罗马国际-首页</title>
	<link href="/Public/Css/base.css" rel="stylesheet" type="text/css" />
	<link href="/Public/Css/main.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/Public/css/swiper.min.css">
	<script src="/Public/js/jquery.min.js"></script>
	<script  src="/Public/js/responsiveslides.min.js" type="text/javascript"></script>
	<script src="/Public/js/lrtk.js"></script> 
	<script type="text/javascript">
		$(function () {
			$("#slider3").responsiveSlides({	
				pager: true,
				speed: 300,			
			  });	
	  });
	</script>
</head>
<body>
<!-- 	banner -->
	 <div class="index-lun">
	 	<ul class="rslides" id="slider3">
			<li><a href="#"><img src="/Public/images/banner.jpg" alt=""></a></li>
			<li><a href="#"><img src="/Public/images/banner.jpg" alt=""></a></li>
			<li><a href="#"><img src="/Public/images/banner.jpg" alt=""></a></li>
		</ul>
		<!-- Slideshow 3 Pager -->
    </div>
	<div class="index-con">
		<div class="con_a">
			<div class="con_a_a  w1000  clear">
				<img src="/Public/Images/pro_l.png"/class="fl mt-30 " >
				<h3 class="fl t-c"><i>产品展示</i><br/><span><i>Product  display</i></span></h3>
				<img src="/Public/Images/pro_r.png"/class="fl mt-30">
			</div>
			<ul class="zhanshi  clear  w1000">
				<li class="pr">
					<a href=""><img src="/Public/Images/ima.jpg"/></a>
					<div class="show hover-tg  " >
						<div class="zbc pa">
						</div>
						<span class="ff pa c-f f-16">窗帘展示</span>
						<a href="javascript:;" class="ee pa c-f">查看全部产品</a> 
					</div>
				</li>
				<li class="pr">
					<a href=""><img src="/Public/Images/ima.jpg"/></a>>
					<div class="show hover-tg  " >
						<div class="zbc pa">
						</div>
						<span class="ff pa c-f f-16">窗帘展示</span>
						<a href="javascript:;" class="ee pa c-f">查看全部产品</a> 
					</div>
				</li>
				<li class="pr">
					<a href=""><img src="/Public/Images/ima.jpg"/></a>
					<div class="show hover-tg  " >
						<div class="zbc pa">
						</div>
						<span class="ff pa c-f f-16">窗帘展示</span>
						<a href="javascript:;" class="ee pa c-f">查看全部产品</a> 
					</div>
				</li>
				<li class="pr">

					<a href=""><img src="/Public/Images/ima.jpg"/></a>
					<div class="show hover-tg  " >
						<div class="zbc pa">
						</div>
						<span class="ff pa c-f f-16">窗帘展示</span>
						<a href="javascript:;" class="ee pa c-f">查看全部产品</a> 
					</div>

				</li>
			</ul>
		</div>
		<div class="con-b">
			<div class="con_a_a  w1000  clear">
				<img src="/Public/Images/pro_l.png"/class="fl mt-30 " >
				<h3 class="fl t-c"><i>新品展示</i><br/><span><i>New features</i></span></h3>
				<img src="/Public/Images/pro_r.png" class="fl mt-30">
			</div>
			<div class="w1000">
				<img src="/Public/images/ima1.jpg" alt=""></img>
				<div class="new-main">
					<h3 class="title-h3">
						<img class="fl" src="/Public/images/row.png" alt=""></img>
						<span class="fl">罗马国际-整体软装展示01 </span>
					</h3>
					<p>
						罗马布艺连锁机构成立于1999年，是由罗马国际集团有限公司（香港）独资的专业从事家居布艺产品设计、生产、销售、服务于一体的公司。多年来一直以“创国际优质布艺品牌”为发展目标，现已发展成为拥有50家自营连锁店，一间2000平方米的大型展示厅，以及60000平方尺的生产加工基地，并拥有一批出色的销售精英、设计人才及技术骨干。
					</p>
				</div>
			</div>
		</div>
	</div>
    	<div class="footer">
		<div class="foot">
         <div class="foot1 foot1_border layout2">
         	<ul class="clear oh">
            	<li>
                	<div class="foot1_s">
                        <b> <a href="#">品牌故事 | BRAND</a></b>
                        <ul class="fl">
                            <li><a href="#">关于品牌</a></li>
                            <li><a href="#">获得荣誉</a></li>
                            <li><a href="#">新闻动态</a></li>
                            <li><a href="#">联系我们</a></li>
                        </ul>
                	</div>
                </li>
                <li>
                	<div class="foot1_s">
                        <b> <a href="#">公司新闻 | NEWS CENTER</a></b>
                        <ul>
                            <li><a href="#">网上商城</a></li>
                            <li><a href="#">维修网点</a></li>
                            <li><a href="#">软件升级</a></li>
                            <li><a href="#">产品使用</a></li>
                        </ul>
                	</div>
                </li>
                <li>
                	<div class="foot1_s">
                        <b> <a href="#">产品展示 | PRODUCT</a></b>
                        <ul>
                            <li><a href="#">招商加盟</a></li>
                            <li><a href="#">产品合作</a></li>
                            <li><a href="#">资源合作</a></li>
                        </ul>
                	</div>
                </li>
                <li>
                	<div class="foot1_s">
                        <b> <a href="#">招商加盟 | CONTACT US </a></b>
                        <ul>
                            <li><a href="#">新浪微博</a></li>
                            <li><a href="#">腾讯微博</a></li>
                            <li><a href="#">官方微信</a></li>
                            
                        </ul>
                	</div>
                </li>
                 <li>
                	<div class="foot1_s" style="background: none;">
                        <b> <a href="#">招商加盟 | CONTACT US </a></b>
                        <ul>
                            <li><a href="#">新浪微博</a></li>
                            <li><a href="#">腾讯微博</a></li>
                            <li><a href="#">官方微信</a></li>
                        </ul>
                	</div>
                </li>
            </ul>
        </div>
		</div>
		</div>
		<div class="foot2">
			<p class="t-c ">粤ICP备120860000号     Copyright © 2015 罗马国际 All Rights Reserved  </p>
		</div>
    <link href="/Public/css/lrtk.css" rel="stylesheet" type="text/css" />
</body>
</html>
<div class="footer">
		<div class="foot">
         <div class="foot1 foot1_border layout2">
         	<ul class="clear oh">
            	<li>
                	<div class="foot1_s">
                        <b> <a href="#">品牌故事 | BRAND</a></b>
                        <ul class="fl">
                            <li><a href="#">关于品牌</a></li>
                            <li><a href="#">获得荣誉</a></li>
                            <li><a href="#">新闻动态</a></li>
                            <li><a href="#">联系我们</a></li>
                        </ul>
                	</div>
                </li>
                <li>
                	<div class="foot1_s">
                        <b> <a href="#">公司新闻 | NEWS CENTER</a></b>
                        <ul>
                            <li><a href="#">网上商城</a></li>
                            <li><a href="#">维修网点</a></li>
                            <li><a href="#">软件升级</a></li>
                            <li><a href="#">产品使用</a></li>
                        </ul>
                	</div>
                </li>
                <li>
                	<div class="foot1_s">
                        <b> <a href="#">产品展示 | PRODUCT</a></b>
                        <ul>
                            <li><a href="#">招商加盟</a></li>
                            <li><a href="#">产品合作</a></li>
                            <li><a href="#">资源合作</a></li>
                        </ul>
                	</div>
                </li>
                <li>
                	<div class="foot1_s">
                        <b> <a href="#">招商加盟 | CONTACT US </a></b>
                        <ul>
                            <li><a href="#">新浪微博</a></li>
                            <li><a href="#">腾讯微博</a></li>
                            <li><a href="#">官方微信</a></li>
                            
                        </ul>
                	</div>
                </li>
                 <li>
                	<div class="foot1_s" style="background: none;">
                        <b> <a href="#">招商加盟 | CONTACT US </a></b>
                        <ul>
                            <li><a href="#">新浪微博</a></li>
                            <li><a href="#">腾讯微博</a></li>
                            <li><a href="#">官方微信</a></li>
                        </ul>
                	</div>
                </li>
            </ul>
        </div>
		</div>
		</div>
		<div class="foot2">
			<p class="t-c ">粤ICP备120860000号     Copyright © 2015 罗马国际 All Rights Reserved  </p>
		</div>
    <link href="/Public/css/lrtk.css" rel="stylesheet" type="text/css" />