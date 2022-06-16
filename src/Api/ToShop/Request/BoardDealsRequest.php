<?php

/*
 * This file is part of the gaowei-space/meituan-pub-union.
 *
 * (c) gaowei <huyao9950@hotmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace GaoweiSpace\MeituanPubUnion\Api\ToShop\Request;

use GaoweiSpace\MeituanPubUnion\Http\Request;

/**
 * 到店-榜单商品
 */
class BoardDealsRequest extends Request
{
    protected $promotionId = '';
    protected $keyWords    = '';
    protected $page        = 1;
    protected $size        = 50;
    protected $deviceId    = '';
    protected $deviceAlgorithm = '';
    protected $geo         = [];

    public function __construct()
    {
    }

    protected function setUserParams(&$params): void
    {
        // 必传参数
        $this->setUserParam($params, "activityId", $this->activityId);
        $this->setUserParam($params, "utmSource", $this->utmSource);
        $this->setUserParam($params, "utmMedium", $this->utmMedium);
        $this->setUserParam($params, "page", $this->page);
        $this->setUserParam($params, "size", $this->size);

        // 非必传参数
        $this->promotionId && $this->setUserParam($params, "promotionId", $this->promotionId);
        $this->deviceAlgorithm && $this->setUserParam($params, "deviceAlgorithm", $this->deviceAlgorithm);
        $this->deviceId && $this->setUserParam($params, "deviceId", $this->deviceId);
        $this->deviceType && $this->setUserParam($params, "deviceType", $this->deviceType);
        $this->geo && $this->setUserParam($params, "geo", $this->geo);
        
    }

    public function getVersion(): string
    {
        return "1.0";
    }

    public function getDataType(): string
    {
        return "json";
    }

    public function getApiAction(): string
    {
        return '/api/board/deals';
    }

    public function getMethod(): string
    {
        return "post";
    }

    public function setActivityId(int $activityId): void
    {
        $this->activityId = $activityId;
    }

    public function setUtmMedium(string $utmMedium): void
    {
        $this->utmMedium = $utmMedium;
    }

    public function setUtmSource(string $utmSource): void
    {
        $this->utmSource = $utmSource;
    }

    public function setPromotionId(string $promotionId): void
    {
        $this->promotionId = $promotionId;
    }

    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function setDeviceAlgorithm(int $deviceAlgorithm): void
    {
        $this->deviceAlgorithm = $deviceAlgorithm;
    }

    public function setGeo(array $geo): void
    {
        $this->geo = $geo;
    }

    public function setDeviceId(int $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    public function setDeviceType(int $deviceType): void
    {
        $this->deviceType = $deviceType;
    }

}
