<?php

namespace Home\Model;

use Think\Model;
header("Content-type:text/html;charset=utf8");
class AddressModel extends Model {
	function showAddress() {
		$info = $this->where ( "address_user_id='{$_SESSION['address_user_id']}'" )->select ();
		return $info;
	}
	function addAddress() {
		
		$_POST ['address_user_id'] = session ( 'address_user_id' );
		if(empty($_POST ['address_name']) ){echo "收货人必须";return false;}
		if(empty($_POST ['address_phone'] )){echo "手机必须";return false;}
		if(empty($_POST ['address_info'] )){echo "地址必须";return false;}
		$data=array('address_user_id'=>$_POST ['address_user_id'],'address_name'=>$_POST ['address_name'],'address_phone'=>$_POST ['address_phone'],'address_info'=>$_POST ['address_info'] );
		
			 $info = $this->data($data)->add ();
			 return $info;
		
	     
			
				
			
		
	
	}
	function modifyAddress() {
		
		$_POST ['address_user_id'] = session ( 'address_user_id' );
		$_POST ['address_id'] = session ( 'address_id' );
		if(empty($_POST ['address_name'] )){echo "收货人必须";return false;}
		if(empty($_POST ['address_phone'] )){echo "手机必须";return false;}
		if(empty($_POST ['address_info'] )){echo "地址必须";return false;}
		
		
		if ($this->create ()) {
			
			$info = $this->save ();
			return $info;
		}else {
			return false;
		}
	}
	function deleteAddress($address_id) {
		$info = $this->where ( "address_id='{$address_id}'" )->delete ();
		return $info;
	}
}