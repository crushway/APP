<?php

namespace Home\Controller;

use Think\Controller;

header ( "Content-type:text/html;charset=utf8" );
class AddressController extends Controller {
	function _empty() {
		echo "服务器忙";
	}
	function address() {
		$user_id = M ( "User" )->getFieldByUsername ( I ( 'post.username' ) );
		if (! $user_id) {
			
			echo '没有这个用户';
			return false;
		}
		session ( 'address_user_id', $user_id );
		
		$info = D ( "Address" );
		
		if ($_POST ['act'] == 'showAddress') {
			$rtn = $info->showAddress ();
			if ($rtn) {
				$data = array (
						'data' => $rtn 
				);
				echo json_encode ( $data );
			} else {
				echo "false";
			}
		}
		if ($_POST ['act'] == 'addAddress') {
			$rtn = $info->addAddress ();
			if ($rtn) {
				echo "true";
			} else {
				echo "false";
			}
		}
		if ($_POST ['act'] == 'modifyAddress') {
			$rtn = $info->modifyAddress ();
			if ($rtn) {
				echo "true";
			} else {
				echo "false";
			}
		}
		if ($_POST ['act'] == 'deleteAddress') {
			$rtn = $info->deleteAddress ( $_POST ['address_id'] );
			if ($rtn) {
				echo "true";
			} else {
				echo "false";
			}
		}
	}
}