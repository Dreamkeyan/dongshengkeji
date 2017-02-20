<?php

namespace Home\Controller;

class YewufanweiController extends HomeCommonController{
    
	public function contents(){
	    header("Content-Type: text/html;charset=utf-8");
	   //业务范围
        $intorid = M('category')->where(array('name'=>'业务范围'))->find();
        $intorColumn = M('category')->where(array('pid'=>$intorid['id']))->order(array('id'))->select();
        
        $cid = I('get.cid');
        if(!empty($cid)){
            $clo = M('category')->find($cid);
        }
        
        $jsid = M('category')->where(array('name'=>'行业资讯'))->find();
        $jslist = M('article')->where(array('cid'=>$jsid['id']))->order(array('publishtime'=>'desc'))->limit(0,10)->select();
        
        $this->assign('clo',$clo);
        $this->assign('intorColumn',$intorColumn);
        $this->assign('jslist',$jslist);
       $this->display();
	}
}

?>