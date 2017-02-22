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
<link href="/dongshengsan/Code/Public/asset/home/css/main.css" rel="stylesheet" type="text/css" />

<script src="/dongshengsan/Code/Public/asset/home/js/scroll-door.js" type="text/javascript"></script>
<script src="/dongshengsan/Code/Public/asset/home/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="/dongshengsan/Code/Public/asset/home/js/jquery.js" type="text/javascript"></script>
<script src="/dongshengsan/Code/Public/asset/home/js/common.js" type="text/javascript"></script>
<title>东升科技-企业文化</title>
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

		<div class="banner02"><img src="/dongshengsan/Code/Public/asset/home/images/banner07.jpg" width="973" height="149" /></div>
		<div class="topLogo"></div>
	</div>
	
	
	<div class="mainBody">
		<div class="inc_tit">
			<h3 id="timeShow" name="timeShow"></h3>
			<script language="javascript">
	        	window.onload = disptime;
			</script>
			<p class="fr"><a href="http://localhost/xadosun">首页</a> &gt; <a href="<?php echo U('culture');?>">企业文化</a> &gt; <span class="redf02"><?php echo ($clo['name']); ?></span></p>
		</div>
		
		<div class="mainL03">
			
				<div class="mtit02">企业文化</div>
<div class="menuBox">
	<?php if(is_array($cultureColumn)): foreach($cultureColumn as $key=>$inclumn): if(($inclumn["name"] == $clo["name"])): ?><div class="menuBar01"><a href="<?php echo U('culture',array('cid'=>$inclumn['id']));?>"><?php echo ($inclumn['name']); ?></a></div>
		<?php else: ?>
			<div class="menuBar02"><a href="<?php echo U('culture',array('cid'=>$inclumn['id']));?>"><?php echo ($inclumn['name']); ?></a></div><?php endif; endforeach; endif; ?>
</div>
<div class="menuBottom"></div>
			<div class="mLbox">
<div class="mtit01">
	<h1>企业新闻</h1>
	<p><a href="<?php echo U('zixundongtai/newsList');?>" target="_blank">更多>></a></p>
</div>
<div class="list">
	<?php if(is_array($newslist)): foreach($newslist as $key=>$news): ?>·<a href="<?php echo U('zixundongtai/newsDetail',array('id'=>$news[id]));?>" target="_blank">
		<?php
 echo mb_substr($news['title'], 0, 15, 'utf-8' ) ?>	
		</a><br/><?php endforeach; endif; ?>	
</div>
			</div>
			
<div class="mLcall">
		总机: 029-89585600(白天)<br />
	技术部：13519115500<br />
    029-88443628<br />
	投诉电话：13909183533<br />
</div>
		</div>
		<div class="mainR03">
			<?php if($clo["name"] == "优秀员工"): ?><div class="clearit04">
					<div class="clearit_out">
						<div class="inc_Rtit"><h4><?php echo ($ygColumn[0]['name']); ?></h4></div>
							<div class="clearit04">
								<?php if(is_array($ygList)): foreach($ygList as $k=>$yglist): ?><div class="personInfo">
										<p class="imgBorder"><img src="<?php echo ($yglist['litpic']); ?>" width="76" height="114" /></p>
										<p><b><?php echo ($yglist['title']); ?></b></p>
										<p class="a_l"></p>
									</div><?php endforeach; endif; ?>
									
							</div>
	                </div>
					<div class="personList">
						<?php if(is_array($ygColumn)): foreach($ygColumn as $key=>$yg): ?>·<a href="<?php echo U('culture',array('cid'=>'46','pid'=>$yg['id']));?>"><?php echo ($yg['name']); ?></a><br /><?php endforeach; endif; ?>
					</div>
				</div>
			 <?php elseif($clo["name"] == "员工天地"): ?>
 					<div class="inc_Rtit"><h4><?php echo ($clo['name']); ?></h4></div>
					<ul class="ul_list">
						<?php if(is_array($list)): foreach($list as $key=>$ll): ?><li class="ul_li585"><a href="<?php echo U('ygtdDetail',array('id'=>$ll['id']));?>" title="<?php echo ($ll['title']); ?>">·<?php echo ($ll['title']); ?></a></li>
							<li class="ul_li75"><?php
 echo date('Y-m-d',$ll['publishtime']); ?> </li><?php endforeach; endif; ?>
						
					</ul>
					<div class="inc_page">
						<?php echo ($page); ?>
					</div>
			 <?php else: ?>
			 	<div class="inc_Rtit"><h4><?php echo ($clo['name']); ?></h4></div>
				<div class="txtBox03">
					<?php echo ($clo['content']); ?>
		        </div><?php endif; ?>
			 <div class="clearit03 mar_top15">
			 
			 <div class="inc_Rtit02">精典回顾</div>


</div>

<div class="inc_page02">
</div>
<div class="space26">
	
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