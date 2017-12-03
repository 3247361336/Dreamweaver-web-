<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class MajorModel extends RelationModel {
	protected $_link = array(
		'book'=>self::HAS_MANY,
	);
}
?>