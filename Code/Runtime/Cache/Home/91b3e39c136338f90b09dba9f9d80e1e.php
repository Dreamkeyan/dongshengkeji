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
<link href="/asset/home/css/main.css" rel="stylesheet" type="text/css" />

<script src="/asset/home/js/scroll-door.js" type="text/javascript"></script>
<script src="/asset/home/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="/asset/home/js/jquery.js" type="text/javascript"></script>
<script src="/asset/home/js/common.js" type="text/javascript"></script>
<title>东升科技--首页</title>
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

	
		<div class="banner"></div>
		<div class="topLogo"></div>
	</div>
	
	<div class="mainBody">
		<div class="mainL">
			<div class="mLogin">
				<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td width="29%" align="right">员工帐号</td>
						<td><input class="ipt137" name="" type="text" value="" /></td>
					</tr>
					<tr>
						<td width="29%" align="right">员工密码</td>
						<td><input class="ipt137" name="" type="text" value="" /></td>
					</tr>
					<tr>
						<td></td>
						<td class="a_l"><input name="" type="checkbox" value="" />记住密码</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input class="btn111" type="button" value="" /></td>
					</tr>
				</table>
			</div>
			
			<div class="mLbox">

<div class="mtit01">
	<h1>机房规范</h1>
	<p><a href="<?php echo U('zixundongtai/newsList',array('cid'=>38));?>" target="_blank">更多>></a></p>
</div>
<div class="list">
	<?php if(is_array($jfgf)): foreach($jfgf as $key=>$i): ?>·<a href="<?php echo U('zixundongtai/newsDetail',array('id'=>$i['id']));?>" target="_blank"><?php echo ($i['title']); ?></a><br/><?php endforeach; endif; ?>
</div>
		    </div>
<div class="mLcall">
		总机: 029-89585600(白天)<br />
	技术部：13519115500<br />
    029-88443628<br />
	投诉电话：13909183533<br />
</div>
		</div>
		
		<div class="mainMid">

<div class="mtit01">
	<h1>企业新闻</h1>
	<p><a href="<?php echo U('Home/zixundongtai/newsList');?>" target="_blank">更多>></a></p>
</div>
	<div class="mNewsbox">
		
			<p class="imgBorder"><a href="<?php echo U('zixundongtai/newsDetail',array('id'=>$qyxw[0]['id']));?>" target="_blank"><img src="<?php echo ($qyxw[0]['litpic']); ?>" width="232" height="166" /></a></p>
		
		<div class="textinfo">
			
				<h2 title="<?php echo ($qyxw[0]['title']); ?>"><?php echo ($qyxw[0]['title']); ?></h2>
				<p title="<?php echo ($qyxw[0]['title']); ?>"><a href="<?php echo U('zixundongtai/newsDetail',array('id'=>$qyxw[0]['id']));?>" target="_blank"><?php echo ($qyxw[0]['title']); ?></a></p>
			
			<div class="list">
				
				<?php if(is_array($qyxw)): foreach($qyxw as $k=>$art): if($k > 0): ?>·<a href="<?php echo U('zixundongtai/newsDetail',array('id'=>$art['id']));?>" target="_blank"><?php echo ($art['title']); ?></a><br/><?php endif; endforeach; endif; ?>
			</div>
	 </div>
</div>
			<div class="tradeBox">
				<div class="mtit01">
					<h1 id="mtab1" class="tabbg01">行业资讯</h1>
					<h1 id="mtab2" class="tabbg02">行业技术</h1>
					<p><a href="<?php echo U('zixundongtai/zixunList');?>">更多>></a></p>
				</div>
				<div id="mct1" class="tradeCont">

<div class="fl">
	<div class="picinfo">
		
		<p class="imgBorder"><a href="<?php echo U('zixundongtai/newsDetail',array('id'=>$hyzx[0]['id']));?>" target="_blank"><img src="<?php echo ($hyzx[0][litpic]); ?>" width="81" height="59" border="0"/></a></p>
		<div class="textinfo">
			<h2 title="<?php echo ($hyzx[0][title]); ?>"><a href="<?php echo U('zixundongtai/newsDetail',array('id'=>$hyzx[0]['id']));?>" target="_blank"><?php echo ($subtitle); ?></a></h2>
			<p title="<?php echo ($hyzx[0][title]); ?>"><?php echo ($hyzx[0][title]); ?>...<a class="redf01" href="<?php echo U('zixundongtai/newsDetail',array('id'=>$hyzx[0]['id']));?>" target="_blank">[详细]</a></p>
		</div>
		
	</div>
	<div class="list">
		<?php if(is_array($hyzx)): foreach($hyzx as $k=>$hyzx): if(($k > 0) and ($k < 5)): ?>·<a href="<?php echo U('zixundongtai/newsDetail',array('id'=>$hyzx['id']));?>" target="_blank"><?php echo ($hyzx['title']); ?></a><br/><?php endif; endforeach; endif; ?>
	</div>
