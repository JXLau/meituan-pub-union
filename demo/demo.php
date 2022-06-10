<?php	

require_once '../vendor/autoload.php';

use GaoweiSpace\MeituanPubUnion\Api\Common\Request\CitiesRequest;
use GaoweiSpace\MeituanPubUnion\Http\Client;

$app_key    = 'b721UbXtnPBnFN7w';
$utm_source = '169764';


// 实例化获取城市的请求类
$request = new CitiesRequest();
// 设置省份ID
$request->setProvinceId(1);

// 实例客户端类
$client = new Client($app_key, $utm_source);

// 发送请求调用接口
$response = $client->syncInvoke($request);

var_dump($response);