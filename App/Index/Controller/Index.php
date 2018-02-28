<?php

 

namespace app\index\controller;

use think\Controller;

class Index extends Common
{
		// 通知页
		public function index()
		{

		        return $this->fetch();
		}

}