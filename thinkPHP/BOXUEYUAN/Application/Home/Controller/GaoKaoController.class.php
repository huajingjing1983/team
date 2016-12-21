<?php
namespace Home\Controller;
use Think\Controller;
class GaoKaoController extends Controller {
	 public function gaokaozhuanti(){
        	$noteModel=M("note");
        	$note=$noteModel->where('subject="语文" ')->order('Wid asc')->limit(4)->select();
        	$this->assign('note',$note);

        	$note1=$noteModel->where('subject="数学" ')->order('Wid asc')->limit(4)->select();
        	$this->assign('note1',$note1);

        	$note2=$noteModel->where('subject="英语" ')->order('Wid asc')->limit(4)->select();
        	$this->assign('note2',$note2);

        	$note3=$noteModel->where('subject="理综" ')->order('Wid asc')->limit(4)->select();
        	$this->assign('note3',$note3);

        	$note4=$noteModel->where('subject="文综" ')->order('Wid asc')->limit(4)->select();
        	$this->assign('note4',$note4);

        	$testModel=M("test");
        	$test=$testModel->where('kemu="语文" ')->order('Id asc')->limit(8)->select();
        	$this->assign('test',$test);

        	$test1=$testModel->where('kemu="数学" ')->order('Id asc')->limit(8)->select();
        	$this->assign('test1',$test1);

        	$test2=$testModel->where('kemu="英语" ')->order('Id asc')->limit(8)->select();
        	$this->assign('test2',$test2);

        	$test3=$testModel->where('kemu="理综" ')->order('Id asc')->limit(8)->select();
        	$this->assign('test3',$test3);

        	$test4=$testModel->where('kemu="文综" ')->order('Id asc')->limit(8)->select();
        	$this->assign('test4',$test4);



            $this->display();
         
    }
    public function zhenti(){
            
            $id=$_GET['id'];
            $condition=array(
                'id'=> $id
                );
            $dataModel=M('test');
            $data=$dataModel->where($condition)->select();
            $this->assign('data',$data);

            //上一篇
            $front=$dataModel->where("id<".$id)->order('id desc')->limit('1')->find();
            $this->assign('front',$front);
            // //下一篇
            $after=$dataModel->where("id>".$id)->order('id asc')->limit('1')->find();
            $this->assign('after',$after);



        $this->display();
    }
    public function downtest(){
        if($_GET['downid']){
            //var_dump($id);
            $id = $_GET['downid'];
            // var_dump($id);exit;
            $downModel = D("download");
            $data['testid']=$id;
            $data['time']=date('Y-m-d H:i:s',time());
            //var_dump($data);exit;
            $downModel->add($data);
        }
    }

   
      
}