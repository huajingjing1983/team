<?php
namespace Admin\Controller;
use Think\Controller;
class NoteController extends Controller {
	public function __construct(){
		parent::__construct(); 
		if(!isLogin()){
			$this->error("请先登录",U("Login/login")); 
		}
	}
    //笔记列表页
    public function all(){
    	if(I("get.search")==''){ 
    	$noteModle = M("note");
        $count = $noteModle->count();
        $pagecount = 9; 
        $page = new \Think\Page($count , $pagecount);
        $page->parameter = $row; //此处的row是数组，为了传递查询条件
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $show = $page->show();
        $note = $noteModle->order('Wid asc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('note',$note);
        $this->assign('page',$show);
        $this->display();
    	}
      else{
         $Goods=M('note');  
         $keyword=$_GET['search'];
         $condition['name'] =array('like','%'.$keyword.'%');
         $condition['school'] = array('like','%'.$keyword.'%');
         $condition['title'] = array('like','%'.$keyword.'%');
         $condition['addtime'] =array('like','%'.$keyword.'%');
        $condition['updatetime'] =array('like','%'.$keyword.'%');
         $condition['subject'] = array('like','%'.$keyword.'%');
         $condition['autor'] = array('like','%'.$keyword.'%');
         $condition['_logic'] = 'OR';
         $note=$Goods->where($condition)->select();
         $this->assign('note',$note);
         $this->display();
      }
        

    	
    }
    //笔记添加页
     public function add(){
    	$this->display();
    }
    //添加笔记
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
            $noteModel = D("Note"); //创建模型
            $data = $noteModel->create(); //组织数据
            if(!$data){
                exit($noteModel->getError());
            }else{
                //设置img字段属性(目录+名字)
                $data['img']=$info['img']['savepath'].$info['img']['savename'];
                $data['addtime'] = date("Y-m-d H:i:s"); //添加注册时间
                $data['updatetime'] = date("Y-m-d H:i:s"); //添加最新更改时间
                if($noteModel->add($data)){
                    $this->success("添加成功！",U("Admin/note/all"));
                }else{
                    $this->error("插入失败！");
                }
            }
        }
    }
    //笔记修改页
     public function edit($id){
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
                $noteModel = D("Note"); //创建模型
                $data = $noteModel->create(); //组织数据
                if(!$data){
                    exit($noteModel->getError());
                }else{
                    //设置img字段属性(目录+名字)
                    $data['img']=$info['img']['savepath'].$info['img']['savename'];
                    $data['updatetime'] = date("Y-m-d H:i:s"); //添加最新更改时间
                    if($noteModel->where("wid='%d'",$id)->save($data)){
                        $this->success("编辑成功！",U("Admin/note/all"));
                    }else{
                        $this->error("编辑失败！");
                    }
                }
            }
        }
        else{
            $id = isset($_GET['id']) ? intval($_GET['id']) : ''; //获得修改用户的ID
            $noteModel = D("Note");
            $note = $noteModel->where("wid='%d'",$id)->find(); //从数据库找到需要修改的用户信息
            $this->assign("note",$note);
            $this->display();
        }
    }
    //笔记删除页
     public function del(){
        $id = $_GET['id'];
        if(is_array($id)){
            foreach($id as $value){
                M("Note")->delete($value);
            }
            $this->success("批量删除成功！",U("Admin/note/all"));
        }else{
            if(M("Note")->delete($id)){
                $this->success("删除成功！",U("Admin/note/all"));
            }else{
                $this->error("删除失败！");
            }
        }
    }
}
