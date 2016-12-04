<?php
namespace Admin\Controller;
use Think\Controller;
class DataController extends Controller {
	 public function __construct(){
        	parent::__construct();
        	if(!isLogin()){
        		$this->error("请先登录！",U("Login/login"));//使用U函数
        	}
        }
    public function book_add(){
    	$this->display();
        
    }
    public function doAdd(){
      $upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728 ;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','doc','docx');// 设置附件上传类型
	    $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
	    $upload->savePath  =     '../Public/uploads/'; // 设置附件上传（子）目录
	    // 上传文件 
	    $info   =   $upload->upload();
	    if(!$info) {// 上传错误提示错误信息
	       $this->error($upload->getError());
	   }else{// 上传成功
	       //$this->success('上传成功！');
	        // 实例化User模型	   	   
	   	    	$dataModel = D('data');
			// 根据表单提交的POST数据创建数据对象
	    	$data = $dataModel->create();

	    	 if(!$data){
            	$this->error($dataModel->getError());
            }else{

	    	$data['subject']=I("post.subject");
	    	$data['zhaiyao']=I("post.zhaiyao");
	    	$data['grade']=I("post.grade");
	    	$data['dataname']=I("post.dataname");
	    	$data['addtime']=date('Y-m-d H:i:s',time());
	    	
	    	$data['thumb'] = $info['xuanze']['savepath'].$info['xuanze']['savename'];
	    	$data['content']=I("post.content");
	    	  // var_dump($data);exit;
	    	//添加
	    	$num=$dataModel->add($data);
	    	if($num){
	          $this->success('数据添加成功！','book_all');
	    	}else{
              $this->showError('数据添加失败！');
	    	}
	       
	   	    }
			
	    }
    }
    public function book_all(){
    	// $dataModel = M('data');
    	// $data = $dataModel->select();
     //    $this->assign('data',$data);
     //    $this->display();

        $dataModel = D("data");
        $count = $dataModel->count();
        $pagecount = 3;
        $page = new \Think\Page($count , $pagecount);
        $page->parameter = $row; //此处的row是数组，为了传递查询条件
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $show = $page->show();
        $data = $dataModel->order('addtime desc')->limit($page->firstRow.','.$page->listRows)->select();
       $this->assign('data',$data);
        $this->assign('page',$show);
        $this->display();




    }
    public function book_edit(){
        $id=I('id');
    	$dataModel = M('data');
    	$data = $dataModel->find($id); 
    	$this->assign("data",$data);
    	$this->display();
    }
    public function doEdit(){
        $upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728 ;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
	    $upload->savePath  =     '../Public/uploads/'; // 设置附件上传（子）目录
	    // 上传文件 
	    $info   =   $upload->upload();
	    if(!$info) {// 上传错误提示错误信息
	       $this->error($upload->getError());
	   }else{// 上传成功
	       //$this->success('上传成功！');
	        // 实例化User模型
	   	    $id=I('id');
			$dataModel = D('data');
			// 根据表单提交的POST数据创建数据对象
	    	$data = $dataModel->create();
	    	if(!$data){
            	$this->error($dataModel->getError());
            }else{
	    	//设置thumb字段属性值 (目录+名字)
	    	$data['subject']=I("post.subject");
	    	$data['zhaiyao']=I("post.zhaiyao");
	    	$data['grade']=I("post.grade");
	    	$data['dataname']=I("post.dataname");
	    	//$data['inputtime']=date('Y-m-d H:i:s',time());
	    	$data['addtime']=date('Y-m-d H:i:s',time());
	    	
	    	$data['thumb'] = $info['thumb']['savepath'].$info['thumb']['savename'];
	    	$data['content']=I("post.content");
	    	//var_dump($data);exit;
	    	//添加
	    	$num=$dataModel->where("zid=".$id)->save($data);
	    	//var_dump($num);exit;
	    	if($num>0){
	          $this->success('数据修改成功！','book_all');
	    	}else{
              $this->showError('数据修改失败！');
	    	}
	    }
	    }
    }

     public function delete(){
        $id = $_GET['dataId'];
        // var_dump($id);exit;
        if(is_array($id)){
            foreach($id as $value){
                M("data")->delete($value);
            }  
            $this->success("删除成功！");
        } 
        else{
            if(M("data")->delete($id)){
                $this->success("删除成功！");
            }
        }       
    }
}