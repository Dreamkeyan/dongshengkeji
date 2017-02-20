<?php

namespace Home\Controller;
use Think\Page;
class QiyewenhuaController extends HomeCommonController{
    
	public function culture(){
	    header("Content-Type: text/html;charset=utf-8");
	   //企业文化
        $intorid = M('category')->where(array('name'=>'企业文化'))->find();
        $cultureColumn = M('category')->where(array('pid'=>$intorid['id']))->order(array('id'))->select();
        
        $cid = I('get.cid');
        if(!empty($cid)){
            $clo = M('category')->find($cid);
            
            //优秀员工
            if($cid=='46'){
                $ygColumn = M('category')->where(array('pid'=>$cid))->order(array('id'))->select();
                
                $pid = I('get.pid');
                if (empty($pid)){
                    $pid = '55';
                }
                $ygList = M('picture')->where(array('cid'=>$pid))->order(array('publishtime'))->select();
                
                $this->assign('ygColumn',$ygColumn);
                $this->assign('ygList',$ygList);
            }
            //员工天地
            if($cid=='47'){
                 $map=array('cid'=>$cid);
                 $count = M('article')->where($map)->count(); // 查询满足要求的总记录数
                 $Page = new Page($count, 10); // 实例化分页类 传入总记录数和每页显示的记录数
                 $pager = $Page->show(); // 分页显示输出
                 $list = M('article')->where($map)->order(array('publishtime'=>'desc'))->limit($Page->firstRow . ',' . $Page->listRows)->select();
                 $this->assign('list', $list); // 赋值数据集
                 $this->assign('page', $pager); // 赋值分页输出
            }
        }else{
          $clo =  M('category')->where(array('name'=>'使命宣言'))->find();
        }
        
        //企业新闻
        $cid = M('category') -> where(array('name'=>'企业新闻'))->find();
        $newslist = M('article')->where(array('cid'=>$cid['id']))->order(array('publishtime'=>'desc'))->limit(0,10)->select();
        
        
        $this->assign('clo',$clo);
        $this->assign('cultureColumn',$cultureColumn);
        $this->assign('newslist',$newslist);
        
       $this->display();
	}
	
	
	public function ygtdDetail(){
	    header("Content-Type: text/html;charset=utf-8");
	    //企业文化
	    $intorid = M('category')->where(array('name'=>'企业文化'))->find();
	    $cultureColumn = M('category')->where(array('pid'=>$intorid['id']))->order(array('id'))->select();
	    //企业新闻
	    $cid = M('category') -> where(array('name'=>'企业新闻'))->find();
	    $newslist = M('article')->where(array('cid'=>$cid['id']))->order(array('publishtime'=>'desc'))->limit(0,10)->select();
	    
	    $id = I('get.id');
	    $detail = M('article')->find($id);
	    
	    $this->assign('detail',$detail);
	    $this->assign('cultureColumn',$cultureColumn);
	    $this->assign('newslist',$newslist);
	    $this->display();
	}
}

?>