<?php
namespace Admin\Model;
use Think\Model;
class NoteModel extends Model{
	protected $_validate = array(
		array('subject', 'require', '科目不能为空'),
	);
}