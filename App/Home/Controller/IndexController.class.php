<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //echo C('name').'<br />';
        //echo C('URL_MODEL').'<br />';
        //echo U('Index/user',array('id'=>1),'html',false,'localhost').'<br />';
        //echo show();
        //$arr=array(1,2,3,4,5);
        //dump($arr);
        //$me['name']='zhang';
        //$me['sex']=29;
        //$this->assign('me',$me);
        
        //$where['student_id']=1305210245;
        //$gradedata=M('table_grade')->field('class,name,course_name,grade')->where('student_id=1305210245')->select();
        //dump($data);
        //$this->assign('gradedata',$gradedata);
        //////////
        /*
        if(!Session::is_set(C('USER_AUTH_KEY')))
        //if(!isset($_SESSION['USER_AUTH_KEY'])||($_SESSION['USER_AUTH_KEY']==0))//不能用此句
        {
            $msg="用户没有登录";
        }
        else
        {
            $msg=Session::get(C('USER_AUTH_KEY')).'欢迎你回来';
        }
        $this->assign('msg',$msg);
        $this->display();
        
        */
        

        if (session('?user_xuehao')==1)
        {
            $arr['login'] ='已登录';
            $arr['renzheng'] ='已认证';
            $this->assign("login",$arr);
        }else {
            $arr['login'] ='请登录';
            $arr['renzheng'] ='身份认证';
            $this->assign("login",$arr);
        }
            
        
        /////////////
        $m=M("liuyan");
        $count      = $m->count();
        $Page       = new \Think\Page($count,8);//
        $show       = $Page->show();//
        $arr = $m->order("id desc")->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("arr",$arr);
        $this->assign('page',$show);// 赋值分页输出
        

        $this->display('main');
    }
    
    
}