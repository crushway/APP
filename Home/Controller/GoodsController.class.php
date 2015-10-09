<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type:text/html;charset=utf8");
class GoodsController extends Controller{
	function getAllGoods(){
// 		测试数据
		$_POST['shop_id']=1;
		if(isset($_POST['shop_id'])){
			$Info=M('goods');
			$goods=$Info->where("goods_shop_id='{$_POST['shop_id']}'")->select();
			$data=array('data'=>$goods);
			echo json_encode($data);
			

		}
	}
	function _empty(){
		echo "服务器忙";
	}
}