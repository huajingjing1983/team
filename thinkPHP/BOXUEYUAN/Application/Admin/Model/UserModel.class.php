<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
	protected $_validate = array(
		array('username', 'require', '用户名不能为空'),
		array('username','','用户名已经存在',0,'unique',1),
		array('password', 'require', '密码不能为空'),
		array('repassword', 'require', '确认密码不能为空'),
		array('password','repassword','确认密码不正确',0,'confirm'),
		array('email', 'require', '邮箱不能为空')
	);
}