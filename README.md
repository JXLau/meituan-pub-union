<h1 align="center"> meituan-pub-union </h1>

<p align="center"> ð ç¾å¢åéèç PHP-SDK. </p>


## å®è£

```shell
$ composer require jxlau/meituan-pub-union
```

## éç½®

å¨ä½¿ç¨æ¬æ©å±ä¹åï¼ä½ éè¦å» [ç¾å¢åéèç](https://pub.meituan.com) æ³¨åè´¦å·ï¼ç­¾çº¦å¥é©»ååå»ºåºç¨ï¼è·ååºç¨ç app_key å utm_sourceã

## æ¯æ
- â è·åå¨å½çä»½ `ProvinceAllRequest`
- â è·åæçä»½çåå¸ `CitiesRequest`
- â è·åæä¸ªåå¸çä¸çº§ç±»ç®åå«çäºçº§ç±»ç®ä¿¡æ¯ `CategoriesRequest`
- â è·åæä¸ªåå¸çååä¿¡æ¯ï¼ç¹è¯ï¼`RegionsByDianPingRequest`
- â è·åæä¸ªåå¸çååä¿¡æ¯ï¼ç¾å¢ï¼`RegionsByMeiTuanRequest`
- â å°åºååæç´¢ `SearchDealsRequest`
- â åéåé¾ `LinksRequest`
- â å¼å¸¸è®¢åæ°æ® `OrdersAbnormalRequest`
- â CPAè®¢åæ°æ® `OrdersCPARequest`
- â CPSè®¢åæ°æ® `OrdersCPSRequest`
- â ç§æåºæ¬¡ `SeckillShowInfoRequest`
- â ç§æå¢ååè¡¨ `SeckillListRequest`
- ð å¶ä»ææªæ¯æï¼æ¥ä¸æ¥ä¼æ¯æå®åå°åºæ¨¡åæ¥å£

## ä½¿ç¨
### è·åæä¸ªçä»½çåå¸åè¡¨
```php
use GaoweiSpace\MeituanPubUnion\Api\Common\Request\CitiesRequest;
use GaoweiSpace\MeituanPubUnion\Http\Client;

$app_key    = 'xxxxxxxxxx';
$utm_source = 'xxxxxxxxxx';

// å®ä¾åè·ååå¸çè¯·æ±ç±»
$request = new CitiesRequest();
// è®¾ç½®çä»½ID
$request->setProvinceId(1);

// å®ä¾å®¢æ·ç«¯ç±»
$client = new Client($app_key, $utm_source);

// åéè¯·æ±è°ç¨æ¥å£
$response = $client->syncInvoke($request);
```
### è¯·æ±åæ°

> è¯·æ±åæ°çè®¾ç½®ï¼è¯·ç»å [ç¾å¢åéèçAPIææ¡£](https://pub.meituan.com/#/api-doc)ï¼ç¡®è®¤è¦ä½¿ç¨çåæ°ï¼è°ç¨å¯¹åºè¯·æ±APIç±»çå¯¹åºæ¹æ³è¿è¡è®¾ç½®

æ¯ä¸ªè¯·æ±APIç±»ä¸­å¯¹äºåä¸ªåæ°é½å·²ç»åç½®äº `set` åç¼çè®¾ç½®æ¹æ³ï¼å¦ï¼
```php
public function setUtmSource(string $utmSource): void
{
    $this->utmSource = $utmSource;
}
```

è°ç¨å¯¹åºæ¹æ³ï¼è¿è¡åæ°è®¾ç½®ï¼
```php
$request->setUtmSource('***');
```

### å¨ Laravel ä¸­ä½¿ç¨

å¨ Laravel ä¸­ä½¿ç¨ä¹æ¯åæ ·çå®è£æ¹å¼ï¼éç½®åå¨ `config/services.php` ä¸­ï¼
```php

'meituan' => [
    'pub_union' => [
        'app_key'    => env('MEITUAN_PUB_UNION_APP_KEY'),
        'utm_source' => env('MEITUAN_PUB_UNION_UTM_SOURCE'),
    ]
]

```
ç¶åå¨ .env ä¸­éç½®ï¼
```
MEITUAN_PUB_UNION_APP_KEY=xxxxxxxxxxxxxxxxxxxxx
MEITUAN_PUB_UNION_UTM_SOURCE=xxxxxxxxxxxxxxxxxxxxx
```

### å¯ä»¥ç¨ä¸¤ç§æ¹å¼æ¥è·å `GaoweiSpace\MeituanPubUnion\Http\Client` å®ä¾ï¼
#### æ¹æ³åæ°æ³¨å¥
```php
use GaoweiSpace\MeituanPubUnion\Http\Client;

public function getCities(Client $client)
{
    $response = $client->syncInvoke($request);
}

```

#### æå¡åè®¿é®
```php

public function getCities()
{
    $response = app('MeituanPubUnion')->syncInvoke($request);
}

```

## åè
- [ç¾å¢åéèçAPIææ¡£](https://pub.meituan.com/#/api-doc)

## License

MIT