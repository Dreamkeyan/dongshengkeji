<?php
/**
 * 产品介绍模块
 * 
 */
namespace Home\Controller;
use Think\Page;
class ProductController extends  HomeCommonController{
      
    public function productList(){
        //产品介绍子栏目
        $productid = M('category')->where(array('name'=>'产品介绍'))->find();
        $productColumn = M('category')->where(array('pid'=>$productid['id']))->order(array('id'))->select();
        
        //行业技术
        $jsid = M('category')->where(array('name'=>'行业技术'))->find();
        $jslist = M('article')->where(array('cid'=>$jsid['id']))->order(array('publishtime'=>'desc'))->select();
        
        $cid = I('get.cid');
        if(!empty($cid)){
            $clo = M('category')->find($cid);
            $where = array('cid'=>$cid);
        }
        
        //产品列表
        $count = M('product')->where($where)->count(); // 查询满足要求的总记录数
        $Page = new Page($count, 8); // 实例化分页类 传入总记录数和每页显示的记录数
        $pager = $Page->show(); // 分页显示输出
        $list = M('product')->where($where)->order(array('publishtime'=>'desc'))->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list); // 赋值数据集
        $this->assign('page', $pager); // 赋值分页输出
        
        $this->assign('clo',$clo);
        $this->assign('productColumn',$productColumn);
        $this->assign('jslist',$jslist);
        $this->display();
        
    }
    
    
    public function productDetail(){
        //产品介绍子栏目
        $productid = M('category')->where(array('name'=>'产品介绍'))->find();
        $productColumn = M('category')->where(array('pid'=>$productid['id']))->order(array('id'))->select();
        
        $cid = I('get.cid');
        if(!empty($cid)){
            $clo = M('category')->find($cid);
            $where = array('cid'=>$cid);
        }
        
        $id=I('get.id');
        $product = M('product')->find($id);
        
        
        //企业新闻
        $cid = M('category') -> where(array('name'=>'企业新闻'))->find();
        $newslist = M('article')->where(array('cid'=>$cid['id']))->order(array('publishtime'=>'desc'))->limit(0,10)->select();
        
        
        $this->assign('clo',$clo);
        $this->assign('productColumn',$productColumn);
        $this->assign('product',$product);
        $this->assign('newslist',$newslist);
        
        $this->display();
    }
    
}
?>