<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
     
    public function login(){
       
         if(IS_POST){
            $adminUsersModel=M('administrator');//表名为admin_users,实例化模型时，下划线去掉，后面第一个字母大写
         
         $condition=array( 
                "username" => I("post.username"),
                "password" => I("post.password")
          ); 
         // var_dump($condition);exit;
         $result =$adminUsersModel->where($condition)->count();
         //查询find.select.count方法
         if($result>0){
            session("username",I("post.username"));
            //session存取值，手册
            $this->success("登录成功！",U("Index/index"));
           
         }
         else{
            $this->error("用户名或密码不正确");
         }
    }
         else{
         $this->display();
         }
     }


}




    