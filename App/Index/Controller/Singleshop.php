<?php

 

namespace app\index\controller;

use think\Controller;

use think\Request;

use app\index\model\RenewModel as RenewData;

use app\index\model\ShoplistModel;

class Singleshop extends Common
{

		public function __construct(Request $request = null)
		{
			parent::__construct($request);

			$AdminQueryInfo = Db('admin')->where('user',session('admin.user'))->find();

			$this->assign('AdminQueryInfo',$AdminQueryInfo);

			if ($AdminQueryInfo['statu'] == 2){
			}elseif ($AdminQueryInfo['statu'] == 4) {
			}else{
				return $this->error('你没有权限访问此页面','/');
			}
		}
    
		public function index()
		{

			$SearchLinks = input('url');

			$Searchdp = input('dp');

			$Searchcz = input('cz');

			if ($SearchLinks) {

				if (Db('shop')->where('url',$SearchLinks)->find()) {

					$ShopUserList = Db('shop')->where('url',$SearchLinks)->where('delstatu',0)->paginate(10);

					$this->assign('ShopUserList',$ShopUserList);
				}else{

					return $this->error('搜索的商品宝贝不存在');
				}

			}elseif ($Searchdp) {

				if (Db('shop')->where('shopname',$Searchdp)->find()) {

					$ShopUserList = Db('shop')->where('shopname',$Searchdp)->where('delstatu',0)->paginate(10);

					$this->assign('ShopUserList',$ShopUserList);
				}else{

					return $this->error('搜索的店铺不存在');
				}

			}elseif ($Searchcz) {

				if (Db('shop')->where('user',$Searchcz)->find()) {

					$ShopUserList = Db('shop')->where('user',$Searchcz)->where('delstatu',0)->paginate(10);

					$this->assign('ShopUserList',$ShopUserList);
				}else{

					return $this->error('搜索的操作人不存在');
				}

			}else{

				$ShopUserList = Db('shop')->where('delstatu',0)->paginate(10);

				$this->assign('ShopUserList',$ShopUserList);
		        
		        	}
		        
		        return $this->fetch();
		}

		public function edit()
		{

			$QueryShopDataInfo = db('shop')->find(input('id'));

			$this->assign('QueryShopDataInfo',$QueryShopDataInfo);

	    		if (Request()->isPost()) {

				$ShopQueryRes = (new ShoplistModel())->SingleEditData(input('post.'));

				if ($ShopQueryRes['valid']) {

					$this->success($ShopQueryRes['msg']);exit;


				}else{

					$this->error($ShopQueryRes['msg']);exit;

				}
			}

			return $this->fetch();
		}

	    	public function Renew()
	    	{

			$RenewInfo = db('shop')->find(input('id'));

			$this->assign('RenewInfo',$RenewInfo);

	    		return $this->fetch();
	    	}

	    	public function RenewSend()
	    	{

		    	if (Request()->isPost()) {

				$data = (new RenewData())->ShopRenewData(input('post.'));

				if ($data['valid']) {

					$this->success($data['msg']);
				}else{

					$this->error($data['msg']);

				}
			}
	    	}

		public function upload()
		{
	 
	     		$file = request()->file('file');
	        		$info = $file->move(ROOT_PATH . 'Fun' . DS . 'static/cimg');
		        	if ($info) {
		        		$res['code'] = 1;
		        		$res['msg'] = '上传成功';
		        		$res['name'] = $info->getFilename();
		        		$NamePath =str_replace('\\',"/",$info->getSaveName());
		        		$res['filepath'] = '/Fun/static/cimg/'.$NamePath;
		        	}else{
		        		$res['code'] = 0;
		        		$res['msg'] = '上传失败'.$file->getError();
		        	}
		        	return $res;
	    	}

}