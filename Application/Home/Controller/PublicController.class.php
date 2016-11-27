<?php
namespace Home\Controller;

use Think\Controller;

class PublicController extends Controller
{
    public function _initialize()
    {	
    	$user_id = session('user_id');
    	if (empty($user_id)) {
    		$this->error('您还未登录',U('Index/index'));
    	}
    }

}