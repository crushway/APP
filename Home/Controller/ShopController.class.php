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
}