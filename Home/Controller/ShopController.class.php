<?php

namespace Home\Controller;

use Think\Controller;

class ShopController extends Controller {
	function getAllShop() {
		$shop = M ( "shop" );
		$allShop = $shop->select ();
		
		if ($allShop) {
			foreach ( $allShop as &$Shop ) {
			
				
				$Shop ['shop_picture'] = PICTURE_URL . $Shop['shop_picture'];
				
			}
		}else{
			return false;
		}
		unset($shop);
		$modify = array (
				'data' => $allShop 
		);
		
		
		 echo json_encode($modify);
	}
	function getShopByType(){
// 		测试数据
// 		$_POST['shop_type']='美食';
		$shop=M("shop");
		$info=$shop->where("shop_type='{$_POST['shop_type']}'")->select();
		$data=array('data'=>$info);
		echo json_encode($data);
	}
	function _empty(){
		echo "服务器忙";
	}
}