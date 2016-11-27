<?php
namespace Home\Model;
use Think\Model;
/**
* 
*/
class UserInfoModel extends Model
{
	
	protected $_auto = array(
			array('pwd','md5',3,'function')
		);
}