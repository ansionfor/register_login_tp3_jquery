<?php
namespace Home\Model;
use Think\Model;
/**
* 
*/
class UserAdminModel extends Model
{
	
	protected $_auto = array(
			array('pwd','md5',3,'function')
		);
}