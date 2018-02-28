<?php

 

namespace app\index\controller;

use think\Controller;

class Api extends Controller
{
    
		public function goods()
		{

			     $getReferLinks = input('link');

			     $getLinksQuery = Db('shop')->where('url',input('link'))->find();

			     // halt($getLinksQuery);

			     if ($getReferLinks) {

				$getUrlQueryData = getQuerystr($getReferLinks,'id');

				$ApiLinks = "http://api.tkjidi.com/getGoodInfo?appkey=a1e55114afd0d76934d677efe0df8c3c&id=".$getUrlQueryData;
				$getQueryContent = file_get_contents($ApiLinks);
				$getDataQualitative = strip_tags($getQueryContent);
				$ApiDataSendOut = json_decode($getDataQualitative,true);
				$DataSuccessfulSending = $ApiDataSendOut['status'];
				$DataQueryInfo = $ApiDataSendOut;
				if ($DataSuccessfulSending == 200) {
					$ApiQueryData = $DataQueryInfo;
				}
				if ($getLinksQuery) {
					return json_encode(['code'=>0,'msg'=>'商品已存在']);
				}else{
					return json_encode($ApiQueryData);
				}
			     	
			     }

		}


		public function coupon()
		{
			$UrlInfoQuery = input('youhui');
			$getReferLinks = input('link');
			$getUrlQueryData = getQuerystr($getReferLinks,'id');
			$UrlActivityData = $this->getQuerystrID($UrlInfoQuery,'activityId');

			$ApiLinks = "https://uland.taobao.com/cp/coupon?activityId=".$UrlActivityData."&itemId=".$getUrlQueryData;
			$getQueryContent = file_get_contents($ApiLinks);
			$getDataQualitative = strip_tags($getQueryContent);
			$ApiDataSendOut = json_decode($getDataQualitative,true);
			return json_encode($ApiDataSendOut);

		}

		private function getQuerystrID($url,$key)
		{
		        $res = '';
		        $a = strpos($url,'?');
		        if($a!==false){
		            $str = substr($url,$a+1);
		            $arr = explode('&',$str);
		            foreach($arr as $k=>$v){
		                $tmp = explode('=',$v);
		                if(!empty($tmp[0]) && !empty($tmp[1])){
		                    $barr[$tmp[0]] = $tmp[1];
		                }
		            }
		        }
		        if(!empty($barr[$key])){
		            $res = $barr[$key];
		        }
		        return $res;
		}

}