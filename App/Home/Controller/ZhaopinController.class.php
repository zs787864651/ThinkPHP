<?php
namespace Home\Controller;
use Think\Controller;

class ZhaopinController extends Controller
{

    public function index()
    {
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

          //////////////
        
        //$id = I('get.id');
        $id = 3;
        $m =M('fenlei');
        $fenleiInfo = $m ->where("id ={$id}")->find();
        $this ->assign("fenleiInfo",$fenleiInfo);
        $article = D("article");
        $count      = $article->where("fid = '%s' AND status = 0",$id)->count();//
        $Page       = new \Think\Page($count,4);
        $show       = $Page->show();//
        $articleList = $article->where("fid = '%s' AND status = 0",$id)->relation(true)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("articleList",$articleList);
        $this->assign('page',$show);
        
        /////////////
        
        
        $this->display('zhaopin');

    }
    
    
    
    
    
}