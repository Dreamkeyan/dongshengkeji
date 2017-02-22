<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'/> 
<title><?php echo ($title); ?>-我的网站</title>
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />
<link href="/dongshengsan/Code/Public/asset/mobile/css/base.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/dongshengsan/Code/Public/asset/mobile/js/touchslider.js"></script>
<script type="text/javascript" src="/dongshengsan/Code/Public/asset/mobile/js/comm_fun.js"></script>
</head>
<body>

<!--顶部开始-->
<div id="body_margins">
<div id="header">
  <div class="logo"><img src="/dongshengsan/Code/Public/asset/mobile/images/logo.png"></div>
  <div class="navBtn">
  <div class="navArea">
  <a class="nvali" href="<?php echo U('Index/index');?>">网站首页</a>
  <?php
 $_typeid = 0; if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); $_navlist = get_category(1); if($_typeid == 0) { $_navlist = Common\Lib\Category::toLayer($_navlist); }else { $_navlist = Common\Lib\Category::toLayer($_navlist, 'child', $_typeid); } foreach($_navlist as $autoindex => $navlist): $navlist['url'] = get_url($navlist); if($autoindex == 3 || $autoindex == 7): ?></div><div class="navArea"><?php endif; ?>
  <a href='<?php echo ($navlist["url"]); ?>'><?php echo ($navlist["name"]); ?></a><?php endforeach;?>
  </div>
  </div>
</div>

<div class="position">位置：<?php
 $_sname = ""; $_typeid = -1; if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); if ($_typeid == 0 && $_sname == '') { $_sname = isset($title) ? $title : ''; } echo get_position($_typeid, $_sname, "", 1, ""); ?></div>
<div class="nav_list">
<?php
 $_typeid = -1; if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); $_navlist = get_category(1); if($_typeid == 0) { $_navlist = Common\Lib\Category::toLayer($_navlist); }else { $_navlist = Common\Lib\Category::toLayer($_navlist, 'child', $_typeid); } foreach($_navlist as $autoindex => $navlist): $navlist['url'] = get_url($navlist); ?><a href="<?php echo ($navlist["url"]); ?>"><?php echo ($navlist["name"]); ?></a><?php endforeach;?>
<div style="clear:both"></div>
</div>
<!--介绍-->
<dl class="box">
  <dt class="title">
  <a href="<?php echo ($cate["url"]); ?>" class="more arr-round arr-round-blue"></a><?php echo ($cate["name"]); ?></dt>
</dl>

<div class="content">
  <div class="intro">
  <?php echo ($cate["content"]); ?>
  </div>
</div>

<div class="askbar">
<a href="tel:0871-66666" rel="nofollow">电话咨询</a><a href="tel:0871-66666" rel="nofollow">在线咨询</a>
</div>

<!--联系我们-->
<dl class="box">
  <dt class="title"><a href="#" class="more arr-round arr-round-blue"></a>联系我们</dt><dd class="intro-box">
    <p>【公司地址】：昆明北京路<br/>
      【公司网站】：http://www.xadosun.com<br/>
    【咨询热线】：<a href="tel:0871-66666" class="btn-blue">0871-66666</a></p>
  </dd>
</dl>
<!--友情链接-->
<div class="copyright">
<p>Copyright © 2014-2014 XYHCMS. 行云海软件 版权所有</p>
</div>
<ul id="fixed-foot">
  <li class="border-left-none"><a class="tel" href="tel:0871-66666"><div><span class="icon_bg_tel"></span><span>电话咨询</span></div></a></li>
  <li><a href="tel:0871-66666" rel="nofollow"><div><span class="icon_bg_swt"></span><span>在线咨询</span></div></a></li>
</ul>
<script language="javascript"></script>
</div>
</body>
</html>