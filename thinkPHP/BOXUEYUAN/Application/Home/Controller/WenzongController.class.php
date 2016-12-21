<?php
namespace Home\Controller;
use Think\Controller;
class WenzongController extends Controller {
     public function wenzong(){
        $dataModel = M("data");
        $data = $dataModel->where('subject="历史" AND grade="高一"')->limit(4)->select();
        // var_dump($data);exit;
        $this->assign("data",$data);

        // $data = $dataModel->where('subject="物理" OR subject="化学" OR subject="生物" ')->limit(4)->select();
        $data1 = $dataModel->where('subject="地理" AND grade="高一"')->limit(4)->select();
        $this->assign("data1",$data1);
        $data2 = $dataModel->where('subject="政治" AND grade="高一"')->limit(4)->select();
        $this->assign("data2",$data2);


        
        $testModel = M("test");
        $test1 = $testModel->join('teacher on test.techid = teacher.Tid')->order('updatetime asc')->limit(6)->select();
         // var_dump($test);exit;
        $this->assign("test1",$test1);

        $test2 = $testModel->join('teacher on test.techid = teacher.Tid')->order('updatetime desc')->limit(6)->select();
         // var_dump($test);exit;
        $this->assign("test2",$test2);


        $video1Model = M("video");
        $video1 = $video1Model->join('teacher on video.Tid = teacher.Tid')->where('subject="历史" AND grade="高一"')->limit(4)->select();
        $this->assign("video1",$video1);

        $video1Model2 = M("video");
        $video2 = $video1Model2->join('teacher on video.Tid = teacher.Tid')->where('subject="地理" AND grade="高一"')->limit(4)->select();
        $this->assign("video2",$video2);

        $video1Model3 = M("video");
        $video3 = $video1Model3->join('teacher on video.Tid = teacher.Tid')->where('subject="政治" AND grade="高一"')->limit(4)->select();
        $this->assign("video3",$video3);


        $data3 = $dataModel->where('subject="历史" AND grade="高二"')->limit(4)->select();
        // var_dump($data);exit;
        $this->assign("data3",$data3);

        // $data = $dataModel->where('subject="物理" OR subject="化学" OR subject="生物" ')->limit(4)->select();
        $data4 = $dataModel->where('subject="地理" AND grade="高二"')->limit(4)->select();
        $this->assign("data4",$data4);
        $data5 = $dataModel->where('subject="政治" AND grade="高二"')->limit(4)->select();
        $this->assign("data5",$data5);

        $video4Model = M("video");
        $video4 = $video4Model->join('teacher on video.Tid = teacher.Tid')->where('subject="历史" AND grade="高二"')->limit(4)->select();
        // var_dump($video4);exit;
        $this->assign("video4",$video4);

        $video1Model5 = M("video");
        $video5 = $video1Model5->join('teacher on video.Tid = teacher.Tid')->where('subject="地理" AND grade="高二"')->limit(4)->select();
        $this->assign("video5",$video5);

        $video1Model6 = M("video");
        $video6 = $video1Model6->join('teacher on video.Tid = teacher.Tid')->where('subject="政治" AND grade="高二"')->limit(4)->select();
        $this->assign("video6",$video6);
        
        $data6 = $dataModel->where('subject="历史" AND grade="高三"')->limit(4)->select();
        // var_dump($data);exit;
        $this->assign("data6",$data6);

        // $data = $dataModel->where('subject="物理" OR subject="化学" OR subject="生物" ')->limit(4)->select();
        $data7 = $dataModel->where('subject="地理" AND grade="高三"')->limit(4)->select();
        $this->assign("data7",$data7);
        $data8 = $dataModel->where('subject="政治" AND grade="高三"')->limit(4)->select();
        $this->assign("data8",$data8);


        $video7Model = M("video");
        $video7 = $video7Model->join('teacher on video.Tid = teacher.Tid')->where('subject="历史" AND grade="高三"')->limit(4)->select();
        // var_dump($video4);exit;
        $this->assign("video7",$video7);

        $video8Model = M("video");
        $video8 = $video8Model->join('teacher on video.Tid = teacher.Tid')->where('subject="地理" AND grade="高三"')->limit(4)->select();
        $this->assign("video8",$video8);

        $video9Model = M("video");
        $video9 = $video9Model->join('teacher on video.Tid = teacher.Tid')->where('subject="政治" AND grade="高三"')->limit(4)->select();
        $this->assign("video9",$video9);
        
       

        $this->display();
    
    }
    public function content($id){
            $dataModel = M("data");
            $data = $dataModel->find($id);
            //var_dump($data);
            $this->assign("data",$data);

            $front = $dataModel->where("zid<".$id)->order('zid desc')->limit("1")->find();
            $this->assign("front",$front); 
            $after = $dataModel->where("zid>".$id)->order('zid asc')->limit("1")->find();
            $this->assign("after",$after); 

             $click = M("data");
            $viewadd = $click->where(array('id' => $id))->setInc('viewcount',1);//页面每刷新一次，浏览次数加1
            $abc = $click -> find($id);
            $this -> assign('abc',$abc);

            $this->display();

    }
    public function downjiaocai(){
        if($_GET['downid']){
            //var_dump($id);
            $id = $_GET['downid'];
            // var_dump($id);exit;
            $downModel = D("download");
            $data['dataid']=$id;
            $data['time']=date('Y-m-d H:i:s',time());
            //var_dump($data);exit;
            $downModel->add($data);
        }
    }
    public function shiti($id){
            $testModel = M("test");
            $data = $testModel->find($id);
            // var_dump($data);exit;
            $this->assign("data",$data);

            $front = $testModel->where("id<".$id)->order('id desc')->limit("1")->find();
            $this->assign("front",$front); 
            $after = $testModel->where("id>".$id)->order('id asc')->limit("1")->find();
            $this->assign("after",$after); 

             

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
   public function newbuy(){
        $id=I("get.id");
        $dataModel = M("data");
        $data = $dataModel->find($id);
        $this->assign("data",$data);
        $datas = $dataModel->where("zid<".$id)->order("zid desc")->limit(4)->select();
        $this->assign("datas",$datas);
        // var_dump($datas);exit;
        $this->display();
    }
    public function newvideo($id){ 
            $videoModel = M("video");
            $data = $videoModel->find($id);
            // var_dump($data);exit;
            $this->assign("data",$data);

            $tuijian = $videoModel->limit(5)->select();
            // var_dump($tuijian);exit;
            $this->assign("tuijian",$tuijian);

           $liuyanModel = M("liuyan");
           $liuyan = $liuyanModel->join("user on liuyan.userid=user.sid")->order('liuyan.lid desc' )->limit('4')->select();
           // var_dump($liuyan);exit;
           $this->assign("liuyan",$liuyan);

           $teacher = $videoModel->join("teacher on video.tid=teacher.tid")->find($id);
           // var_dump($teacher);exit;
           $this->assign("teacher",$teacher);

           $teacherid = $videoModel->where("vid=".$id)->getField("tid");
           // var_dump($videocount);exit;
           $teachersubject = $videoModel->where("tid=".$teacherid)->limit(3)->select();
           // var_dump($teachersubject);exit;
           $this->assign("teachersubject",$teachersubject);

          

         $this->display();
    }
    public function addliuyan(){
        $id=I('id');
        // var_dump($id);exit;
         $liuyanModel = M("liuyan");
        $data = $liuyanModel->create();
         if(!$data){
                $this->error($liuyanModel->getError());
            }else{
             $data['liuyan']=I("post.liuyan");
             if($liuyanModel ->add($data)){
                $this->redirect('Lizong/newvideo', array('id' => $id));
             }
             
            }
    }
}