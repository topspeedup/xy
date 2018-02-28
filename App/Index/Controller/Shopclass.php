<?php

 

namespace app\index\controller;

use think\Controller;

use think\Request;

class Shopclass extends Common
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

		public function addclass()
		{
			$data = [
				'name' => input('post.class'),
			];

			$ClassArr = Db('class')->insert($data);

			if ($ClassArr) {
				
				return $this->success('添加成功');
			}else{

				return $this->error('添加失败');
			}

		}

	    	public function del()
	    	{
		            
	    		$DelArr = Db('class')->delete(input('id'));

	    		if ($DelArr) {
	    			
	    			$this->success('删除成功');exit;

	    		}else{

	    			$this->error('删除失败');exit;
	    		}
	    	}

}