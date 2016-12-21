<?php
namespace Home\Controller;
use Think\Controller;
class NoteController extends Controller {
   
        public function note(){
        	// $noteModel=M("note");
        	// $note=$noteModel->where('subject="语文" ')->order('Wid asc')->limit(4)->select();
        	// $this->assign('note',$note);
        	$id=$_GET['Wid'];
        	$condition=array(
        		'Wid'=> $id
        		);
        	$noteModel=M('note');
        	$note=$noteModel->where($condition)->select();
        	$this->assign('note',$note);
        	//上一篇
        	$front=$noteModel->where("Wid<".$id)->order('wid desc')->limit('1')->find();
        	$this->assign('front',$front);
        	//下一篇
            $after=$noteModel->where("Wid>".$id)->order('Wid asc')->limit('1')->find();
        	$this->assign('after',$after);



        $this->display();
    }
}