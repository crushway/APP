<?php

namespace Home\Model;

use Think\Model;

class FavoriteModel extends Model {
	protected $_validate = array (
			'favorite',
			'',
			'已经收藏',
			0,
			'unique',
			1 
	);
}