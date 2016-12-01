<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller{
    public function index(){
    	
        $this->display();
    }
   
   public function doAdd(){
 
echo 'this ';
        // if (!IS_POST) {
        //     exit("bad request请求");
        // }
        // $adminModel=D("administrator");
        // if (!$adminModel->create()) {
        //     $this->error($adminModel->getError());
        // }
        // if ($adminModel->add()) {
        // 	echo 'this ';

        //     // $this->success("添加成功",U('admin/add'));
        // }else{
        //     $this->error("添加失败");
        // }

// $this->display();
	}
}