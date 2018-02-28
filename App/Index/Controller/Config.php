<?php

 

namespace app\index\controller;

use think\Controller;

class Config extends Common
{
    
		public function index()
		{
			$regdata = Db('regif')->where('id',1)->find();

			$this->assign('regdata',$regdata);

			$pwd = input('pwd');

			$reg = input('reg');

			if ($pwd) {
				
				$pwddata = Db('admin')->where('id',input('id'))->update(['pass' => $pwd]);

				if ($pwddata) {
					session(null);
					return $this->success('修改成功','/login');
				}

			}
		        
		        return $this->fetch();
		}

	            public function reg()
	            {
	                
	            	$TopRes = Db('regif')->where('id',input('post.id'))->find();

	            	if($TopRes['in'] == 0){
	            		
	            		$Setup = Db('regif')->where('id',input('post.id'))->update(['in' => 1]);

	            		if ($Setup) {

	            			return $this->success('开启成功');

	            		}else{

	            			return $this->error('开启失败');
	            		}


	            	}else{

	            		$Cancel = Db('regif')->where('id',input('post.id'))->update(['in' => 0]);

	            		if ($Cancel) {

	            			return $this->success('取消成功');

	            		}else{

	            			return $this->error('取消失败');
	            		}

	            	}
	            }

}