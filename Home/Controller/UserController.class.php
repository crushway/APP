<?php

namespace Home\Controller;

use Think\Controller;

header ( "Content-Type:text/HTML;charset=utf8" );
class UserController extends Controller {
	function _empty() {
		echo "服务器忙";
	}
	function login() {
		// echo "用户登录" . "<br />";
		// 测试数据
		
		// $_POST ['username'] = 'qing'; // 用户名
		// $_POST ['password'] = 'qing'; // 密码
		if (! empty ( $_POST )) {
			
			$user = new \Home\Model\UserModel ();
			
			if ($user->CheckNamePwd ( $_POST ['username'], $_POST ['password'] )) {
				// echo "登录成功";
				$_SESSION [username] = $_POST ['username'];
				
				return true; // 登录成功
			} else {
				// echo "验证失败";
				return false; // 验证失败
			}
		}
		
		// echo "要提交点东西啊，你什么都没提交（POST）";
		return false;
	}
	function register() {
		
		// 测试数据
		
		// $_POST ['username'] = 'qing'; // 用户名
		// $_POST ['password'] = 'qing'; // 密码
		// $_POST ['password2'] = 'qing'; // 密码
		// $_POST ['phone'] = '13580381716'; // 手机
		// $_POST ['user_email'] = 'qing@qq.com'; // 邮箱
		if (! empty ( $_POST )) {
			$user = D ( "User" );
			
			$msg = $user->create ();
			
			if (! $msg) {
				
				$rst = $user->getError ();
				foreach ( $rst as $message ) {
					echo $message . "<br />";
				}
				return false;
			}
			$result = $user->add ();
			
			if ($result) {
				// echo "注册成功";
				return true;
			} else {
				// echo "注册失败";
			}
		}
		// echo "要提交点东西啊，你什么都没提交（POST）";
		return false;
	}
}