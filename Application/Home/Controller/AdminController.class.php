<?php
namespace Home\Controller;
use Think\Controller;

class AdminController extends PublicController
{
    public function _initialize()
    {
        parent::_initialize();
    }

    public function index($value='')
    {
    	$user_info = M('UserInfo');
    	$id = session('user_id');
    	$data = $user_info->where("id='%s'",$id)->find();
    	$this->assign('data',$data);
    	$this->display();
    }

    public function logout()
    {
    	session(null);
    	$this->success("退出成功！",U('Index/index'));
    }
    
}