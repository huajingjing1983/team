<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller{
	
	public function password(){
		$this->display();
	}


	public function edit(){
        $adminModel=D("administrator");
        $admin=$adminModel->select();
        $this->assign('administrator',$admin);
        $this->display();
    }
    // 修改的方法
    public function doEdit(){

        if (!IS_POST) {
            exit("bad request请求");
        }
        $adminModel=D("administrator");
        if (!$adminModel->create()) {
            $this->error($adminModel->getError());
        }
        if ($adminModel->add()) {
            $this->success("添加成功",U("all"));
        }else{
            $this->error("添加失败");
        }
       
    }



    public function add(){
    	$this->display();
    }


    public function add_post()
    {
    	echo 'this ';
    }

	public function doAdd(){
 

        if (!IS_POST) {
            exit("bad request请求");
        }
        $adminModel=D("administrator");
        if (!$adminModel->create()) {
            $this->error($adminModel->getError());
        }
        if ($adminModel->add()) {
        	// echo 'this ';

            $this->success("添加成功",U('admin/all'));
        }else{
            $this->error("添加失败");
        }
}

//添加方法doadd，但是会先跳到add去


    public function delete(){
        $id = $_GET['administratorId'];
        var_dump($id);
        if(is_array($id)){
            foreach($id as $value){
                M("administrator")->delete($value);

            }  
            $this->success("删除成功！");
        } 
     else{
            if(M("administrator")->delete($id)){
                $this->success("删除成功！",U("Admin/admin/all"));
            }else{
                $this->error("删除失败！");
            }
        }      
    }
// 删除方法，先获取之后再删除id即可



  public function pass(){
        $adminModel=D("administrator");
        $admin=$adminModel->select();
        $this->assign('administrator',$admin);
        $this->display();
    }
    public function doPass(){
        if (!IS_POST) {
            exit("bad request请求");
        }
        $adminModel=D("administrator");
        if (!$adminModel->create()) {
            $this->error($adminModel->getError());
        }
        if ($adminModel->add()) {
            $this->success("添加成功",U('admin/all'));
        }else{
            $this->error("添加失败");
        }
    }

    //修改密码创建之后进行修改

  public function all(){
        $adminModle = D("administrator");
        $count = $adminModle->count();
        $pagecount = 3;
        $page = new \Think\Page($count , $pagecount);
        $page->parameter = $row; //此处的row是数组，为了传递查询条件
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $show = $page->show();
        $administrator = $adminModle->order('gid asc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('administrator',$administrator);
        $this->assign('page',$show);
        $this->display();       
    }
//页面的list展示页面。并且进行了页面的页面的获取和排版

// $this->display();
	


 
    

}
