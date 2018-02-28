<?php

 

namespace app\index\controller;

use think\Controller;

class Recycle extends Common
{
    
		public function index()
		{

			$SearchLinks = input('url');

			$Searchdp = input('dp');

			if ($SearchLinks) {

				if (Db('shop')->where('url',$SearchLinks)->find()) {

					$ShopDelList = Db('shop')->where('url',$SearchLinks)->where('delstatu',1)->paginate(10);

					$this->assign('ShopDelList',$ShopDelList);
				}else{

					return $this->error('搜索的商品宝贝不存在');
				}

			}elseif ($Searchdp) {

				if (Db('shop')->where('shopname',$Searchdp)->find()) {

					$ShopDelList = Db('shop')->where('shopname',$Searchdp)->where('delstatu',1)->paginate(10);

					$this->assign('ShopDelList',$ShopDelList);
				}else{

					return $this->error('搜索的店铺不存在');
				}

			}else{

				$ShopDelList = Db('shop')->where('delstatu',1)->paginate(10);

				$this->assign('ShopDelList',$ShopDelList);
		        
		        	}
		        
		        return $this->fetch();
		}

	    	public function recovery()
	    	{

		            $data = [  
		                'id' => input('id'),
		                'delstatu' => 0,
		            ];
		            
	    		$DelArt = Db('shop')->update($data);

	    		if ($DelArt) {
	    			
	    			$this->success('恢复成功');exit;

	    		}else{

	    			$this->error('恢复失败');exit;
	    		}
	    	}

	    	public function del()
	    	{
		            
	    		$DelArt = Db('shop')->delete(input('id'));

	    		if ($DelArt) {
	    			
	    			$this->success('删除成功');exit;

	    		}else{

	    			$this->error('删除失败');exit;
	    		}
	    	}

}