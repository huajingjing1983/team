<?php
namespace Admin\Controller;
use Think\Controller;
class TestController extends Controller {
   public function __construct(){
          parent::__construct();
          if(!isLogin()){
            $this->error("请先登录！",U("Login/login"));//使用U函数
          }
        }
    public function test_all(){
     //    $ziliaoModel = M('ziliao');
    	// $data = $ziliaoModel->select();
     //    $this->assign('data',$data);




        $ziliaoModel = M('test');
        $count = $ziliaoModel->count();
        $pagecount = 3;
        $page = new \Think\Page($count , $pagecount);
        $page->parameter = $row; //此处的row是数组，为了传递查询条件
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $show = $page->show();
        $data = $ziliaoModel->order('addtime desc')->limit($page->firstRow.','.$page->listRows)->select();
       $this->assign('data',$data);
        $this->assign('page',$show);
        $this->display();
  }
  public function test_add(){
       $this->display();
  }
  public function doAdd(){
  	$data=array(
            'kemu'=>I('post.kemu'),
            'grade'=>I('post.grade'),
            'zname'=>I('post.zname'),
            'zhaiyao'=>I('post.zhaiyao'),
            'content'=>I('post.content'),
            'addtime'=>date('Y-m-d H:i:s',time()),
            'updatetime'=>date('Y-m-d H:i:s',time())
            );
            //var_dump($data);	
        $addzl=D("test");
        $data1=$addzl->create();
        // var_dump($data1);exit;
         if(!$data1){
              $this->error($addzl->getError());
            }else{
        $num=$addzl->add($data);
        if($num>0){
             $this->success("添加资料成功！",'test_all');
        }
        else{
           $this->error($addzl->getError()); 
        }		
      }
  }
  public function test_edit(){
        $id=I('id');
    	$zlModel = M('test');
    	$data = $zlModel->find($id); 
    	$this->assign("data",$data);
    	$this->display();
  }
  public function doEdit(){
  	 if(!IS_POST){
            exit("bad request");
        }
        $id = $_POST['id'];
        // var_dump($id);
       $data=array(
            'kemu'=>I('post.kemu'),
            'grade'=>I('post.grade'),
            'zname'=>I('post.zname'),
            'zhaiyao'=>I('post.zhaiyao'),
            'content'=>I('post.content'),
            'addtime'=>date('Y-m-d H:i:s',time()),
            'updatetime'=>date('Y-m-d H:i:s',time())
            );
       // var_dump($data);exit;
        $addzl=D("test");
         $data1=$addzl->create();
         if(!$data1){
              $this->error($addzl->getError());
            }else{
        $num=$addzl->where('id='.$id)->save($data);
        if($num>0){
             $this->success("修改成功！",'test_all');
         }
         else{
           $this->error($addzl->getError()); 
         }
       }
    }
  public function del(){
        $id = $_GET['dataId'];
        // var_dump($id);exit;
        if(is_array($id)){
            foreach($id as $value){
                M("test")->delete($value);
            }  
            $this->success("删除成功！");
        } 
        else{
            if(M("test")->delete($id)){
                $this->success("删除成功！");
            }
        }       
    }
 

}