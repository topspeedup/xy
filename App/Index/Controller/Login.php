<?php

 

namespace app\index\controller;

use think\Controller;

use app\index\model\LoginModel;

class Login extends Controller
{
    
		public function index()
		{

		    	if (Request()->isPost()) {

				$data = (new LoginModel())->LoginData(input('post.'));

				if ($data['valid']) {

					$this->success($data['msg'],'/index/login');
				}else{

					$this->error($data['msg']);

				}
			}

			return $this->fetch();
		}

		public function logout()
		{
			session(null);
			return  $this->success('退出成功','/');
		}

}