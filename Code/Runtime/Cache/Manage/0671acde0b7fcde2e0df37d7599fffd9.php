<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel='stylesheet' type="text/css" href="/dongshengsan/Code/Public/asset/manage/css/style.css" />
<script type="text/javascript" src="/dongshengsan/Code/Public/asset/manage/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/dongshengsan/Code/Public/asset/manage/js/common.js"></script>
<script type="text/javascript" src="/dongshengsan/Code/Public/asset/manage/js/jquery.form.min.js"></script>
<script type="text/javascript" src="<?php echo U('Public/editor');?>"></script>
<script type="text/javascript">
	var data_path = "/dongshengsan/Code/Public/Data";
	var tpl_public = "/dongshengsan/Code/Public/asset/manage";
</script>
<script type="text/javascript" src="/dongshengsan/Code/Public/asset/manage/js/jBox.config.js"></script>
<script type="text/javascript" src="/dongshengsan/Code/Public/asset/manage/js/calendar.config.js"></script>
<script type="text/javascript" src="/dongshengsan/Code/Public/Data/static/jq_plugins/iColorPicker/iColorPicker.js"></script>
<script type="text/javascript">
$(function () {
	//缩略图上传
	var litpic_tip = $(".litpic_tip");
	var btn = $(".litpic_btn span");
	$("#fileupload").wrap("<form id='myupload' action='<?php echo U('Public/upload', array('tb' => 2));?>' method='post' enctype='multipart/form-data'></form>");
    $("#fileupload").change(function(){
    	if($("#fileupload").val() == "") return;
		$("#myupload").ajaxSubmit({
			dataType:  'json',
			beforeSend: function() {
        		$('#litpic_show').empty();
				btn.html("上传中...");
    		},
			success: function(data) {
				
				if(data.state == 'SUCCESS'){

					litpic_tip.html(""+ data.info[0].name +" 上传成功("+data.info[0].size+"k)");
					var img = data.info[0].url;//原图
					var timg = data.info[0].turl;//缩略图
					$('#litpic_show').html("<img src='"+timg+"' width='120'>");
					$("#litpic").val(timg);
				}else {
					litpic_tip.html(data.state);		
				}			
					btn.html("添加图片");

			},
			error:function(xhr){
				btn.html("上传失败");
				litpic_tip.html(xhr);
			}
		});
	});

	$('#CK_JumpUrl').click(function(){
            var inputs = $(this).parents('dl').find('input');
            if($(this).attr('checked')) {
                $('#JumpUrlDiv').show();

            }else {
                $('#JumpUrlDiv').hide();
            }
            
     });
	
});




$(function () {

	$('#BrowerPicture').click(function(){
		$.jBox("iframe:<?php echo U('Public/browseFile', array('stype' => 'picture'));?>",{
			title:'XYHCMS',
			width: 650,
   			height: 350,
    		buttons: { '关闭': true }
   			}
		);
	});	

});


function selectPicture(sfile) {
	$("#litpic").val(sfile);
	$.jBox.tip("选择文件成功");
	$.jBox.close(true);
	$('#litpic_show').html("<img src='"+sfile+"' width='120'>");
}


