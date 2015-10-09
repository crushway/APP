<?php

namespace Home\Controller;

use Think\Controller;

class FavoriteController extends Controller {
	function getFavorite() {
		$user_id = M ( "User" )->getFieldByUsername ( I ( 'post.username' ) );
		
		if (! $user_id) {
			
			echo '没有这个用户';
			return false;
		}
		session ( 'user_id', $user_id );
		
		if (session ( '?user_id' )) {
			$favorite = M ( "Favorite" );
			$shop_id = $favorite->where ( "favorite_user_id='{$_SESSION['user_id']}'" )->getfield ( 'favorite_shop_id',true );
			$map['shop_id']=array('in',$shop_id);
			$shops = M ( "shop" )->where($map)->select ();
			if ($shops) {
				foreach ( $shops as &$shop ) {
						
			
					$shop ['shop_picture'] = PICTURE_URL . $shop['shop_picture'];
			
				}
			}
			unset($shop);
			$data = array (
					'data' => $shops
			);
			echo json_encode ( $data );
		} else {
			
			echo "请先登录";
		}
		return true;
	}
	function doFavorite() {
		$user_id = M ( "User" )->getFieldByUsername ( I ( 'post.username' ) );
		if (! $user_id) {
			
			echo '没有这个用户';
			return false;
		}
		session ( '$user_id', $user_id );
		if (session ( '?$user_id' )) {
			// 测试数据
			// $_POST ['shop_id'] = '1';
			
			if ($_POST ['shop_name']) {
				$shop = D ( "Shop" );
				$shop_id = $shop->where ( "shop_name='{$_POST['shop_name']}'" )->getField ( 'shop_id' );
				
				$data = array (
						'favorite_shop_id' => $shop_id,
						
						'favorite_shop_name' => $_POST ['shop_name'],
						'favorite_user_id' => $user_id 
				);
				$favorite = M ( "favorite" );
				$info = $favorite->add ( $data );
				if ($info) {
					echo "添加收藏成功";
				} else {
					echo "添加收藏失败";
				}
			}else{
				echo "请输入商店名称";
			}
		} else {
			echo "请先登录";
		}
		return true;
	}
	function _empty() {
		echo "服务器忙";
	}
}