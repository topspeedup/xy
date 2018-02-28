<?php
 

namespace app\index\model;

use think\Model;

class RegisterModel extends Model
{

		protected $pk = 'id';

		protected $table = 'admin';  

	    	public function RegisterUser($data)
	   	 {    

			$validate = new \app\index\validate\Register;

			if (!$validate->check($data)) {
				
				return ['valid' =>0,'msg' =>$validate->getError()];
			}

			$JudgeUser = $this->where('user',$data['user'])->find();

			if ($JudgeUser) {
				
				return ['valid' =>0,'msg' =>'用户名已存在'];
			}


			$NameInfo = $this->where('name',$data['name'])->find();

			if ($NameInfo) {
				
				return ['valid' =>0,'msg' =>'姓名已存在'];
			}

			$RegiSterRes = $this->insert(
				[
					'user'   => $data['user'],
					'pass'   => $data['pass'],
					'name'  => $data['name'],
					'statu' => 1,
					'jy' => 0,
					'time'   =>  gmdate("Y-m-d H:i:s", time()+ 8 * 3600),
				]
			);

			if ($RegiSterRes) {

					return ['valid' =>1,'msg' =>'注册成功'];

				}else{

					return ['valid' =>0,'msg' =>'注册失败'];
			}

	    }
}