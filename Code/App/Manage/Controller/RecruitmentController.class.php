<?php
namespace Manage\Controller;
use Common\Lib\Category;
/**
 * 招聘
 * 
 * @author Administrator
 *
 */
class RecruitmentController extends CommonContentController{
    
    public function index(){
        
   		$pid = I('pid', 0, 'intval');//类别ID
   		
		$keyword = I('keyword', '', 'htmlspecialchars,trim');//关键字
		//所有子栏目列表
		$cate = get_category();//全部分类
		$subcate = Category::toLayer(Category::clearCate(Category::getChilds($cate, $pid),'type'),'child',$pid);//子类,多维
		$poscate = Category::getParents($cate, $pid);


		if ($pid) {			
			$idarr = Category::getChildsId($cate, $pid, 1);//所有子类ID
		}
		if (!empty($keyword)) {
			$where['gangwei'] = array('LIKE', "%{$keyword}%");
		}
		
		$count = M('recruitment')->where($where)->count();
		$page = new \Common\Lib\Page($count, 10);
		$page->rollPage = 7;
		$page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		$limit = $page->firstRow. ',' .$page->listRows;
		$art = M('recruitment')->where($where)->order('id')->limit($limit)->select();
        
		$this->assign('pid', $pid);
		$this->assign('subcate', $subcate);
		$this->assign('poscate', $poscate);
		$this->assign('keyword', $keyword);
		$this->assign('page', $page->show());
		$this->assign('vlist', $art);
		$this->display();
    }
    
    public function add(){
       //当前控制器名称		
		$actionName = strtolower(CONTROLLER_NAME);
		$pid = I('pid', 0, 'intval');

		if (IS_POST) {
			$this->addPost();
			exit();
		}

		$cate = get_category(2);
		$cate = get_category_access(Category::getLevelOfModel(Category::toLevel($cate), $actionName),'add');

		$this->assign('pid', $pid);
		$this->assign('cate', $cate);
		$this->assign('flagtypelist', get_item('flagtype'));
		$this->display();
    }
   public function addPost(){
        
       $data = I('post.');
       $data['gangwei'] = I('gangwei');
       $data['num'] = I('num',1,'intval');
       $data['address'] = I('address','');
       $data['gongzi'] = I('gongzi','');
       $data['addtime'] = I('addtime');
       $data['timeover'] = I('timeover','');
       $data['information'] = I('information','');
       $data['info'] = I('info','');
       
       
       if (empty($data['gangwei'])) {
           $this->error('招聘职位不能为空！');
       }
       
      if(M('recruitment')->add($data)){
          $this->success('添加成功',U('Recruitment/index'));
      }else{
          $this->error('添加失败');
      }
    }
}