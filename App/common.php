<?php
 

function getLinksById($id){
    $CatenaTion="http://hws.m.taobao.com/cache/wdetail/5.0/?id=".$id;
    $getQueryContent = file_get_contents($CatenaTion);
    $getDataQualitative = strip_tags($getQueryContent);
    $ApiDataSendOut = json_decode($getDataQualitative,true);
    $ApiParTicular = json_decode($ApiDataSendOut['data']['apiStack']['0']['value'],true);
    $DataSuccessfulSending = $ApiParTicular['ret']['0'];
    if($DataSuccessfulSending == "SUCCESS::调用成功"){
        $ApiQueryData = $ApiDataSendOut['data'];
        // $ApiQueryData['title'] = $ApiDataSendOut['data']['itemInfoModel']['title'];
        // $ApiQueryData['num_iid'] = $ApiDataSendOut['data']['itemInfoModel']['itemId'];
        // $ApiQueryData['pic_url'] = $ApiDataSendOut['data']['itemInfoModel']['picsPath']['0'];
        // $ApiQueryData['citem'] = array_slice($ApiDataSendOut['data']['itemInfoModel']['picsPath'], 1,4, true);
        // $ApiQueryData['num_iid'] = $ApiDataSendOut['data']['apiStack']['value']['price']['0'];
        return $ApiQueryData;
    }else{
        return "宝贝不存在";
    }

}

function getApi($id)
{
    $ApiLinks = "http://api.tkjidi.com/getGoodInfo?appkey=a1e55114afd0d76934d677efe0df8c3c&id=".$id;
    $getQueryContent = file_get_contents($ApiLinks);
    $getDataQualitative = strip_tags($getQueryContent);
    $ApiDataSendOut = json_decode($getDataQualitative,true);
    $DataSuccessfulSending = $ApiDataSendOut['status'];
    $DataQueryInfo = $ApiDataSendOut;
    if ($DataSuccessfulSending == 200) {
        $ApiQueryData = $DataQueryInfo;
        return $ApiQueryData;
    }
}

function unicode_decode($name)
{
 
  $json = '{"str":"'.$name.'"}';
  $arr = json_decode($json,true);
  if(empty($arr)) return '';
  return $arr['str'];

}

function Calculation($zfe,$jhj,$fwf)
{
        $jisuan = $zfe / $jhj * $fwf;

        return $jisuan;

}

 function getQuerystr($url,$key)
 {
        $res = '';
        $a = strpos($url,'?');
        if($a!==false){
            $str = substr($url,$a+1);
            $arr = explode('&',$str);
            foreach($arr as $k=>$v){
                $tmp = explode('=',$v);
                if(!empty($tmp[0]) && !empty($tmp[1])){
                    $barr[$tmp[0]] = $tmp[1];
                }
            }
        }
        if(!empty($barr[$key])){
            $res = $barr[$key];
        }
        return $res;
 }