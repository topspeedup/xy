<?php

 

namespace app\index\controller;

use think\Controller;

use app\index\model\RegisterModel;

class Register extends Controller
{
    
		public function index()
		{
			$InfoReg = Db('regif')->where('id',1)->find();

			$this->assign('InfoReg',$InfoReg);

		    	if (Request()->isPost()) {

				$RegiSterRes = (new RegisterModel())->RegisterUser(input('post.'));

				if ($RegiSterRes['valid']) {

					$this->success($RegiSterRes['msg'],'/index/login');
				}else{

					$this->error($RegiSterRes['msg']);

				}
			}

			return $this->fetch();
		}

}