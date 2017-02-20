<?php
/**
 * 资讯动态模块
 * 
 */
namespace Home\Controller;
use Think\Page;
class DianxinganliController extends  HomeCommonController{
    
    public function anllist(){
        header("Content-Type: text/html;charset=utf-8");
        
        //典型案例
        $cid = M('category') -> where(array('name'=>'典型案例'))->find();
        $ids = M('category')->where(array('pid'=>$cid['id']))->order(array('sort'))->select();
        
        $alList = array(); 
        for($i=0; $i<count($ids); $i++){
            $dxanl = M('article')->where(array('cid'=>$ids[$i]['id'])) ->order(array('publishtime'=>'desc'))->limit(0,2) ->select();
            $alList[$i] = $dxanl;
        }
//         $map=array('cid'=>$zx['id']);
//         $count = M('article')->where($map)->count(); // 查询满足要求的总记录数
//         $Page = new Page($count, 11); // 实例化分页类 传入总记录数和每页显示的记录数
//         $pager = $Page->show(); // 分页显示输出
//         $list = M('article')->where($map)->order(array('publishtime'=>'desc'))->limit($Page->firstRow . ',' . $Page->listRows)->select();
//         $this->assign('list', $list); // 赋值数据集
//         $this->assign('page', $pager); // 赋值分页输出

        //典型案例
        $cids = M('category')->field('id')->where(array('pid'=>$cid['id']))->select();
        $cids = col(id, $cids);
        $dxanl = M('article')->where(array('cid'=>array('IN',$cids))) ->order('id')->limit(0,3) ->select();
        $this->assign('ids',$ids);
        $this->assign('alList',$alList);
        $this->assign('dxanl',$dxanl);
        $this->display(); // 输出模板
    }
    
    public function anliDetailList(){
        header("Content-Type: text/html;charset=utf-8");
        
        //根据cid 判断点击的是哪个第二级栏目
        $cid = I('get.cid');
        if (empty($cid)){
            $zx=M('category')->where(array('name'=>'教育系统'))->find();
        }else{
            $zx=M('category')->find($cid);
        }

        //典型案例所以二级目录
        $cid = M('category') -> where(array('name'=>'典型案例'))->find();
        $anlist = M('category')->where(array('pid'=>$cid['id']))->order(array('sort'))->select();
        
        //企业新闻
        $cid = M('category') -> where(array('name'=>'企业新闻'))->find();
        $newslist = M('article')->where(array('cid'=>$cid['id']))->order(array('publishtime'=>'desc'))->limit(0,10)->select();
        
        //二级目录下面的文章列表
        $map=array('cid'=>$zx['id']);
        $count = M('article')->where($map)->count(); // 查询满足要求的总记录数
        $Page = new Page($count, 8); // 实例化分页类 传入总记录数和每页显示的记录数
        $pager = $Page->show(); // 分页显示输出
        $list = M('article')->where($map)->order(array('publishtime'=>'desc'))->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list); // 赋值数据集
        $this->assign('page', $pager); // 赋值分页输出
        
        $this->assign('zx',$zx);
        $this->assign('anlist',$anlist);
        $this->assign('newslist',$newslist);

        $this->display();
    }
    
    
    public function anliDetail(){
        header("Content-Type: text/html;charset=utf-8");
    
        //典型案例所以二级目录
        $cid = M('category') -> where(array('name'=>'典型案例'))->find();
        $anlist = M('category')->where(array('pid'=>$cid['id']))->order(array('sort'))->select();
    
        //企业新闻
        $cid = M('category') -> where(array('name'=>'企业新闻'))->find();
        $newslist = M('article')->where(array('cid'=>$cid['id']))->order(array('publishtime'=>'desc'))->limit(0,10)->select();
    
        //文章内容
        $id = I('get.id');
        $anli = M('article')->find($id);
        $cid = $anli['cid'];
        $lanmu = M('category')->find($cid);
        $this->assign('anli',$anli);
        $this->assign('lanmu',$lanmu);
        
        
        $this->assign('anlist',$anlist);
        $this->assign('newslist',$newslist);
    
        $this->display();
    }
}