</script>
</head>
<body>
<div class="main">
    <div class="pos">添加文章</div>
	<div class="form">
		<form method='post' id="form_do" name="form_do" action="<?php echo U('Article/edit');?>">
		<dl>
			<dt> 标题：</dt>
			<dd>
				<input type="text" name="title" class="inp_large" value="<?php echo ($vo["title"]); ?>" />
			</dd>
		</dl>
		<dl>
			<dt> 副标题：</dt>
			<dd>
				<input type="text" name="shorttitle" class="inp_w250" value="<?php echo ($vo["shorttitle"]); ?>" />
			</dd>
		</dl>		
		<dl>
			<dt> 标题颜色：</dt>
			<dd>
				<input type="text" name="color"  id="color" class="inp_small iColorPicker" value="<?php echo ($vo["color"]); ?>" />
			</dd>
		</dl>
		<dl>
			<dt> 自定义属性：</dt>
			<dd>
				<?php if(is_array($flagtypelist)): foreach($flagtypelist as $key=>$v): ?><label><input type='checkbox' name='flags[]' value='<?php echo ($key); ?>' <?php if($key == B_JUMP): ?>id="CK_JumpUrl"<?php endif; ?> <?php if(($vo["flag"] & $key) == $key): ?>checked="checked"<?php endif; ?> /> <?php echo ($v); ?></label>&nbsp;<?php endforeach; endif; ?>
			</dd>
		</dl>

		<dl id="JumpUrlDiv" <?php if(($vo["flag"] & B_JUMP) == 0): ?>style="display:none;"<?php endif; ?>>
			<dt> 跳转网址：</dt>
			<dd>
				<input type="text" name="jumpurl" class="inp_large" value="<?php echo ($vo["jumpurl"]); ?>" />
			</dd>
		</dl>
		<dl>
			<dt> 所属栏目：</dt>
			<dd>
				<select name="cid">
					<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php if($vo["cid"] == $v['id']): ?>selected="selected"<?php endif; ?>><?php echo ($v["delimiter"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
				</select>
			</dd>
		</dl>
		<dl>
			<dt> 缩略图：</dt>
			<dd>
				<div class="litpic_show">
				    <div style="float:left;">
				    <input type="text" class="inp_w250" name="litpic" id="litpic"  value="<?php echo ($vo["litpic"]); ?>" />
				    <input type="button" class="btn_blue_b" id="BrowerPicture" value="选择站内图片">
				    </div>
						<div class="litpic_btn">
				        <span>添加缩略图</span>
				        <input id="fileupload" type="file" name="mypic">
				    </div>
				    <div class="litpic_tip"></div>
				    <div id="litpic_show">
				    <?php if($vo['litpic']): ?><img src="<?php echo ($vo["litpic"]); ?>" width='120' /><?php endif; ?>
				    </div>
				</div>
			</dd>
		</dl>
		<dl>
			<dt> 关键词：</dt>
			<dd>
				<input type="text" name="keywords" class="inp_w250" value="<?php echo ($vo["keywords"]); ?>" />
			</dd>
		</dl>
		<dl>
			<dt> 摘要：</dt>
			<dd>
				<textarea name="description" id="description" class="tarea_default"><?php echo ($vo["description"]); ?></textarea>
			</dd>
		</dl>	
		<dl>
			<dt> 作者：</dt>
			<dd>
				<input type="text" name="author" class="inp_w250" value="<?php echo ($vo["author"]); ?>" /><span class="tip"></span>
			</dd>
		</dl>
		<dl>
			<dt> 来源：</dt>
			<dd>
				<input type="text" name="copyfrom" class="inp_w250" value="<?php echo ($vo["copyfrom"]); ?>" /><span class="tip"></span>
			</dd>
		</dl>
		<dl>
			<dt> 内容：</dt>
			<dd>
				<textarea name="content" id="content"><?php echo ($vo["content"]); ?></textarea>
			</dd>
		</dl>
		<dl>
            <dt> 发布时间：</dt>
            <dd>
                
                <input type="text" class="inp_one" name="publishtime" id="publishtime" value="<?php echo (date('Y-m-d H:i:s',$vo["publishtime"])); ?>">
                <script type="text/javascript">
                    Calendar.setup({
                        weekNumbers: true,
                        inputField : "publishtime",
                        trigger    : "publishtime",
                        dateFormat: "%Y-%m-%d %H:%M:%S",
                        showTime: true,
                        minuteStep: 1,
                        onSelect   : function() {this.hide();}
                    });
                </script>
            </dd>
        </dl>	
		<dl>
			<dt> 评论：</dt>
			<dd>
				<input type="radio" name="commentflag" value="1" <?php if($vo["commentflag"] == 1): ?>checked="checked"<?php endif; ?> />允许 <input type="radio" name="commentflag" value="0" <?php if($vo["commentflag"] == 0): ?>checked="checked"<?php endif; ?> />禁止
			</dd>
		</dl>

		<div class="form_b">
			<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" />
			<input type="hidden" name="pid" value="<?php echo ($pid); ?>" />
			<input type="submit" class="btn_blue" id="submit" value="提 交">
		</div>
	   </form>
	</div>
</div>

</body>
</html>