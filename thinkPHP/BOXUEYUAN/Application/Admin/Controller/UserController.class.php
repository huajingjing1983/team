<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    //请先登录
    public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录！",U("Login/login"));//使用U函数
        }
    }
    //用户添加页
    public function user_add(){  
        $this->display();
    }
    //添加用户
    public function doAdd(){   
        if(!IS_POST){
            exit("bad request!");
        }
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->exts     = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = THINK_PATH; // 设置附件上传根目录
        $upload->savePath = '../Public/uploads/'; // 设置附件上传（子）目录
        $info = $upload->upload();
        if(!$info) {
            $this->error($upload->getError()); // 上传错误提示错误信息
        }else{
            $userModel = D("User"); //创建模型
            $data = $userModel->create(); //组织数据
            if(!$data){
            	exit($userModel->getError());
            }else{
            	//设置img字段属性(目录+名字)
                $data['img']=$info['img']['savepath'].$info['img']['savename'];
                $data['registertime'] = date("Y-m-d H:i:s"); //添加注册时间
                $data['lasttime'] = date("Y-m-d H:i:s"); //添加最新更改时间
                if($userModel->add($data)){
        	        $this->success("添加成功！",U("Admin/user/user_all"));
                }else{
        	        $this->error("插入失败！");
                }
            }
        }
    }
    //用户列表页
    public function user_all(){
        if(I("get.search") == ''){
            $userModel = D("User");
            $count = $userModel->count();
            $pagecount = 3;
            $page = new \Think\Page($count , $pagecount);
            $page->parameter = $row; //此处的row是数组，为了传递查询条件
            $page->setConfig('first','首页');
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
            $show = $page->show();
            $user = $userModel->order('sid asc')->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('user',$user);
            $this->assign('page',$show);
            $this->display(); 
        }else{
            $search = $_GET['search'];  //获取搜索关键字
            $userModel = D("User"); 
            $where['sid|username']  = array('like','%'.$search.'%'); //用like条件搜索sid和username两个字段
            $user=$userModel->where($where)->select();
            if($user)  
            {  
                $count = $userModel->count();
                $pagecount = 3;
                $page = new \Think\Page($count , $pagecount);
                $page->parameter = $row; //此处的row是数组，为了传递查询条件
                $page->setConfig('first','首页');
                $page->setConfig('prev','上一页');
                $page->setConfig('next','下一页');
                $page->setConfig('last','尾页');
                $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
                $show = $page->show();
                $this->assign('user',$user);
                $this->assign('page',$show);
                $this->display();  
            }else{  
                $this->error("查询失败！");  
            }  
        }     
    }
    //修改用户信息
    public function user_edit($id){
        if(isset($_POST['submit'])){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize  = 3145728 ;// 设置附件上传大小
            $upload->exts     = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = THINK_PATH; // 设置附件上传根目录
            $upload->savePath = '../Public/uploads/'; // 设置附件上传（子）目录
            $info = $upload->upload();
            if(!$info) {
                $this->error($upload->getError()); // 上传错误提示错误信息
            }else{
                $userModel = D("User"); //创建模型
                $data = $userModel->create(); //组织数据
                if(!$data){
                    exit($userModel->getError());
                }else{
                    //设置img字段属性(目录+名字)
                    $data['img']=$info['img']['savepath'].$info['img']['savename'];
                    $data['lasttime'] = date("Y-m-d H:i:s"); //添加最新更改时间
                    if($userModel->where("sid='%d'",$id)->save($data)){
                        $this->success("编辑成功！",U("Admin/user/user_all"));
                    }else{
                        $this->error("编辑失败！");
                    }
                }
            }
        }
        else{
        	$id = isset($_GET['id']) ? intval($_GET['id']) : ''; //获得修改用户的ID
        	$userModel = D("User");
        	$user = $userModel->where("sid='%d'",$id)->find(); //从数据库找到需要修改的用户信息
        	$this->assign("user",$user);
        	$this->display();
        }
    }
   
    //批量删除用户
    public function del(){
        $id = $_GET['id'];
        if(is_array($id)){
            foreach($id as $value){
                M("User")->delete($value);
            }
            $this->success("批量删除成功！",U("Admin/User/user_all"));
        }else{
            if(M("User")->delete($id)){
                $this->success("删除成功！",U("Admin/User/user_all"));
            }else{
                $this->error("删除失败！");
            }
        }
    }


}