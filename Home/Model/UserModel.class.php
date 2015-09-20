<?php

namespace Home\Model;

use Think\Model;

class UserModel extends Model {
	
	// 获取全部的验证错误
	protected $patchValidate = TRUE;
	protected $_validate = array (
			array (
					'username',
					'require',
					'请输入用户名' 
			),
			array (
					'password',
					'require',
					'请输入密码' 
			),
			array (
					'password2',
					'require',
					"确认密码必须填写！" 
			), // 设置多个验证
			array (
					'password2',
					'password',
					"与密码信息必须一致！",
					0,
					'confirm' 
			),
			array (
					'user_email',
					'email',
					'邮箱格式不正确！' 
			),
			array (
					'phone',
					'/^[1][358][0-9]{9}$/',
					'手机格式不正确',
					0 
			) 
	) // ^[1][358][0-9]{9}$

	;
	
	// 登录验证
	function CheckNamePwd($username, $password) {
		$info = $this->getByUsername ( $username );
 		
		if ($info) {
			if ($info ['password'] == $password) {
				return true; // 密码正确
			} else { // 密码错误
				return false;
			}
		} else { // 没有该用户
			return false;
		}
	}
}