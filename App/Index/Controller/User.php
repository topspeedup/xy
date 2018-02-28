<?php

/**
 * @Statement: [ An Ordinary Person ]
 * @Author: Wz < 270988107@qq.com} >
 * @Copyright: Wz 2017 All rights reserved.
 */

namespace app\index\controller;

use think\Controller;

use think\Request;

class User extends Common
{

		public function __construct(Request $request = null)
		{
			parent::__construct($request);

			$AdminQueryInfo = Db('admin')->where('user',session('admin.user'))->find();

			$this->assign('AdminQueryInfo',$AdminQueryInfo);

			if ($AdminQueryInfo['statu'] == 4){
			}elseif ($AdminQueryInfo['statu'] == 4) {
			}else{
				return $this->error('你没有权限访问此页面','/');
			}
		}
    
		public function index()
		{
		        
		        return $this->fetch();
		}

		public function zs()
		{
		            $data = [  
		                'id' => input('id'),
		                'statu' => 1,
		            ];

		            if($data){

		                	$AdminInfoRes = Db('admin')->update($data);

		                	if($AdminInfoRes){

		                    		return $this->success('设置成功');

		               	 }else{  

		                    		return $this->error('设置失败');
		               	 }  
	            		}
		}

		public function sd()
		{
		            $data = [  
		                'id' => input('id'),
		                'statu' => 2,
		            ];

		            if($data){

		                	$AdminInfoRes = Db('admin')->update($data);

		                	if($AdminInfoRes){

		                    		return $this->success('设置成功');

		               	 }else{  

		                    		return $this->error('设置失败');
		               	 }  
	            		}
		}

		public function cw()
		{
		            $data = [  
		                'id' => input('id'),
		                'statu' => 3,
		            ];

		            if($data){

		                	$AdminInfoRes = Db('admin')->update($data);

		                	if($AdminInfoRes){

		                    		return $this->success('设置成功');

		               	 }else{  

		                    		return $this->error('设置失败');
		               	 }  
	            		}
		}

		public function gl()
		{
		            $data = [  
		                'id' => input('id'),
		                'statu' => 4,
		                'administrators' => 1,
		            ];

		            if($data){

		                	$AdminInfoRes = Db('admin')->update($data);

		                	if($AdminInfoRes){

		                    		return $this->success('设置成功');

		               	 }else{  

		                    		return $this->error('设置失败');
		               	 }  
	            		}
		}

		public function qx()
		{
		            $data = [  
		                'id' => input('id'),
		                'statu' => 1,
		            ];

		            if($data){

		                	$AdminInfoRes = Db('admin')->update($data);

		                	if($AdminInfoRes){

		                    		return $this->success('取消成功');

		               	 }else{  

		                    		return $this->error('取消失败');
		               	 }  
	            		}
		}

		public function qxgl()
		{
		            $data = [  
		                'id' => input('id'),
		                'statu' => 1,
		                'administrators' => 0,
		            ];

		            if($data){

		                	$AdminInfoRes = Db('admin')->update($data);

		                	if($AdminInfoRes){

		                    		return $this->success('取消成功');

		               	 }else{  

		                    		return $this->error('取消失败');
		               	 }  
	            		}
		}

	    	public function del()
	    	{
		            
	    		$DelArt = Db('admin')->delete(input('id'));

	    		if ($DelArt) {
	    			
	    			$this->success('删除成功');exit;

	    		}else{

	    			$this->error('删除失败');exit;
	    		}
	    	}
			
		public function jy()
		{
		            $data = [  
		                'id' => input('id'),
		                'jy' => 1,
		            ];

		            if($data){

		                	$AdminInfoRes = Db('admin')->update($data);

		                	if($AdminInfoRes){

		                    		return $this->success('禁用成功');

		               	 }else{  

		                    		return $this->error('禁用失败');
		               	 }  
	            		}
		}
		
		public function qxjy()
		{
		            $data = [  
		                'id' => input('id'),
		                'jy' => 0,
		            ];

		            if($data){

		                	$AdminInfoRes = Db('admin')->update($data);

		                	if($AdminInfoRes){

		                    		return $this->success('取消成功');

		               	 }else{  

		                    		return $this->error('取消失败');
		               	 }  
	            		}
		}

}