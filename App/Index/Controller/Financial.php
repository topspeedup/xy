<?php

 

namespace app\index\controller;

use think\Controller;

use think\Request;

class Financial extends Common
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

}