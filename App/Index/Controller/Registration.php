<?php

 

namespace app\index\controller;

use think\Controller;

use think\Request;

use app\index\model\RenewModel as RenewData;

class Registration extends Common
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
		                'skbeizhu' => trim($_REQUEST['thisvalue']),
		            ];

		            if($data){

		                	$NuewRes = Db('shop')->update($data);

		                	if($NuewRes){

		                    		return $this->success('修改成功');

		               	 }else{  

		                    		return $this->error('修改失败');
		               	 }  
	            		}
	            		return;  
		}

		public function Receivables()
		{
			$ReceivablesDataInfo = db('shop')->find(input('id'));

			$this->assign('ReceivablesDataInfo',$ReceivablesDataInfo);

			return $this->fetch();
		}

		public function ReceivablesMjzf()
		{

		            $data = [  
		                'id' => trim($_REQUEST['thisid']),
		                'mjzf' => trim($_REQUEST['thisvalue']),
		            ];

		            if($data){

		                	$NuewRes = Db('shop')->update($data);

		                	if($NuewRes){

		                    		return $this->success('修改成功');

		               	 }else{  

		                    		return $this->error('修改失败');
		               	 }  
	            		}
	            		return;  
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

	    	public function  CollectionPreserVation()
	    	{

		            $data = [  
		                'id' => input('post.id'),
		                'zzjt' => input('post.zzjt'),
		                'ssje' => input('post.ssje'),
		                'skbz' => input('post.skbz'),
		                'sktime' => gmdate("Y-m-d H:i:s", time()+ 8 * 3600),
		                'hdstastu' => 1,
		            ];

		            if($data){

		                	$NuewRes = Db('shop')->update($data);

		                	if($NuewRes){

		                    		return $this->success('保存成功');

		               	 }else{  

		                    		return $this->error('保存失败');
		               	 }  
	            		}

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

}