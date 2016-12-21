<?php
namespace Admin\Model;
use Think\Model;
class VideoModel extends Model{ 
	protected $_validate = array(
		array('subject', 'require', '科目不能为空'),
		array('videoname', 'require', '视频名称不能为空'),
		array('Tid', 'require', '上传者不能为空'),		
		array('address', 'require', '上传文件不能为空'),
		
	);
}
