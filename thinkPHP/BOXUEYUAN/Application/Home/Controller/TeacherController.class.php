<?php 
namespace Home\Controller;
use Think\Controller; 
class TeacherController extends Controller {
    public function teacher(){
       $teacher=M("teacher");
            $tea=$teacher->order('Tid desc')->select();
            $this->assign('tea',$tea);
             $this->display();

    }
    public function teacher_content(){
        $Tid=$_GET['Tid'];
        $Tcondition=array(
            'Tid'=>$Tid
            );
        $teacher=M('teacher');
        $teachers=$teacher->where($Tcondition)->select();
        $this->assign('teachers',$teachers);
        //shang一篇
         $front=$teacher->where("Tid<". $Tid)->order('Tid desc')->limit('1')->find();
        $this->assign('front',$front);
        //下一篇
        $after=$teacher->where("Tid>".$Tid)->order('Tid asc')->limit('1')->find();
        $this->assign('after',$after);
        $this->display();
    }
    
}
