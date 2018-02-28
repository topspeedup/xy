<?php
 

namespace app\index\model;

use think\Model;

class ShoplistModel extends Model
{

		protected $pk = 'id';

		protected $table = 'shop';  

	    	public function ShoplistEditData($data)
	   	{

			$CurrentTime = strtotime(gmdate("Y-m-d H:i:s", time()+ 8 * 3600));

			$QueryJsTime = strtotime($data['jstime']);

			$SudgeTimes = $CurrentTime>$QueryJsTime;

			if ($SudgeTimes) {
				
				return ['valid' =>0,'msg' =>'优惠券已过期'];
			}

			$ShopQueryRes = $this->update(
				[
					'id' => $data['id'],
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
					'state' => 0,
					'time'   =>  gmdate("Y-m-d H:i:s", time()+ 8 * 3600),
					'jjine'  => $data['jjine'],
					'fwf'  => $data['fwf'],
					'beizhu'  => $data['beizhu'],
					'changtu' => $data['changtu'],
					'xiaoliang' => $data['xiaoliang'],
				]
			);

			if ($ShopQueryRes) {

					return ['valid' =>1,'msg' =>'提交成功'];

				}else{

					return ['valid' =>0,'msg' =>'提交失败'];
			}

	    	}

	    	public function SingleEditData($data)
	   	{

			$CurrentTime = strtotime(gmdate("Y-m-d H:i:s", time()+ 8 * 3600));

			$QueryJsTime = strtotime($data['jstime']);

			$SudgeTimes = $CurrentTime>$QueryJsTime;

			if ($SudgeTimes) {
				
				return ['valid' =>0,'msg' =>'优惠券已过期'];
			}

			$ShopQueryRes = $this->update(
				[
					'id' => $data['id'],
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
					'state' => 0,
					'time'   =>  gmdate("Y-m-d H:i:s", time()+ 8 * 3600),
					'jjine'  => $data['jjine'],
					'da'  => $data['da'],
					'hao'  => $data['hao'],
					'zhu'  => $data['zhu'],
					'qt'  => $data['qt'],
					'datime'  => $data['datime'],
					'haotime'  => $data['haotime'],
					'zhutime'  => $data['zhutime'],
					'qttime'  => $data['qttime'],
					'fwf'  => $data['fwf'],
					'beizhu'  => $data['beizhu'],
					'changtu' => $data['changtu'],
					'xiaoliang' => $data['xiaoliang'],
				]
			);

			if ($ShopQueryRes) {

					return ['valid' =>1,'msg' =>'提交成功'];

				}else{

					return ['valid' =>0,'msg' =>'提交失败'];
			}

	    	}
}