<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel='stylesheet' type="text/css" href="/asset/manage/css/style.css" />
<script type="text/javascript" src="/asset/manage/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/asset/manage/js/common.js"></script>
<script type="text/javascript" src="/asset/manage/js/jquery.form.min.js"></script>
<script type="text/javascript" src="<?php echo U('Public/editor');?>"></script>
</head>
<body>
<div class="main">
    <div class="pos"><?php echo ($vo["name"]); ?>
    <?php if(ACTION_NAME == "index"): ?>| <?php if(is_array($poscate)): foreach($poscate as $key=>$v): ?><a href="<?php echo U('' . ucfirst($v['tablename']) .'/index', array('pid' => $v['id']));?>"><?php echo ($v["name"]); ?> &gt; </a><?php endforeach; endif; endif; ?>
    </div>
    <?php if($subcate): ?><div class="sub"><span>子栏目：</span>
        <?php if(is_array($subcate)): foreach($subcate as $key=>$v): ?><a href="<?php echo U(''. ucfirst($v['tablename']) . '/index', array('pid' => $v['id']));?>"><?php echo ($v["name"]); if(!empty($v['child'])): ?>&there4;<?php endif; ?></a><?php endforeach; endif; ?>
    </div><?php endif; ?>
	<div class="form">
		<form method='post' id="form_do" name="form_do" action="<?php echo U('Page/index');?>">
		<dl><dt>摘要：</dt>
			<dd>
				<textarea name="description" class="tarea_default"><?php echo ($vo["description"]); ?></textarea>
			</dd>
		</dl>
		<dl><dt>内容：</dt><dd>
				<textarea name="content" id="content"><?php echo ($vo["content"]); ?></textarea>
			</dd>
		</dl>
		<dl>
			
		</dl>	
		</div>
		<div class="form_b">
			<input type="hidden" name="id" value="<?php echo ($pid); ?>" />
			<input type="hidden" name="pid" value="<?php echo ($pid); ?>" />
			<input type="submit" class="btn_blue" id="submit" value="提 交">
		</div>
	   </form>
	</div>


</body>
</html>