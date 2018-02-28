<?php
/**
 * @Statement: [ An Ordinary Person ]
 * @Author: Wz < 270988107@qqcom} >
 * @Copyright: Wz 2017 All rights reserved.
 */

namespace app\index\validate;

use think\Validate;

class Login extends Validate
{
	
		protected $rule = [

			'user' => 'require',
			'pass' => 'require',
		];

		protected $message = [
			'user.require' => '请输入用户名',
			'pass.require' => '请输入密码',

		];
		
}