<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends PublicController
{
    public function _initialize()
    {
        parent::_initialize();
    }

    public function index($value='')
    {
    	$this->display();
    }

    public function register($value='')
    {
    	if (IS_POST) {
			
			$rules = array(
					array('type','register','type不为register，注册失败!',1,'equal'),
					array('pwd','pwd2','两次密码不一致',1,'confirm'),
					array('tel','number','手机号码只能为数字',1,''),
					array('email','email','邮箱格式不正确',1,''),
					array('id','12','学号只能为12位数字',1,'length')

			);
			$user = M('UserInfo');
			if (!$user->validate($rules)->create()) {
				$return = $user->getError();
			}else{
				$user->field(array('id','name','tel','email','class'))->add();

			}

    	}else{
    		$return = 2;
    	}

    	$this->ajaxReturn($_POST);
    }

    public function login($value='')
    {
    	if (IS_POST && I('post.type') == 'login') {
    		$data['id'] = I('post.id');
    		$data['pwd'] = I('post.pwd');
    		$result = M('user_admin')->where($data)->find(1);

    		$this->ajaxReturn(I('post.'));
    	}
    }
}