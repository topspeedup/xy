<?php

 

namespace app\index\controller;

use think\Controller;

use think\Request;

use app\index\model\ShoplistModel;

class Shoplist extends Common
{

		public function __construct(Request $request = null)
		{
			parent::__construct($request);

			$AdminQueryInfo = Db('admin')->where('user',session('admin.user'))->find();

			$this->assign('AdminQueryInfo',$AdminQueryInfo);

			if ($AdminQueryInfo['statu'] == 1){
			}elseif ($AdminQueryInfo['statu'] == 4) {
			}else{
				return $this->error('你没有权限访问此页面','/');
			}
		}
    
		public function index()
		{
			$SearchLinks = input('url');

			$Searchdp = input('dp');

			if ($SearchLinks) {

				if (Db('shop')->where('url',$SearchLinks)->find()) {

					$ShopUserList = Db('shop')->where('user',session('admin.user'))->where('url',$SearchLinks)->where('delstatu',0)->paginate(10);

					$this->assign('ShopUserList',$ShopUserList);
				}else{

					return $this->error('搜索的商品宝贝不存在');
				}

			}elseif ($Searchdp) {

				if (Db('shop')->where('shopname',$Searchdp)->find()) {

					$ShopUserList = Db('shop')->where('user',session('admin.user'))->where('shopname',$Searchdp)->where('delstatu',0)->paginate(10);

					$this->assign('ShopUserList',$ShopUserList);
				}else{

					return $this->error('搜索的店铺不存在');
				}
			}else{

				$ShopUserList = Db('shop')->where('user',session('admin.user'))->where('delstatu',0)->paginate(10);

				$this->assign('ShopUserList',$ShopUserList);
		        
		        	}

			return $this->fetch();
		}

		public function NoteDataReception()
		{

		            $data = [  
		                'id' => trim($_REQUEST['thisid']),
		                'beizhu' => trim($_REQUEST['thisvalue']),
		            ];

		            if($data){

			            // $QueryShopData = Db('shop')->where('id',$data['id'])->where('beizhu',$data['beizhu'])->find();

			            // if ($QueryShopData) {
			           
			           	// 	return $this->error('备注名称已存在');

			            // }
		                	$NuewRes = Db('shop')->update($data);

		                	if($NuewRes){

		                    		return $this->success('修改成功');

		               	 }else{  

		                    		return $this->error('修改失败');
		               	 }  
	            		}
	            		return;  
		}

		public function edit()
		{

			$QueryShopDataInfo = db('shop')->find(input('id'));

			$this->assign('QueryShopDataInfo',$QueryShopDataInfo);

	    		if (Request()->isPost()) {

				$ShopQueryRes = (new ShoplistModel())->ShoplistEditData(input('post.'));

				if ($ShopQueryRes['valid']) {

					$this->success($ShopQueryRes['msg']);exit;


				}else{

					$this->error($ShopQueryRes['msg']);exit;

				}
			}

			return $this->fetch();
		}

	    	public function del()
	    	{

		            $data = [  
		                'id' => input('id'),
		                'delstatu' => 1,
		            ];
		            
	    		$DelArt = Db('shop')->update($data);

	    		if ($DelArt) {
	    			
	    			$this->success('删除成功');exit;

	    		}else{

	    			$this->error('删除失败');exit;
	    		}
	    	}

}