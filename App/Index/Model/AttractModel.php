<?php
 

namespace app\index\model;

use think\Model;

class AttractModel extends Model
{

		protected $pk = 'id';

		protected $table = 'shop';  

	    	public function ReceiveShopData($data)
	   	{

			$validate = new \think\Validate([
			    	'shopmaxtitle' =>'require',
			    	'fwf' =>'require',
			],[
				'shopmaxtitle.require' => '请输入商品短标题',
				'fwf.require' => '请输入服务费单价',
			]);

			if (!$validate->check($data)) {

				return ['valid' =>0,'msg' =>$validate->getError()];
			}

			$CurrentTime = strtotime(gmdate("Y-m-d H:i:s", time()+ 8 * 3600));

			$QueryJsTime = strtotime($data['jstime']);

			$SudgeTimes = $CurrentTime>$QueryJsTime;

			if ($SudgeTimes) {
				
				return ['valid' =>0,'msg' =>'优惠券已过期'];
			}

			$ShopQueryRes = $this->insert(
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
					'beizhu'  => $data['beizhu'],
					'changtu' => $data['changtu'],
					'xiaoliang' => $data['xiaoliang'],
					'userstatu' => $data['userstatu'],
					'hdstastu'  => 0,
					'delstatu'  => 0,
					'qq' => $data['qq'],
				]
			);

			if ($ShopQueryRes) {

					return ['valid' =>1,'msg' =>'发布成功，正在审核中！'];

				}else{

					return ['valid' =>0,'msg' =>'发布失败'];
			}

	    	}
}