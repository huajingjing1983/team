<?php
namespace Home\Controller;
use Think\Controller;
class PersonController extends Controller {
    //选择进入老师页还是学生页
	public function person(){
		$identity = $_SESSION['identity'];
        if($identity == 'student'){
        	$this->redirect('person/person_student');
        }
        if($identity == 'teacher'){
        	$this->redirect('person/person_teacher');
        }
	}
    //学生页的操作
    public function person_student(){
        //获取学生信息
        $username = $_SESSION['username'];
        $userModel = D("User");
        $user = $userModel->where("username='%s'",$username)->find();
        $this->assign('user',$user);
        //试题下载历史
        $sid = $userModel->where("username='%s'",$username)->getField('sid');
        $downloadModel = M('download');
        $counttest = $downloadModel->where("sdownid=$sid and testid>0")->count();
        $pagecounttest = 5;
        $pagetest = new \Think\Page($counttest , $pagecounttest);
        $pagetest->parameter = $row; //此处的row是数组，为了传递查询条件
        $pagetest->setConfig('first','首页');
        $pagetest->setConfig('prev','上一页');
        $pagetest->setConfig('next','下一页');
        $pagetest->setConfig('last','尾页');
        $pagetest->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecounttest.' 条/页 共 %TOTAL_ROW% 条)');
        $showtest = $pagetest->show();
        $test = $downloadModel->join('left join test on download.testid=test.id')->where("sdownid=$sid and testid>0")->select();
        $this->assign('pagetest',$showtest);
        $this->assign('dtest',$test);
        //教材下载历史
        $countdata = $downloadModel->where("sdownid=$sid and dataid>0")->count();
        $pagecountdata = 5;
        $pagedata = new \Think\Page($countdata , $pagecountdata);
        $pagedata->parameter = $row; //此处的row是数组，为了传递查询条件
        $pagedata->setConfig('first','首页');
        $pagedata->setConfig('prev','上一页');
        $pagedata->setConfig('next','下一页');
        $pagedata->setConfig('last','尾页');
        $pagedata->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $showdata = $pagedata->show();
        $data = $downloadModel->join('left join data on download.dataid=data.zid')->where("sdownid=$sid and dataid>0")->select();
        $this->assign('pagedata',$showdata);
        $this->assign('ddata',$data);
        //视频下载
        $countvideo = $downloadModel->where("sdownid=$sid and videoid>0")->count();
        $pagecountvideo = 5;
        $pagevideo = new \Think\Page($countvideo , $pagecountvideo);
        $pagevideo->parameter = $row; //此处的row是数组，为了传递查询条件
        $pagevideo->setConfig('first','首页');
        $pagevideo->setConfig('prev','上一页');
        $pagevideo->setConfig('next','下一页');
        $pagevideo->setConfig('last','尾页');
        $pagevideo->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $showvideo = $pagevideo->show();
        $video = $downloadModel->join('left join video on download.videoid=video.vid')->where("sdownid=$sid and videoid>0")->select();
        $this->assign('pagevideo',$showvideo);
        $this->assign('dvideo',$video);
        $this->display();
    }

    //老师页的操作
    public function person_teacher(){
        //获取老师信息
        $username = $_SESSION['username'];
        $teacherModel = D("Teacher");
        $teacher = $teacherModel->where("username='%s'",$username)->find();
        $this->assign('teacher',$teacher);
        //获取上传历史
        $tid = $teacherModel->where("username='%s'",$username)->getField('tid');
        $videoModel = D("Video");
        $count = $videoModel->where("tid='%d'",$tid)->count();
        $pagecount = 5;
        $page = new \Think\Page($count , $pagecount);
        $page->parameter = $row; //此处的row是数组，为了传递查询条件
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $show = $page->show();
        $tup = $videoModel->where("tid='%d'",$tid)->order('tid asc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('tup',$tup);
        //试题下载历史
        $downloadModel = M('download');
        $counttest = $downloadModel->where("tdownid=$tid and testid>0")->count();
        $pagecounttest = 5;
        $pagetest = new \Think\Page($counttest , $pagecounttest);
        $pagetest->parameter = $row; //此处的row是数组，为了传递查询条件
        $pagetest->setConfig('first','首页');
        $pagetest->setConfig('prev','上一页');
        $pagetest->setConfig('next','下一页');
        $pagetest->setConfig('last','尾页');
        $pagetest->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecounttest.' 条/页 共 %TOTAL_ROW% 条)');
        $showtest = $pagetest->show();
        $test = $downloadModel->join('left join test on download.testid=test.id')->where("tdownid=$tid and testid>0")->select();
        $this->assign('pagetest',$showtest);
        $this->assign('dtest',$test);
        //教材下载历史
        $countdata = $downloadModel->where("tdownid=$tid and dataid>0")->count();
        $pagecountdata = 5;
        $pagedata = new \Think\Page($countdata , $pagecountdata);
        $pagedata->parameter = $row; //此处的row是数组，为了传递查询条件
        $pagedata->setConfig('first','首页');
        $pagedata->setConfig('prev','上一页');
        $pagedata->setConfig('next','下一页');
        $pagedata->setConfig('last','尾页');
        $pagedata->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $showdata = $pagedata->show();
        $data = $downloadModel->join('left join data on download.dataid=data.zid')->where("tdownid=$tid and dataid>0")->select();
        $this->assign('pagedata',$showdata);
        $this->assign('ddata',$data);
        //视频下载
        $countvideo = $downloadModel->where("tdownid=$tid and videoid>0")->count();
        $pagecountvideo = 5;
        $pagevideo = new \Think\Page($countvideo , $pagecountvideo);
        $pagevideo->parameter = $row; //此处的row是数组，为了传递查询条件
        $pagevideo->setConfig('first','首页');
        $pagevideo->setConfig('prev','上一页');
        $pagevideo->setConfig('next','下一页');
        $pagevideo->setConfig('last','尾页');
        $pagevideo->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $showvideo = $pagevideo->show();
        $video = $downloadModel->join('left join video on download.videoid=video.vid')->where("tdownid=$tid and videoid>0")->select();
        $this->assign('pagevideo',$showvideo);
        $this->assign('dvideo',$video);
        $this->display();
    }
    //老师页上传视频
    public function doAdd(){
      $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('mp4');// 设置附件上传类型
        $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
        $upload->savePath  =     '../Public/uploads/'; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
           $this->error($upload->getError());
       }else{// 上传成功
            // 实例化User模型           
            $videoModel = D('video');
            // 根据表单提交的POST数据创建数据对象
            $data = $videoModel->create();
            if(!$data){
                $this->error($videoModel->getError());
            }
            else{
                //设置thumb字段属性值 (目录+名字)
                $data['addtime']=date('Y-m-d H:i:s',time());
                $data['updatetime']=date('Y-m-d H:i:s',time());
                $data['address'] = $info['address']['savepath'].$info['address']['savename'];
                if($videoModel->add($data)){
                  $this->redirect('person/person_teacher');
                }else{
                  $this->showError('数据添加失败！');
                }
            } 
            
        }
    }
    //修改学生信息
    public function edit_student($id){
        if(isset($_POST['submit'])){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize  = 3145728 ;// 设置附件上传大小
            $upload->exts     = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = THINK_PATH; // 设置附件上传根目录
            $upload->savePath = '../Public/uploads/'; // 设置附件上传（子）目录
            $info = $upload->upload();
            if(!$info) {
                $this->error($upload->getError()); // 上传错误提示错误信息
            }else{
                $userModel = D("User"); //创建模型
                $data = $userModel->create(); //组织数据
                //设置img字段属性(目录+名字)
                $data['img']=$info['img']['savepath'].$info['img']['savename'];
                $data['lasttime'] = date("Y-m-d H:i:s"); //添加最新更改时间
                if($userModel->where("sid='%d'",$id)->save($data)){
                    $this->redirect("Home/person/person_student");
                }else{
                    $this->error("修改失败！");
                }
            }
        }
        else{
            $id = isset($_GET['id']) ? intval($_GET['id']) : ''; //获得修改用户的ID
            $userModel = D("User");
            $user = $userModel->where("sid='%d'",$id)->find(); //从数据库找到需要修改的用户信息
            $this->assign("user",$user);
            $this->display();
        }
    }
    //修改老师信息
    public function edit_teacher($id){
        if(isset($_POST['submit'])){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize  = 3145728 ;// 设置附件上传大小
            $upload->exts     = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = THINK_PATH; // 设置附件上传根目录
            $upload->savePath = '../Public/uploads/'; // 设置附件上传（子）目录
            $info = $upload->upload();
            if(!$info) {
                $this->error($upload->getError()); // 上传错误提示错误信息
            }else{
                $teacherModel = D("Teacher"); //创建模型
                $data = $teacherModel->create(); //组织数据
                //设置img字段属性(目录+名字)
                $data['img']=$info['img']['savepath'].$info['img']['savename'];
                $data['lasttime'] = date("Y-m-d H:i:s"); //添加最新更改时间
                if($teacherModel->where("tid='%d'",$id)->save($data)){
                    $this->redirect("Home/person/person_teacher");
                }else{
                    $this->error("修改失败！");
                }
            }
        }
        else{
            $id = isset($_GET['id']) ? intval($_GET['id']) : ''; //获得修改用户的ID
            $teacherModel = D("Teacher");
            $teacher = $teacherModel->where("tid='%d'",$id)->find(); //从数据库找到需要修改的用户信息
            $this->assign("teacher",$teacher);
            $this->display();
        }
    }


}