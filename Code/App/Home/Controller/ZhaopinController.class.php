<?php
namespace Home\Controller;

class ZhaopinController extends HomeCommonController{
    
    public function recruit(){
        
         header("Content-Type: text/html;charset=utf-8");
	    //招聘
        $intorid = M('category')->where(array('name'=>'招聘英才'))->find();
        $intorColumn = M('category')->where(array('pid'=>$intorid['id']))->order(array('id'))->select();
        
        $cid = I('get.cid');
        if(!empty($cid)){
            $clo = M('category')->find($cid);
            $where = array('cid'=>$cid);
        }else {
            $clo = M('category')->find('53');
        }
        
        //企业新闻
        $cid = M('category') -> where(array('name'=>'企业新闻'))->find();
        $newslist = M('article')->where(array('cid'=>$cid['id']))->order(array('publishtime'=>'desc'))->limit(0,10)->select();
        
        //招聘信息
        $zhaopinList = M('recruitment')->select();
        
        $this->assign('list',$zhaopinList);
        $this->assign('clo',$clo);
        $this->assign('intorColumn',$intorColumn);
        $this->assign('newslist',$newslist);
        
       $this->display();
    }
}

