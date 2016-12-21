<?php
namespace Admin\Model; 
use Think\Model;
class NewsModel extends Model{
	protected $_validate = array(
		array('title', 'require', '标题不能为空'),
		array('title','','标题已经存在',0,'unique',1),
		array('summary', 'require', '摘要不能为空'),
		array('content', 'require', '内容不能为空'),
		array('from', 'require', '发布社不能为空')
	);
}