</div>
<div class="fl">
	<div class="picinfo">
		
	</div>
	<div class="list">
		
	</div>
</div>

				    
				</div>
				<div id="mct2" class="tradeCont hidden">

<div class="fl">
	<div class="picinfo">
		<p class="imgBorder"><a href="<?php echo U('zixundongtai/newsDetail',array('id'=>$hyjs[0]['id']));?>" target="_blank"><img src="<?php echo ($hyjs[0]['litpic']); ?>" width="81" height="59" border="0"/></a></p>
		<div class="textinfo">
			<h2 title="<?php echo ($hyjs[0]['title']); ?>"><a href="<?php echo U('zixundongtai/newsDetail',array('id'=>$hyjs[0]['id']));?>" target="_blank">
				<?php echo ($hyjs[0]['title']); ?>
			</a></h2>
			<p title="<?php echo ($hyjs[0]['title']); ?>"><?php echo ($hyjs[0]['title']); ?>...<a class="redf01" href="<?php echo U('zixundongtai/newsDetail',array('id'=>$hyjs[0]['id']));?>" target="_blank">[详细]</a></p>
		</div>
		
	</div>
	<div class="list">
		<?php if(is_array($hyjs)): foreach($hyjs as $k=>$v): if(($k > 0) and ($k < 5)): ?>·<a href="<?php echo U('zixundongtai/newsDetail',array('id'=>$v['id']));?>" target="_blank"><?php echo ($v[title]); ?></a><br/><?php endif; endforeach; endif; ?> 
			
	</div>
</div>

<div class="fl">
	<div class="picinfo">
			<p class="imgBorder"><a href="<?php echo U('zixundongtai/newsDetail',array('id'=>$hyjs[5]['id']));?>" target="_blank"><img src="<?php echo ($hyjs[5]['litpic']); ?>" width="81" height="59" border="0"/></a></p>
			<div class="textinfo">
				<h2 title="<?php echo ($hyjs[5]['title']); ?>"><a href="<?php echo U('zixundongtai/newsDetail',array('id'=>$hyjs[5]['id']));?>" target="_blank"><?php echo ($hyjs[5]['title']); ?></a></h2>
				<p title="<?php echo ($hyjs[5]['title']); ?>"><?php echo ($hyjs[5]['title']); ?>...<a class="redf01" href="<?php echo U('zixundongtai/newsDetail',array('id'=>$hyjs[5]['id']));?>" target="_blank">[详细]</a></p>
			</div>
		</div>
	<div class="list">
		<?php if(is_array($hyjs)): foreach($hyjs as $k=>$i): if(($k > 5) and ($k < 10)): ?>·<a href="<?php echo U('zixundongtai/newsDetail',array('id'=>$i['id']));?>" target="_blank"><?php echo ($i['title']); ?></a><br/><?php endif; endforeach; endif; ?>
	</div>
     </div>
				</div>
			</div>
			<script>
				var SDmodel=new scrollDoor();
					SDmodel.sd(["mtab1","mtab2"],
								["mct1","mct2"],
								"tabbg02","tabbg01");
			</script>
			
			<div class="mtit01 tspace8">
				<h1>新产品新材料中心</h1>
				<p><a href="<?php echo U('product/productList');?>">更多>></a></p>
			</div>
			<div class="picWrap">
				<?php if(is_array($cpcl)): foreach($cpcl as $key=>$cp): ?><div class="picbox">
						<a href="<?php echo U('product/productDetail',array('id'=>$cp['id'],'cid'=>$cp['cid']));?>" target="_blank" title="<?php echo ($cp['title']); ?>"><img src="<?php echo ($cp['litpic']); ?>" width="100" height="75"/></a>
						<p><a href="<?php echo U('product/productDetail',array('id'=>$cp['id'],'cid'=>$cp['cid']));?>" target="_blank" title="<?php echo ($cp['title']); ?>"><?php echo ($cp['title']); ?></p>
					</div><?php endforeach; endif; ?>
			</div>
			
		</div>
		 
		<div class="mainR">
			
				
<div class="imgbox">
	<img src="/asset/home/images/img01.gif" width="181" height="37" onclick="window.location.href='mailto:hjd890@163.com';"/>
<img src="/asset/home/images/img02.gif" width="181" height="37" onclick="window.location.href='mailto:13519115500@163.com';"/>
<a href="<?php echo U('zhaopin/recruit');?>"><img src="/asset/home/images/img03.gif" width="181" height="37" /></a>
<a href="<?php echo U('qiyewenhua/culture',array('cid'=>'46'));?>"><img src="/asset/home/images/img04.gif" width="181" height="37" /></a>
<a href="<?php echo U('compintor/filiale');?>"><img src="/asset/home/images/img05.gif" width="181" height="37" /></a>
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