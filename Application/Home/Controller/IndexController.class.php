<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller
{

    public function index($value='')
    {
    	if (session('user_id')) {
    		$this->redirect('Admin/index');
    	}
    	$this->display();
    }

    public function register($value='')
    {
    	if (IS_POST) {
			
			$rules = array(
					array('type','register','type不为register，注册失败!',0,'equal'),
					array('pwd','pwd2','两次密码不一致',0,'confirm'),
					array('tel','number','手机号码只能为数字',0,''),
					array('email','email','邮箱格式不正确',0,''),
					array('id','12','学号只能为12位数字',0,'length'),
					array('id','','学号已存在',0,'unique',1),
					array('pwd','6,18','密码长度不符',0,'length')
			);

			$user_info = D('UserInfo');
			$user_admin = D('UserAdmin');
			if (!$user_info->validate($rules)->create()) {
				$return[0] = $user_info->getError();
			}else{
				$data['id'] = I('post.id');
				$data['pwd'] = md5(I('post.pwd'));
				$return[1] = $user_info->add();
				$return[2] = $user_admin->data($data)->add();
				
				if ($return[1]&&$return[2]) {
					$return[0] = 1;
					session('user_name',I('post.name'));
					session('user_id',$data['id']);

				}
				
			}
	
    	}else{
    		$return[0] = 2;
    	}


    	$this->ajaxReturn($return);
    }

    public function login($value='')
    {
    	if (IS_POST) {
    		$user_admin = M('UserAdmin');
    		$data = I('post.');
    		$result = $user_admin->where("id='%s' and pwd='%s'",$data['id'],md5($data['pwd']))->find();
    		$return = 0;
    		if ($result) {
    			session('user_id',$result['id']);
    			$return = 1;
    		}
    		$this->ajaxReturn($return);
    	}
    }
}