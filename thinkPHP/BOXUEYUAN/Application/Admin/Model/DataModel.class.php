<?php
namespace Admin\Model;
use Think\Model;
class DataModel extends Model{
	protected $_validate = array(
		array('subject', 'require', '科目不能为空'),
		array('grade', 'require', '年级不能为空'),
		array('dataname', 'require', '书名不能为空'),
		array('zhaiyao', 'require', '摘要不能为空'),
		array('content', 'require', '内容不能为空')
	);
}


