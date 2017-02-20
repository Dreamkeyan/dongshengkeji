<?php
/**
 * 资讯动态模块
 * 
 */
namespace Home\Controller;
use Think\Page;
class ZixundongtaiController extends  HomeCommonController{
    public function newsList(){
        header("Content-Type: text/html;charset=utf-8");
        //根据点击的显示页面
        $cid = I('get.cid');
        if (empty($cid)){
            $zx=M('category')->where(array('name'=>'企业新闻'))->find();
        }else{
            $zx=M('category')->find($cid);
        }
            
        //资讯动态
//         $map = array('IN',);
                    
        $zxl = M('category')->where(array('name'=>'资讯动态'))->find();
        $zxlist = M('category')->where(array('pid'=>$zxl['id']))->order('id')->select();
        //典型案例
        $cid = M('category') -> where(array('name'=>'典型案例'))->find();
        $ids = M('category')->field('id')->where(array('pid'=>$cid['id']))->select();
        $ids = col(id, $ids);
        $dxanl = M('article')->where(array('cid'=>array('IN',$ids))) ->order('id')->limit(0,10) ->select();
        
        $map=array('cid'=>$zx['id']);
         $count = M('article')->where($map)->count(); // 查询满足要求的总记录数
         $Page = new Page($count, 11); // 实例化分页类 传入总记录数和每页显示的记录数
         $pager = $Page->show(); // 分页显示输出
         $list = M('article')->where($map)->order(array('publishtime'=>'desc'))->limit($Page->firstRow . ',' . $Page->listRows)->select();
         $this->assign('list', $list); // 赋值数据集
         $this->assign('page', $pager); // 赋值分页输出
        $this->assign('zx',$zx);
        $this->assign('zxlist',$zxlist);
        $this->assign('dxanl',$dxanl);
        $this->display(); // 输出模板
    }
    
    public function newsDetail(){
        header("Content-Type: text/html;charset=utf-8");
        
        //资讯动态
        //         $map = array('IN',);
        $zxl = M('category')->where(array('name'=>'资讯动态'))->find();
        $zxlist = M('category')->where(array('pid'=>$zxl['id']))->order('id')->select();
        //典型案例
        $cid = M('category') -> where(array('name'=>'典型案例'))->find();
        $ids = M('category')->field('id')->where(array('pid'=>$cid['id']))->select();
        $ids = col(id, $ids);
        $dxanl = M('article')->where(array('cid'=>array('IN',$ids))) ->order('id')->limit(0,10) ->select();
        
       
        $id = I('get.id');
        $zixun = M('article')->find($id);
        $cid = $zixun['cid'];
        $lanmu = M('category')->find($cid);
        $this->assign('zixun',$zixun);
        $this->assign('lanmu',$lanmu);
        $this->assign('zxlist',$zxlist);
        $this->assign('dxanl',$dxanl);

        $this->display();
    }
    
    public function zixunList(){
        //资讯动态
        $cid = M('category') -> where(array('name'=>'资讯动态'))->find();
        $ids = M('category')->where(array('pid'=>$cid['id']))->order(array('sort'))->select();
        
        $alList = array();
        for($i=0; $i<count($ids); $i++){
            $dxanl = M('article')->where(array('cid'=>$ids[$i]['id'])) ->order(array('publishtime'=>'desc'))->limit(0,9) ->select();
            $alList[$i] = $dxanl;
        }
        //典型案例
        $anli = M('category') -> where(array('name'=>'典型案例'))->find();
        $cids = M('category')->field('id')->where(array('pid'=>$anli['id']))->select();
        $cids = col(id, $cids);
        $dxanl = M('article')->where(array('cid'=>array('IN',$cids))) ->order('id')->limit(0,3) ->select();
        $this->assign('ids',$ids);
        $this->assign('alList',$alList);
        $this->assign('dxanl',$dxanl);
        $this->display(); // 输出模板
    }
}
