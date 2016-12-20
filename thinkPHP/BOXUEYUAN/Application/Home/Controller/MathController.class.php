
<?php  
namespace Home\Controller;
use Think\Controller;
class MathController extends Controller {
    public function Math(){

    //教材
    	$mathModel1=M('data');
    	$math1=$mathModel1->where('subject="数学" AND grade="高一"')->limit(4)->select();
    	$this->assign("math1",$math1);    	

    	$math2=$mathModel1->where('subject="数学" AND grade="高二"')->limit(4)->select();
    	$this->assign("math2",$math2);    	

    	$math3=$mathModel1->where('subject="数学" AND grade="高三"')->limit(4)->select();
    	$this->assign("math3",$math3);    	


    //试题
        $mathModel2=M('test');        
     	$test1 =  $mathModel2->join('teacher on test.techid = teacher.Tid')->order('updatetime asc')->limit(6)->select();     	
     	$this->assign("test1",$test1);
     	$test2 =  $mathModel2->join('teacher on test.techid = teacher.Tid')->order('updatetime desc')->limit(6)->select();     	
     	$this->assign("test2",$test2);

     	$test3 =  $mathModel2->join('teacher on test.techid = teacher.Tid')->order('updatetime asc')->limit(6)->select();     	
     	$this->assign("test3",$test3);
     	$test4 =  $mathModel2->join('teacher on test.techid = teacher.Tid')->order('updatetime desc')->limit(6)->select();     	
     	$this->assign("test4",$test4);


        $test5 =  $mathModel2->join('teacher on test.techid = teacher.Tid')->order('updatetime asc')->limit(6)->select();     	
     	$this->assign("test5",$test5);
     	$test6 =  $mathModel2->join('teacher on test.techid = teacher.Tid')->order('updatetime desc')->limit(6)->select();     	
     	$this->assign("test6",$test6);


    //视频


     	$mathModel3 = M("video");
        $video1 = $mathModel3->join('teacher on video.Tid = teacher.Tid')->where('subject="数学" AND grade="高一"')->limit(4)->select();       
        $this->assign("video1",$video1);

        $video2 = $mathModel3->join('teacher on video.Tid = teacher.Tid')->where('subject="数学" AND grade="高二"')->limit(4)->select();       
        $this->assign("video2",$video1);

        $video3= $mathModel3->join('teacher on video.Tid = teacher.Tid')->where('subject="数学" AND grade="高三"')->limit(4)->select();       
        $this->assign("video3",$video1);


    	
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
           $liuyan = $liuyanModel->join("user on liuyan.userid=user.sid")->select();
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
                $this->redirect('Math/newvideo', array('id' => $id));
             }
             
            }
    }
}
