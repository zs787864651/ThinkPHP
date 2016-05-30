<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller
{

    public function login()
    {

        
      if (session('?user_xuehao')==1)
        {
            $arr['login'] ='已登录';
            $arr['renzheng'] ='已认证';
            $this->assign("login",$arr);
            redirect(U('Home/Index/index'), 0, '页面跳转中...');
        }else {
            $arr['login'] ='请登录';
            $arr['renzheng'] ='身份认证';
            $this->assign("login",$arr);
            $this->display('login');
        }

    }

    public function denglu()
    {
        // $Verify = new \Think\Verify();
        // $checkCode = $Verify->check($_POST['verify']);
        // if($checkCode == false){
        // $this->error("验证码错误");
        // }

        
        if ($_POST['floginxuehao'] == '' || $_POST['floginpasswd'] == '') {
            $this->error("请填写完整");
        } else {
            $where['student_id'] = "{$_POST['floginxuehao']}";
            $where['student_id'] = "{$_POST['floginpasswd']}";
            $gradedata = M('grade')->field('ypi_code')->where($where)->select();
            //dump($gradedata);
            if ($gradedata == false) {
                $this->error("数据库|登录失败：姓名或学号错误！");
                $this->display('login');
            } else 
                if (count($gradedata) != 0) {

                    session(array('name'=>'user_id','expire'=>3600));
                    session('user_xuehao',"{$_POST['floginxuehao']}");
                    $value = session('user_xuehao');
                    $this->success("登录成功！$value",U('Home/Index/index'));
                } else {
                    $this->error("登录失败：姓名或学号错误！");
                    $this->display('index');
                }
        }
    }
    
    
    
    public function tuidenglu()
    {
        session('user_xuehao',null); 
        $this->success("退出成功！",U('Home/Index/index'));
    }
    
    
    
    
}