<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends PublicController
{
    public function _initialize()
    {
        // Parent::_initialize();
    }

    public function index($value='')
    {
    	$this->display();
    }
}