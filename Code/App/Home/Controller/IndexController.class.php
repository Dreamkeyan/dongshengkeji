<?php

namespace Home\Controller;

class IndexController extends HomeCommonController{
    
	//方法：index
	public function index(){
        //echo alert("CFG_UPLOAD_ROOTPATH");
	    header("Content-Type: text/html;charset=utf-8");
	    //企业新闻
	    $cid = M('category') -> where(array('name'=>'企业新闻'))->find(); 
	    $qyxw = M('article')->where(array('cid'=>$cid['id'])) ->order('id')->limit(0,5) ->select();
        //行业资讯
	    $cid = M('category') -> where(array('name'=>'行业资讯'))->find();
	    $hyzx = M('article')->where(array('cid'=>$cid['id'])) ->order('id')->limit(0,5) ->select();
// 	    $aa = $hyzx[0][title];
        //行业技术
	    $cid = M('category') -> where(array('name'=>'行业技术'))->find();
	    $hyjs = M('article')->field('id,title,litpic,cid')->where(array('cid'=>$cid['id'])) ->order('id')->limit(0,10) ->select();
	    //机房规范
	    $cid = M('category') -> where(array('name'=>'机房规范'))->find();
	    $jfgf = M('article')->where(array('cid'=>$cid['id'])) ->order('id')->limit(0,10) ->select();
	    //典型案例
 	    $cid = M('category') -> where(array('name'=>'典型案例'))->find();
	    $ids = M('category')->field('id')->where(array('pid'=>$cid['id']))->select();
 	    $ids = col(id, $ids);
	    $dxanl = M('article')->where(array('cid'=>array('IN',$ids))) ->order('id')->limit(0,3) ->select();
// 	    $sql = "select group_concat(id) from xyh_category where pid = (select id from xyh_category where name='典型案例')";
// 	    $ids= M()->query($sql);
// 	    debug($ids[0]);
//	    $dxanl = M('article')->where(array('cid'=>array('IN',$ids[0]))) ->order('id')->limit(0,3) ->select();
// 	    echo M()->_sql();
// 		go_mobile();
//      exit();
        //新产品新材料中心
        //debug($hyjs); 
        $cpcl = M('product')->where(array('flag'=>5)) ->order('publishtime')-> select();
	    
        $this->assign('qyxw',$qyxw);
        $this->assign('hyzx',$hyzx);
        $this->assign('hyjs',$hyjs);
        $this->assign('jfgf',$jfgf);
        $this->assign('dxanl',$dxanl);
        $this->assign('cpcl',$cpcl);
		$this->assign('title', C('CFG_WEBNAME'));
		$this->display();

	}
}

?>