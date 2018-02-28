<?php

 

namespace app\index\controller;

use think\Controller;

use think\Request;

class Common extends Controller
{

		public function _initialize()
		{

			if (!session('admin.id'))
			{
				$this->redirect('/login');
			}
		}
    
		public function __construct(Request $request = null)
		{
		        
		        	parent::__construct($request);

		        	$ShopUserList = $this->HomeShopUserList();

		        	$ShopDelList = $this->HomeShopDelList();

		        	$ShopClassList = $this->HomeShopClassList();

		        	$ShopInfoList = $this->HomeShopUserInfoList();

		        	$ShopShopStatisticsList = $this->HomeShopStatisticsList();

		        	$ShopFinancialList = $this->HomeShopFinancialList();

		        	$AdminList = $this->HomeAdminList();

		        	$AdminQuery = $this->HomeAdminQuery();

		        	$this->assign(array(

		        		'ShopUserList' => $ShopUserList

		        		,'ShopDelList' => $ShopDelList

		        		,'ShopClassList' => $ShopClassList

		        		,'ShopInfoList' => $ShopInfoList

		        		,'ShopShopStatisticsList' => $ShopShopStatisticsList

		        		,'ShopFinancialList' => $ShopFinancialList

		        		,'AdminList' => $AdminList

		        		,'AdminQuery' => $AdminQuery

		        	));


		}

		private function HomeShopUserList()
		{

			return Db('shop')->where('user',session('admin.user'))->where('delstatu',0)->paginate(10);

		}

		private function HomeShopDelList()
		{

			return Db('shop')->where('user',session('admin.user'))->where('delstatu',1)->paginate(10);

		}

		private function HomeShopFinancialList()
		{

			return Db('shop')->where('user',session('admin.user'))->where('delstatu',0)->where('hdstastu',1)->paginate(10);

		}

		private function HomeShopClassList()
		{

			return Db('class')->select();

		}

		private function HomeShopUserInfoList()
		{

			return Db('shopinfo')->select();

		}

		private function HomeShopStatisticsList()
		{

			return Db('shop')->alias('s')->join('admin u','u.user = s.user')->field('s.id,s.shoptitle,s.url,s.ssje,s.hdstastu,u.name,u.time')->where('s.hdstastu',3)->select();

		}

		private function HomeAdminList()
		{

			return Db('admin')->select();

		}

		private function HomeAdminQuery()
		{

			return Db('admin')->where('user',session('admin.user'))->find();

		}

}