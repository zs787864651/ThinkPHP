<?php
namespace Home\Controller;

use Think\Controller;

class QueryController extends Controller
{

    public function index()
    {
        // echo C('name').'<br />';
        // echo C('URL_MODEL').'<br />';
        // echo U('Index/user',array('id'=>1),'html',false,'localhost').'<br />';
        // echo show();
        // $arr=array(1,2,3,4,5);
        // dump($arr);
        // $me['name']='zhang';
        // $me['sex']=29;
        // $this->assign('me',$me);
        // $where['student_id']=1305210245;
        // $gradedata=M('grade')->field('class,name,course_name,grade')->where($where)->select();
        // dump($data);
        // $this->assign('gradedata',$gradedata);

       if (session('?user_xuehao')==1)
        {
            $arr['login'] ='已登录';
            $arr['renzheng'] ='已认证';
            $this->assign("login",$arr);
            
            

                $where['student_id'] = session('user_xuehao');
                $gradedata = M('grade')->field('ypi_code,class,name,course_name,grade')->where($where)->select();
                //dump($gradedata);
                if ($gradedata == false) {
                    $this->error("数据库：姓名或学号错误！");
                    $this->display();
                } else
                    if (count($gradedata) != 0) {
                        $this->assign('gradedata', $gradedata);
                        $this->display('grade');
                    } else {
                        $this->error("姓名或学号错误！");
                        $this->display();
                    }
                    
        }else {
            $arr['login'] ='请登录';
            $arr['renzheng'] ='身份认证';
            $this->assign("login",$arr);
            $this->display();
        }

    }

    public function send()
    {
        // $Verify = new \Think\Verify();
        // $checkCode = $Verify->check($_POST['verify']);
        // if($checkCode == false){
        // $this->error("验证码错误");
        // }
        
        
        if (session('?user_grade')==1)
        {
            echo 111;
            $gradedata = session('user_grade');
            
            $this->assign('gradedata', $gradedata);
            $this->display('grade');
            echo 222;
        }else if ($_POST['fquerygname'] == '' || $_POST['fquerygid'] == '') {
            $this->error("请填写完整");
            echo 333;
        } else {
            echo 444;
            $where['student_id'] = "{$_POST['fquerygid']}";
            $where['name'] = "{$_POST['fquerygname']}";
            $gradedata = M('grade')->field('ypi_code,class,name,course_name,grade')->where($where)->select();
            //dump($gradedata);
            if ($gradedata == false) {
                $this->error("数据库：姓名或学号错误！");
                $this->display('index');
            } else 
                if (count($gradedata) != 0) {
                    $this->assign('gradedata', $gradedata);
                    
                    session(array('name'=>'ssgrade','expire'=>3600));
                    session('user_grade',$gradedata);
                    
                    $this->display('grade');
                } else {
                    $this->error("姓名或学号错误！");
                    $this->display('index');
                }
                
        }
        
        
        
        
        
        
        
        
    }
}