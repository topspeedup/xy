<?php
 

namespace app\index\model;

use think\Model;

class ShopInfoModel extends Model
{

		protected $pk = 'id';

		protected $table = 'shopinfo';  

	    	public function UserInfoQuery($data)
	   	{

			$InfoDataRes = $this->insert(
				[
					'shopurl'   => $data['shopurl'],
					'shopname'   => $data['shopname'],
					'shopclass'  => $data['shopclass'],
					'shopqq'  => $data['shopqq'],
					'autqq'  => $data['autqq'],
					'weixin'  => $data['weixin'],
					'beizhu'  => "暂未填写",
					'time'   =>  gmdate("Y-m-d H:i:s", time()+ 8 * 3600),
				]
			);

			if ($InfoDataRes) {

					return ['valid' =>1,'msg' =>'添加成功'];

				}else{

					return ['valid' =>0,'msg' =>'添加失败'];
			}

	    	}
}