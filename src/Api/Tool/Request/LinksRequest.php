<?php

/*
 * This file is part of the gaowei-space/meituan-pub-union.
 *
 * (c) gaowei <huyao9950@hotmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace GaoweiSpace\MeituanPubUnion\Api\Tool\Request;

use GaoweiSpace\MeituanPubUnion\Http\Request;

/**
 * 取链接口
 */
class LinksRequest extends Request
{
    protected $promotionId  = '';
    protected $utmSource    = '';
    protected $utmMedium    = '';
    protected $activity     = '';
    protected $pageLevel    = 0;
    protected $userLevel    = null;
    protected $demandQrInfo = null;

    public function __construct()
    {
    }

    protected function setUserParams(&$params)
    {
        // 必传参数
        $this->setUserParam($params, "promotionId", $this->promotionId);
        $this->setUserParam($params, "utmSource", $this->utmSource);
        $this->setUserParam($params, "utmMedium", $this->utmMedium);
        $this->setUserParam($params, "activity", $this->activity);
        $this->setUserParam($params, "pageLevel", $this->pageLevel);

        // 非必传参数
        !is_null($this->userLevel) && $this->setUserParam($params, "userLevel", $this->userLevel);
        !is_null($this->demandQrInfo) && $this->setUserParam($params, "demandQrInfo", $this->demandQrInfo);
    }

    public function getVersion()
    {
        return "1.0";
    }

    public function getDataType()
    {
        return "json";
    }

    public function getApiAction()
    {
        return '/api/promotion/link';
    }

    public function getMethod()
    {
        return "post";
    }

    public function setUtmMedium(string $utmMedium)
    {
        $this->utmMedium = $utmMedium;
    }

    public function setUtmSource(string $utmSource)
    {
        $this->utmSource = $utmSource;
    }

    public function setPromotionId(string $promotionId)
    {
        $this->promotionId = $promotionId;
    }

    public function setActivity(string $activity)
    {
        $this->activity = $activity;
    }

    public function setPageLevel(int $pageLevel)
    {
        $this->pageLevel = $pageLevel;
    }

    public function setUserLevel(float $userLevel)
    {
        $this->userLevel = $userLevel;
    }

    public function setDemandQrInfo(string $demandQrInfo)
    {
        $this->demandQrInfo = $demandQrInfo;
    }
}
