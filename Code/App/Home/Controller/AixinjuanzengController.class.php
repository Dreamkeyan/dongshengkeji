<?php
/**
 * 资讯动态模块
 * 
 */
namespace Home\Controller;
use Think\Page;
class AixinjuanzengController extends  HomeCommonController{
    
    public function axjz(){
        header("Content-Type: text/html;charset=utf-8");
        
        //典型案例
        $cid = M('category') -> where(array('name'=>'典型案例'))->find();
        $cids = M('category')->field('id')->where(array('pid'=>$cid['id']))->select();
        $cids = col(id, $cids);
        $dxanl = M('article')->where(array('cid'=>array('IN',$cids))) ->order('id')->limit(0,3) ->select();
        
        //爱心捐助
        $cid = M('category') -> where(array('name'=>'爱心捐助'))->find();
        
        $count = M('article')->where(array('cid'=>$cid['id']))->count();
        $page = new Page($count,6);
        $pager = $page->show();
        $list = M('article')->where(array('cid'=>$cid['id']))->order(array('publishtime'))->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list); // 赋值数据集
        $this->assign('page', $pager); // 赋值分页输出
        
        $this->assign('dxanl',$dxanl);
        $this->display(); // 输出模板
    }
    
    public function detail(){
        //公司简介
        $intorid = M('category')->where(array('name'=>'公司简介'))->find();
        $intorColumn = M('category')->where(array('pid'=>$intorid['id']))->order(array('id'))->select();
        
        $id = I('get.id');
        $clo = M('article')->find($id);
        
        $this->assign('intorColumn',$intorColumn);
        $this->assign('clo',$clo);
        $this->display();
    }
   
}
