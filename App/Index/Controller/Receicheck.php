<?php

 

namespace app\index\controller;

use think\Controller;

use think\Request;

class Receicheck extends Common
{

		public function __construct(Request $request = null)
		{
			parent::__construct($request);

			$AdminQueryInfo = Db('admin')->where('user',session('admin.user'))->find();

			$this->assign('AdminQueryInfo',$AdminQueryInfo);

			if ($AdminQueryInfo['statu'] == 3){
			}elseif ($AdminQueryInfo['statu'] == 4) {
			}else{
				return $this->error('你没有权限访问此页面','/');
			}
		}
    
		public function index()
		{
		        
		        return $this->fetch();
		}

		public function check()
		{

		            $data = [  
		                'id' => input('id'),
		                'hdstastu' => 3,
		            ];

		            if($data){

		                	$NuewRes = Db('shop')->update($data);

		                	if($NuewRes){

		                    		return $this->success('核对成功');

		               	 }else{  

		                    		return $this->error('核对失败');
		               	 }  
	            		}
	            		return;  
		}

		public function examine()
		{
			
		            $data = [  
		                'id' => input('id'),
		                'hdstastu' => 2,
		            ];

		            if($data){

		                	$NuewRes = Db('shop')->update($data);

		                	if($NuewRes){

		                    		return $this->success('需审核成功');

		               	 }else{  

		                    		return $this->error('需审核失败');
		               	 }  
	            		}
	            		return;  
		}

}