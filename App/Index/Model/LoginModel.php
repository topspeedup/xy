<?php
/**
 * @Statement: [ An Ordinary Person ]
 * @Author: Wz < 270988107@qqcom} >
 * @Copyright: Wz 2017 All rights reserved.
 */

namespace app\index\model;

use think\Model;

class LoginModel extends Model
{
		protected $pk = 'id';

		protected $table = 'admin';

		
		public function LoginData($data)
		{

			$validate = new \app\index\validate\Login;

			if (!$validate->check($data)) {
				
				return ['valid' =>0,'msg' =>$validate->getError()];
			}

			$UserInfo = $this->where('user',$data['user'])->find();
			
			if (!$UserInfo) {
				
				return ['valid' =>0,'msg' =>'用户名不存在'];
			}
			$PassInfo = $this->where('user',$data['user'])->where('pass',$data['pass'])->find();

			if (!$PassInfo) {
				
				return ['valid' =>0,'msg' =>'密码不存在'];
			}
			
			if ($UserInfo['jy'] == 1) {
				
				return ['valid' =>0,'msg' =>'你用户已被禁用'];
			}

			session('admin.id',$UserInfo['id']);
			session('admin.user',$UserInfo['user']);
			session('admin.statu',$UserInfo['statu']);

			return ['valid' =>1,'msg' =>'登录成功'];
		}

}