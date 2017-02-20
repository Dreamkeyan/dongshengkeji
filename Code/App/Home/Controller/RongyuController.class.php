<?php

namespace Home\Controller;
use Think\Page;
class RongyuController extends HomeCommonController{
    
	public function hornor(){
	    header("Content-Type: text/html;charset=utf-8");
	   //荣誉
        $intorid = M('category')->where(array('name'=>'荣誉'))->find();
        $cultureColumn = M('category')->where(array('pid'=>$intorid['id']))->order(array('id'))->select();
        
        $cid = I('get.cid');
        if(!empty($cid)){
            $clo = M('category')->find($cid);
            
            //荣誉资质
            if($cid=='49'){
                $ryList = M('picture')->where(array('cid'=>$cid))->order(array('publishtime'))->select();
                
                $this->assign('ryList',$ryList);
            }
            //用户评论
            if($cid=='50'){
                 $map=array('cid'=>$cid);
                 $count = M('picture')->where($map)->count(); // 查询满足要求的总记录数
                 $Page = new Page($count, 8); // 实例化分页类 传入总记录数和每页显示的记录数
                 $pager = $Page->show(); // 分页显示输出
                 $list = M('picture')->where($map)->order(array('publishtime'))->limit($Page->firstRow . ',' . $Page->listRows)->select();
                 $this->assign('list', $list); // 赋值数据集
                 $this->assign('page', $pager); // 赋值分页输出
            }
        }else{
          $clo =  M('category')->where(array('name'=>'荣誉资质'))->find();
          $ryList = M('picture')->where(array('cid'=>'49'))->order(array('publishtime'))->select();
          $this->assign('ryList',$ryList);
        }
        
        //企业新闻
        $cid = M('category') -> where(array('name'=>'企业新闻'))->find();
        $newslist = M('article')->where(array('cid'=>$cid['id']))->order(array('publishtime'=>'desc'))->limit(0,10)->select();
        
        
        $this->assign('clo',$clo);
        $this->assign('cultureColumn',$cultureColumn);
        $this->assign('newslist',$newslist);
        
       $this->display();
	}
	
	
	public function pjDetail(){
   	    header("Content-Type: text/html;charset=utf-8");
	   //荣誉
        $intorid = M('category')->where(array('name'=>'荣誉'))->find();
        $cultureColumn = M('category')->where(array('pid'=>$intorid['id']))->order(array('id'))->select();
        
        $id = I('get.id');
        $clo = M('picture')->find($id);
        //企业新闻
        $cid = M('category') -> where(array('name'=>'企业新闻'))->find();
        $newslist = M('article')->where(array('cid'=>$cid['id']))->order(array('publishtime'=>'desc'))->limit(0,10)->select();
        
        
        $this->assign('clo',$clo);
        $this->assign('cultureColumn',$cultureColumn);
        $this->assign('newslist',$newslist);
        
       $this->display();
	}
}

?>