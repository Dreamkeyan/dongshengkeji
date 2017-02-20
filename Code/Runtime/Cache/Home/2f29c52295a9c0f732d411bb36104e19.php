<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<input id="enterpriseAccountI" name="enterpriseAccountI" type="hidden" value="2966169" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="Author" Content="" />
<meta name="Copyright" Content="" />
<link href="/dongsheng1/Code/Public/asset/home/css/main.css" rel="stylesheet" type="text/css" />

<script src="/dongsheng1/Code/Public/asset/home/js/scroll-door.js" type="text/javascript"></script>
<script src="/dongsheng1/Code/Public/asset/home/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="/dongsheng1/Code/Public/asset/home/js/jquery.js" type="text/javascript"></script>
<script src="/dongsheng1/Code/Public/asset/home/js/common.js" type="text/javascript"></script>
<title>东升科技-典型案例</title>
</head>
<body>
	<div class="header">
		
    		
<div class="topWrap">
	<div class="topMenu"><p><a style="cursor:pointer;" onclick="SetHome(this,'http://www.86good.com:80//2966169/web');">设为首页</a>&nbsp;|&nbsp;<a style="cursor:pointer;" onclick="AddFavorite('/2966169/web','东升科技');">添加收藏</a></p></div>
	<div class="topNav">
		<a href="./index.php">首页</a>
		<a href="<?php echo U('compintor/intors',array('cid'=>12));?>">公司简介</a>
		<a href="<?php echo U('product/productList');?>">产品介绍</a>
		<a href="<?php echo U('yewufanwei/contents',array('cid'=>6));?>">业务范围</a>
		<a href="<?php echo U('dianxinganli/anllist');?>">典型案例</a>
		<a href="<?php echo U('zixundongtai/zixunList');?>">资讯动态</a>
		<a href="<?php echo U('qiyewenhua/culture');?>">企业文化</a>
		<a href="<?php echo U('rongyu/hornor');?>">荣誉</a>
		<a href="<?php echo U('aixinjuanzeng/axjz');?>">爱心捐助</a> 
		<a href="<?php echo U('zhaopin/recruit');?>">招聘英才</a> 
	</div>
</div>
<script language="javascript">
	function AddFavorite(sURL, sTitle){try{window.external.addFavorite(sURL, sTitle);}catch (e){try{window.sidebar.addPanel(sTitle, sURL, "");}catch (e){alert("加入收藏失败，请使用Ctrl+D进行添加");}}}
	function SetHome(obj,vrl){try{obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl);}catch(e){if(window.netscape) {try {netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");}catch (e) {alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");}var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);prefs.setCharPref('browser.startup.homepage',vrl);}}}
</script>

		<div class="banner02"><img src="/dongsheng1/Code/Public/asset/home/images/banner03.jpg" width="973" height="149" /></div>
		<div class="topLogo"></div>
	</div>
	
	<div class="mainBody">
		<div class="inc_tit">
			<h3 id="timeShow" name="timeShow"></h3>
			<script language="javascript">
       		 	window.onload = disptime;
			</script>
			<p class="fr"><a href="http://localhost/xadosun">首页</a> &gt; <span class="redf02">典型案例</span></p>
		</div>
	
	<div class="mainL02">
		<?php if(is_array($alList)): foreach($alList as $k=>$anli): ?><div class="govBox">
				<div class="mtit01">
					<h1 class="tabbg01"><?php echo ($ids[$k]['name']); ?></h1>
					<p><a href="<?php echo U('anliDetailList',array('cid'=>$ids[$k]['id']));?>">更多>></a></p>
				</div>
				<div class="govCont">
					<?php
 $an = $alList[$k]; ?>
					<?php if(is_array($an)): foreach($an as $key=>$item): ?><div class="pictxt">
							<p class="imgBorder"><a href="<?php echo U('dianxinganli/anliDetail',array('id'=>$item[id]));?>" target="_blank"><img src="<?php echo ($item['litpic']); ?>" width="105" height="75" border="0"/></a></p>
							<div class="textinfo">
								<h2><a href="<?php echo U('dianxinganli/anliDetail',array('id'=>$item[id]));?>" target="_blank"><?php echo ($item['title']); ?></a></h2>
								<p><?php echo ($item['title']); ?>...[<a class="redf02" target="_blank" href="<?php echo U('dianxinganli/anliDetail',array('id'=>$item[id]));?>">详细</a>]</p>
							</div>
						</div><?php endforeach; endif; ?>
				</div>
			</div><?php endforeach; endif; ?>
	</div>
		
		
		<div class="mainR02">
			
				
<div class="imgbox">
	<img src="/dongsheng1/Code/Public/asset/home/images/img01.gif" width="181" height="37" onclick="window.location.href='mailto:hjd890@163.com';"/>
<img src="/dongsheng1/Code/Public/asset/home/images/img02.gif" width="181" height="37" onclick="window.location.href='mailto:13519115500@163.com';"/>
<a href="<?php echo U('zhaopin/recruit');?>"><img src="/dongsheng1/Code/Public/asset/home/images/img03.gif" width="181" height="37" /></a>
<a href="<?php echo U('qiyewenhua/culture',array('cid'=>'46'));?>"><img src="/dongsheng1/Code/Public/asset/home/images/img04.gif" width="181" height="37" /></a>
<a href="<?php echo U('compintor/filiale');?>"><img src="/dongsheng1/Code/Public/asset/home/images/img05.gif" width="181" height="37" /></a>
</div>

            
            
			
			<div class="mRbox">

<div class="mtit01">
	<h1>典型案例</h1>
	<p><a href="<?php echo U('dianxinganli/anllist');?>" target="_blank">更多>></a></p>
</div>


<div class="picWrap02">

	<?php if(is_array($dxanl)): foreach($dxanl as $key=>$anl): ?><p class="picbox02">
		<a href="<?php echo U('dianxinganli/anliDetail',array('id'=>$anl[id]));?>" target="_blank"><img src="<?php echo ($anl['litpic']); ?>" width="149" height="108" border="0"/></a>
		</p>
		<b><a href="<?php echo U('dianxinganli/anliDetail',array('id'=>$anl[id]));?>"><?php echo ($anl['title']); ?></a></b><?php endforeach; endif; ?>
</div>
			     
			</div>
			
		</div>
		
	</div>
<div class="mainBottom"></div>
	
	
<div class="footer">
	<p class="footerMenu">
		<a href="<?php echo U('yewufanwei/contents',array('cid'=>6));?>" target="_blank">业务范围</a>&nbsp;&nbsp;|&nbsp;
		<a href="<?php echo U('product/productList');?>" target="_blank">新产品新材料</a>&nbsp;&nbsp;|&nbsp;
		<a href="./xyhai.php" target="_blank">后台管理</a>
	</p>
	<p>Copy Right © 2002 - 2009   版权所有：西安东升科技有限公司  Email： dongshengqs@126.com</p>
	<p>联系地址：西安市高新区科技二路清华科技园E座24层  邮政编码：710075</p>
	<p>公司总机：029-89585600（白天）传真：总机转814</p>
	<p>西安：029-89585600  服务投拆电话：029-89585608、13909183533</p>
	<p>中华人民共和国工业与信息产业部备案号：陕ICP备06010475号</p>
</div>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F7686b40627fa45106653e9335a8b3174' type='text/javascript'%3E%3C/script%3E"));
</script>

    
    
</body>
</html>