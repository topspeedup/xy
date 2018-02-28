<?php

 

namespace app\index\controller;

use think\Controller;

use think\Request;

use app\index\model\ShopInfoModel as ShopInfo;

class Vendoruser extends Common
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

		public function submitven()
		{

			if (request()->isPost()) {
				
				$InfoDataRes = (new ShopInfo())->UserInfoQuery(input('post.'));

				if ($InfoDataRes['valid']) {
					
					$this->success($InfoDataRes['msg']);

				}else{

					$this->error($InfoDataRes['msg']);
				}
			}
		}

		public function ShopInfoBeizhu()
		{

		            $data = [  
		                'id' => trim($_REQUEST['thisid']),
		                'beizhu' => trim($_REQUEST['thisvalue']),
		            ];

		            if($data){

		                	$InfoRes = Db('shopinfo')->update($data);

		                	if($InfoRes){

		                    		return $this->success('修改成功');

		               	 }else{  

		                    		return $this->error('修改失败');
		               	 }  
	            		}
	            		return;  
		}

		public function ShopUserGrade()
		{

		            $data = [  
		                'id' => trim($_REQUEST['thisid']),
		                'grade' => trim($_REQUEST['thisvalue']),
		            ];

		            if($data){

		                	$UserGradeRes = Db('shopinfo')->update($data);

		                	if($UserGradeRes){

		                    		return $this->success('修改成功');

		               	 }else{  

		                    		return $this->error('修改失败');
		               	 }  
	            		}
	            		return;  
		}

	    	public function del()
	    	{
		            
	    		$DelArt = Db('shopinfo')->delete(input('id'));

	    		if ($DelArt) {
	    			
	    			$this->success('删除成功');exit;

	    		}else{

	    			$this->error('删除失败');exit;
	    		}
	    	}

}