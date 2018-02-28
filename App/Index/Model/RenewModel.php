<?php
 

namespace app\index\model;

use think\Model;

class RenewModel extends Model
{

		protected $pk = 'id';

		protected $table = 'shop';  

	    	public function ShopRenewData($data)
	   	{

			$CurrentTime = strtotime(gmdate("Y-m-d H:i:s", time()+ 8 * 3600));

			$QueryJsTime = strtotime($data['jstime']);

			$SudgeTimes = $CurrentTime>$QueryJsTime;

			if ($SudgeTimes) {
				
				return ['valid' =>0,'msg' =>'优惠券已过期'];
			}

			$ShopRenewQueryRes = $this->update(
				[
					'url'   => $data['url'],
					'class'   => $data['class'],
					'shopname'  => $data['shopname'],
					'shoptitle'  => $data['shoptitle'],
					'shopmaxtitle'  => $data['shopmaxtitle'],
					'wenan'  => $data['wenan'],
					'shopimg'  => $data['shopimg'],
					'youhui'  => $data['youhui'],
					'huodong'  => $data['huodong'],
					'dingxiang'  => $data['dingxiang'],
					'yongjin'  => $data['yongjin'],
					'shoujia'  => $data['shoujia'],
					'houjia'  => $data['houjia'],
					'jine'  => $data['jine'],
					'many'  => $data['many'],
					'zong'  => $data['zong'],
					'kstime'  => $data['kstime'],
					'jstime'  => $data['jstime'],
					'userid'  => $data['userid'],
					'user'  => $data['user'],
					'state' => 0,
					'time'   =>  gmdate("Y-m-d H:i:s", time()+ 8 * 3600),
					'jjine'  => $data['jjine'],
					'fwf'  => $data['fwf'],
					'da'  => 0,
					'hao'  => 0,
					'zhu'  => 0,
					'qt'  => 0,
					'beizhu'  => $data['beizhu'],
					'changtu' => $data['changtu'],
					'xiaoliang' => $data['xiaoliang'],
				]
			);

			if ($ShopRenewQueryRes) {

					return ['valid' =>1,'msg' =>'续单成功'];

				}else{

					return ['valid' =>0,'msg' =>'续单失败'];
			}

	    	}
}