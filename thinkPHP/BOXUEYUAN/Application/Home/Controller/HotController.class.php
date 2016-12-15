<?php
namespace Home\Controller; 
use Think\Controller;
class HotController extends Controller {
   
     public function hot(){
     	$hot=M("news");
     	$hots=$hot->select();
     	$this->assign('hot',$hots);
       $this->display();
    
       }
       public function hot_content(){
        $id=$_GET['id'];
        $condition=array(
          'id'=>$id
          );
        $hot=M("news");
     	  $hots=$hot->where($condition)->select();
     	  $this->assign('hots',$hots);
         //上一篇和下一篇
        //上一篇
         $front=$hot->where("id<".$id)->order('id desc')->limit('1')->find();
        $this->assign('front',$front);
        //下一篇
        $after=$hot->where("id>".$id)->order('id asc')->limit('1')->find();
        $this->assign('after',$after);



        $this->display();
      
     
       }
}
