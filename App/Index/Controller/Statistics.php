<?php

 

namespace app\index\controller;

use think\Controller;

class Statistics extends Common
{
    
		public function index()
		{
			$kstime = input('kstime');

			$jstime = input('jstime');

			$Realname = input('zsxm');

			$data = self::TimeDateJudge($kstime,$jstime);

			$startTime = $data[0]; 

			$endTime = $data[1];
			if ($Realname) {

				$ShopShopStatisticsList = Db('shop')->alias('s')->join('admin u','u.user = s.user')->field('s.id,s.shoptitle,s.url,s.ssje,s.hdstastu,u.name,u.time')->where('s.hdstastu',3)->where('u.name',$Realname)->select();

				$this->assign('ShopShopStatisticsList',$ShopShopStatisticsList);

			}elseif ($data) {

				$condition['s.time']  = array('between',array($startTime,$endTime));  

				$ShopShopStatisticsList = Db('shop')->alias('s')->join('admin u','u.user = s.user')->field('s.id,s.shoptitle,s.url,s.ssje,s.hdstastu,u.name,u.time')->where('s.hdstastu',3)->where($condition)->select();

				$this->assign('ShopShopStatisticsList',$ShopShopStatisticsList);

			}else{

				$ShopShopStatisticsList = Db('shop')->alias('s')->join('admin u','u.user = s.user')->field('s.id,s.shoptitle,s.url,s.ssje,s.hdstastu,u.name,u.time')->where('s.hdstastu',3)->select();

				$this->assign('ShopShopStatisticsList',$ShopShopStatisticsList);
			}

			return $this->fetch();   
		}

		public function TimeDateJudge($start = '',$end = '')  
		{  
			    if($start && $end)  
			    {  
			        return array($start,$end);  
			    }  
			    else if($start)  
			    {  
			        return array($start,$start);  
			    }  
			    else if($end)  
			    {  
			        return array($end,$end);  
			    }  
		}  

}