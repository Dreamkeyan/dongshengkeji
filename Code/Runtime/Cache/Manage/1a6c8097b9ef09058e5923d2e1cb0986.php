<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel='stylesheet' type="text/css" href="/dongshengsan/Code/Public/asset/manage/css/style.css" />
<script type="text/javascript" src="/dongshengsan/Code/Public/asset/manage/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/dongshengsan/Code/Public/asset/manage/js/common.js"></script>
 <script language="JavaScript">
        <!--
        var URL = '/dongshengsan/Code/Public/xyhai.php?s=/System';
        var APP	 = '/dongshengsan/Code/Public/xyhai.php?s=';
        var SELF='/dongshengsan/Code/Public/xyhai.php?s=/System/index';
        var PUBLIC='/dongshengsan/Code/Public/asset/manage';
        //-->
        </script>
</head>
<body>
<div class="main">
    <div class="pos">配置项管理
    </div>
    <div class="sub"><span>分组：</span>
        <a href="<?php echo U('System/index',array('groupid'=> 0));?>" <?php if($groupid == 0): ?>class="b"<?php endif; ?>>全部</a>
         <?php if(is_array($configgroup)): foreach($configgroup as $key=>$v): ?><a href="<?php echo U('System/index',array('groupid'=> $key));?>" <?php if($key == $groupid): ?>class="b"<?php endif; ?>><?php echo ($v); ?></a><?php endforeach; endif; ?>
        
    </div>     
    <div class="operate">
        <div class="left"><input type="button" onclick="goUrl('<?php echo U('System/add');?>')" class="btn_blue" value="添加配置项">
        <input type="button" onclick="doGoSubmit('<?php echo U('System/sort');?>','form_do')" class="btn_blue" value="更新排序"></div>
        <div class="left_pad">
            <form method="post" action="<?php echo U('System/index');?>">
                <input type="text" name="keyword" title="配置项名" class="inp_default" value="<?php echo ($keyword); ?>">
                <input type="submit" class="btn_blue" value="查  询">
            </form>
        </div>
    </div>
    <div class="list">    
    <form action="<?php echo U('System/sort');?>" method="post" id="form_do" name="form_do">
        <table width="100%">
            <tr>
                <th>编号</th>
                <th>名称</th>
                <th>标题</th>
                <th>分组</th>
                <th>类型</th>
                <th>排序</th>
                <th>操作</th>
            </tr>
			<?php if(is_array($vlist)): foreach($vlist as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td class="aleft"><?php echo ($v["name"]); ?></td>
                <td ><?php echo ($v["title"]); ?></td>
				<td><?php echo (get_item_value('configgroup',$v["groupid"])); ?></td>                
                <td><?php echo (get_item_value('configtype',$v["typeid"])); ?></td>
                <td><input type="text" name="sortlist[<?php echo ($v["id"]); ?>]" value="<?php echo ($v["sort"]); ?>" id="sortlist" size="5" /></td>
                <td>
                <a href="<?php echo U('System/edit',array('id' => $v['id']));?>">修改</a>
                <a href="javascript:;" onclick="toConfirm('<?php echo U('System/del', array('id' => $v['id']));?>', '确实要删除吗？')">删除</a>
				</td>
            </tr><?php endforeach; endif; ?>
        </table>
        <div class="page" style="clear: both;"><?php echo ($page); ?> </div>
        <input type="hidden" name="groupid" value="<?php echo ($groupid); ?>" />
    </form>
    </div>
</div>
</body>
</html>