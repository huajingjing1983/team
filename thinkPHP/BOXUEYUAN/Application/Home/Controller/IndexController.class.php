<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
   
        public function index(){
        	  if(IS_POST){
              $fankuiModel=M('fankui');
              $nm=$fankuiModel->create();
              if(!$nm){
              $this->error($fankuiModel->getError());
             }
             else{
                $data=array(
                    'Phone'=>I('post.Phone'),
            		'Email'=>I('post.Email'),
            		'Content'=>I('post.Content'),
            		'Name'=>I('post.Name'),
            	);
        		$fankuiModel->add($data);
        		$condition=array(
                'title'=>I('post.title'),
                'name'=>I('post.name'),  
                'grade'=>I('post.grade')
            	);
        		$result=$fankuiModel->where($condition)->count();
        		if($result>0){
            	$this->redirect('Index/index');
        		}
        	}
            }
            else{
               /*名师部分*/
        	$teacher=M("teacher");
        	$tc=$teacher->order('Tid asc')->limit('4')->select();
        	$this->assign('tc',$tc);
            $tcc=$teacher->order('Tid asc')->limit('4,4')->select();
        	$this->assign('tcc',$tcc);
           
        	/*热点资讯部分*/
        	 $newsModel=M("news");
            /*考生新闻*/
            $kaocondition=array(
            	'course'=>array('like',array('%'.考生.'%'))
            	);
            $kaosheng=$newsModel->order("id desc")->where($kaocondition)->limit(4)->select();
            $this->assign('kaosheng',$kaosheng);
            /*提纲新闻*/
             $ticondition=array(
            	'course'=>array('like',array('%'.提纲.'%'))
            	);
            $tigang=$newsModel->order("id desc")->where($ticondition)->limit(4)->select();
            $this->assign('tigang',$tigang);
            /*教育部新闻*/
             $jiaocondition=array(
            	'course'=>array('like',array('%'.教育部.'%'))
            	);
            $jiaoyubu=$newsModel->order("id desc")->where($jiaocondition)->limit(4)->select();
            $this->assign('jiaoyubu',$jiaoyubu);
            /*学科新闻*/
            
             $xuekecondition['course']  =array('in',array('语文','数学','英语','物理','化学','生物','理综','文综'));
             //$xuekecondition['course']  =array('语文','数学','英语','物理','化学','生物','理综','文综','or');
            $$xueke=$newsModel->order("id desc")->where($xuekecondition)->limit(4)->select();
            $this->assign('xueke',$$xueke);
            /*报志愿新闻*/
            $zhiyuancondition=array(
            	'course'=>array('like',array('%'.志愿.'%'))
            	);
            $zhiyuan=$newsModel->order("id desc")->where($zhiyuancondition)->limit(4)->select();
            $this->assign('zhiyuan',$zhiyuan);

            /*反馈意见*/
           
            


           $this->display();
            }
        	
           }



           public function indexlogin(){
              if(IS_POST){
              $fankuiModel=M('fankui');
              $nm=$fankuiModel->create();
              if(!$nm){
              $this->error($fankuiModel->getError());
             }
             else{
                $data=array(
                    'Phone'=>I('post.Phone'),
                    'Email'=>I('post.Email'),
                    'Content'=>I('post.Content'),
                    'Name'=>I('post.Name'),
                );
                $fankuiModel->add($data);
                $condition=array(
                'title'=>I('post.title'),
                'name'=>I('post.name'),  
                'grade'=>I('post.grade')
                );
                $result=$fankuiModel->where($condition)->count();
                if($result>0){
                $this->redirect('Index/indexlogin');
                }
            }
            }
            else{
               /*名师部分*/
            $teacher=M("teacher");
            $tc=$teacher->order('Tid asc')->limit('4')->select();
            $this->assign('tc',$tc);
            $tcc=$teacher->order('Tid asc')->limit('4,4')->select();
            $this->assign('tcc',$tcc);
           
            /*热点资讯部分*/
             $newsModel=M("news");
            /*考生新闻*/
            $kaocondition=array(
                'course'=>array('like',array('%'.考生.'%'))
                );
            $kaosheng=$newsModel->order("id desc")->where($kaocondition)->limit(4)->select();
            $this->assign('kaosheng',$kaosheng);
            /*提纲新闻*/
             $ticondition=array(
                'course'=>array('like',array('%'.提纲.'%'))
                );
            $tigang=$newsModel->order("id desc")->where($ticondition)->limit(4)->select();
            $this->assign('tigang',$tigang);
            /*教育部新闻*/
             $jiaocondition=array(
                'course'=>array('like',array('%'.教育部.'%'))
                );
            $jiaoyubu=$newsModel->order("id desc")->where($jiaocondition)->limit(4)->select();
            $this->assign('jiaoyubu',$jiaoyubu);
            /*学科新闻*/
            
             $xuekecondition['course']  =array('in',array('语文','数学','英语','物理','化学','生物','理综','文综'));
             //$xuekecondition['course']  =array('语文','数学','英语','物理','化学','生物','理综','文综','or');
            $$xueke=$newsModel->order("id desc")->where($xuekecondition)->limit(4)->select();
            $this->assign('xueke',$$xueke);
            /*报志愿新闻*/
            $zhiyuancondition=array(
                'course'=>array('like',array('%'.志愿.'%'))
                );
            $zhiyuan=$newsModel->order("id desc")->where($zhiyuancondition)->limit(4)->select();
            $this->assign('zhiyuan',$zhiyuan);

            /*反馈意见*/
           
            


           $this->display();
            }
            
           }
}