<?php

 

namespace app\index\controller;

use think\Controller;

use think\Request;

use app\index\model\AttractModel;

class Attract extends Common
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
		        
		        return $this->fetch();
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

		// 招商数据提交
		// 1.state状态为0，未审核
		// 2.state状态为1，已审核
		public function SubmissionAudit()
		{

			if (Request()->isPost()) {

			$ShopQueryRes = (new AttractModel())->ReceiveShopData(input('post.'));

				if ($ShopQueryRes['valid']) {

					$this->success($ShopQueryRes['msg']);

				}else{

					$this->error($ShopQueryRes['msg']);

				}
			}
		}

}