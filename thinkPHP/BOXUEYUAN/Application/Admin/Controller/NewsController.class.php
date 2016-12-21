<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function __construct(){
          parent::__construct();
          if(!isLogin()){
            $this->error("请先登录！",U("Login/login"));//使用U函数
          }
        }
    public function all(){
    	if(I("get.search")==''){ 
    	$newsModle = M("news");
        $count = $newsModle->count();
        $pagecount = 9; 
        $page = new \Think\Page($count , $pagecount);
        $page->parameter = $row; //此处的row是数组，为了传递查询条件
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $show = $page->show();
        $news = $newsModle->order('id asc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('news',$news);
        $this->assign('page',$show);
        $this->display();
    	}
      else{
         $Goods=M('news');  
         $keyword=$_GET['search'];
          //$where['sid|username']  = array('like','%'.$search.'%'); 
         $condition['name'] = array('like','%'.$keyword.'%');
         $condition['from'] = array('like','%'.$keyword.'%');
         $condition['title'] = array('like','%'.$keyword.'%');
         $condition['addtime'] = array('like','%'.$keyword.'%');
         $condition['updatetime'] = array('like','%'.$keyword.'%');
         $condition['grade'] = array('like','%'.$keyword.'%');
         $condition['course'] = array('like','%'.$keyword.'%');
         $condition['_logic'] = 'OR';
         $goods=$Goods->where($condition)->select();
         $this->assign('news',$goods);
         $this->display();
      }
        
      
    	    
    }
     public function add(){
     	if(IS_POST){
		$NewsaddModel=D('news');
		$nm=$NewsaddModel->create();
		if(!$nm){
			$this->error($NewsaddModel->getError());
		}
		else{
			    $time=date('Y-m-d H:i:s',time());
		$data=array(
			'title'=>I('post.title'),
			'content'=>I('post.content'),
			'grade'=>I('post.grade'),
			'course'=>I('post.course'),
			'summary'=>I('post.summary'),
			'name'=>I('post.name'),
			'from'=>I('post.from'),
			'addtime'=>$time,
			'updatetime'=>$time
			);
		$NewsaddModel->add($data);
		$condition=array(
				'title'=>I('post.title'),
				'name'=>I('post.name'),  
				'grade'=>I('post.grade')
			);
		$result=$NewsaddModel->where($condition)->count();
		if($result>0){
			$this->success("新闻添加成功",U('News/all'));
		}
		}
    
	}
       else{
       	$this->display();
       } 
    }
     public function edit(){
     	$id=$_GET['id'];
        $condition=array('id'=>$id);
         $time1=date('Y-m-d H:i:s',time());
		if(IS_POST){
			$newsmodel=D('news');
			$nm=$newsmodel->create();
			if(!$nm){
			   $this->error($newsmodel->getError());
		     }
		     else{
		     	$data=array(
			'title'=>I('post.title'),
			'content'=>I('post.content'),
			'grade'=>I('post.grade'),
			'course'=>I('post.course'),
			'summary'=>I('post.summary'),
			'name'=>I('post.name'),
			'from'=>I('post.from'),
			'updatetime'=>$time1
			);
			$newsmodel->where($condition)->save($data);
			$this->success("新闻信息修改成功",U('News/all'));
		     }	
		}
		else{
		$newsModel=M('news');
		$news=$newsModel->where($condition)->select();
		$this->assign('newsx',$news);
		$this->display();
		}
    }
    
     public function del(){
        $id = $_GET['id'];
        if(is_array($id)){
            foreach($id as $value){
                M("news")->delete($value);
            }
            $this->success("批量删除成功！",U("News/all"));
        }else{
            if(M("news")->delete($id)){
                $this->success("删除成功！",U("News/all"));
            }else{
                $this->error("删除失败！");
            }
        }
    }
}