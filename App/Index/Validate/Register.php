<?php
/**
 * @Statement: [ An Ordinary Person ]
 * @Author: Wz < 270988107@qqcom} >
 * @Copyright: Wz 2017 All rights reserved.
 */

namespace app\index\validate;

use think\Validate;

class Register extends Validate
{
	
		protected $rule = [

			'user'  => 'require|regex:/.{3}/',
			'name' => 'require|regex:/.{2}/',
			'pass'  => 'require|regex:/.{6}/',
			'ispass' => 'require|confirm:pass'
		];

		protected $message = [
			'user.require' => '请输入用户名',
			'user.regex' => '用户名不能少于3位',
			'name.require' => '请输入真实姓名',
			'name.regex' => '真实不能少于2位',
			'pass.require' => '请输入密码',
			'pass.regex' => '密码不能少于6位',
			'ispass.require' => '请输入确认密码',
			'ispass.confirm' => '密码不一致，请重新确认',

		];
		
}