<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
       if(IS_POST){
       	if(!$_POST['email']){
       			$identity=$_POST['identity'];
          if($identity=='student'){
          	     $adminUsersModel=M('user');
			     $condition=array(
				'username'=>I('post.username'),
				'password'=>I('post.password')
				);
				//$_SESSION['username']=I('post.username');
				$result=$adminUsersModel->where($condition)->count();
				if($result==1){
					session('username',I('post.username'));
					session('identity',I('post.identity'));
					$this->redirect('Index/indexlogin');
					}
				else{
					$this->error("学生用户名或密码不正确");				
					}
            }/*student*/
           if($identity=='teacher'){
          		 $adminUsersModel=M('teacher');
			     $condition=array(
				'username'=>I('post.username'),
				'password'=>I('post.password')
				);
				//$_SESSION['username']=I('post.username');
				$result=$adminUsersModel->where($condition)->count();
				if($result==1){
					session('username',I('post.username'));
					session('identity',I('post.identity'));
					$this->redirect('Index/indexlogin');
				}
				else{
					$this->error("老师用户名或密码不正确");
				}
          }
       	}/*email*/
       else{
       			$identity=$_POST['identity'];
       		if($identity=='student'){
       				$model=M('user');
		      $model->create();
		      $time=date('Y-m-d',time());
		      $data=array(
				'username'=>I('post.username'),
				'password'=>I('post.password'),
				'email'=>I('post.email'),
				'phone'=>I('post.phone'),
				'registertime'=>$time,
				'lasttime'=>$time
			    );
		      $model->add($data);
		      $condition=array(
				'username'=>I('post.username')
			   );
		      $result=$model->where($condition)->count();
		     if($result>0){
			      $this->success("注册成功",U('Login/login'));
		      }
       		}
       		if($identity=='teacher'){
       		  $model=M('teacher');
		      $model->create();
		      $time=date('Y-m-d',time());
		      $data=array(
				'username'=>I('post.username'),
				'password'=>I('post.password'),
				'email'=>I('post.email'),
				'phone'=>I('post.phone'),
				'registertime'=>$time,
				'lasttime'=>$time
			    );
		      $model->add($data);
		      $condition=array(
				'username'=>I('post.username')
			   );
		      $result=$model->where($condition)->count();
		     if($result>0){
			      $this->success("注册成功",U('Index/indexlogin'));
		      }
       		}
       		  
       }/*else enail*/



































          /*teacher*/
		}/*IS_POST*/
		else{
			$this->display();
		}
    }
}