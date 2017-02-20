<?php

namespace Home\Controller;

class CompintorController extends HomeCommonController{
    
	public function intors(){
	    header("Content-Type: text/html;charset=utf-8");
	    //公司简介
        $intorid = M('category')->where(array('name'=>'公司简介'))->find();
        $intorColumn = M('category')->where(array('pid'=>$intorid['id']))->order(array('id'))->select();
        
        $cid = I('get.cid');
        if(!empty($cid)){
            $clo = M('category')->find($cid);
            $where = array('cid'=>$cid);
        }
        
        //企业新闻
        $cid = M('category') -> where(array('name'=>'企业新闻'))->find();
        $newslist = M('article')->where(array('cid'=>$cid['id']))->order(array('publishtime'=>'desc'))->limit(0,10)->select();
        
        
        $this->assign('clo',$clo);
        $this->assign('intorColumn',$intorColumn);
        $this->assign('newslist',$newslist);
        
       $this->display();
	}
	
	public function filiale(){
	    //企业新闻
	    $cid = M('category') -> where(array('name'=>'企业新闻'))->find();
	    $newslist = M('article')->where(array('cid'=>$cid['id']))->order(array('publishtime'=>'desc'))->limit(0,10)->select();
	    
	    $this->assign('newslist',$newslist);
	    $this->display();
	}
}

?>