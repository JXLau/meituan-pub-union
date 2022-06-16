<?php

/*
 * This file is part of the gaowei-space/meituan-pub-union.
 *
 * (c) gaowei <huyao9950@hotmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace GaoweiSpace\MeituanPubUnion\Api\Common\Request;

use GaoweiSpace\MeituanPubUnion\Http\Request;

class SeckillListRequest extends Request
{
    protected $promotionId;

    protected function setUserParams(&$params)
    {
        //必填
        $this->setUserParam($params, "cityId", $this->cityId);
        $this->setUserParam($params, "platformId", $this->platformId);
        $this->setUserParam($params, "showId", $this->showId);
        $this->setUserParam($params, "phone", $this->phone);
        $this->setUserParam($params, "os", $this->os);
        $this->setUserParam($params, "lat", $this->lat);
        $this->setUserParam($params, "lng", $this->lng);
        $this->setUserParam($params, "page", $this->page);
        $this->setUserParam($params, "utmMedium", $this->utmMedium);

        //非必填
        $this->promotionId && $this->setUserParam($params, "promotionId", $this->promotionId);
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
        return 'api/seckill/list';
    }

    public function getMethod()
    {
        return "get";
    }

    public function setCityId(int $cityId)
    {
        $this->cityId = $cityId;
    }

    public function setPlatformId(int $platformId)
    {
        $this->platformId = $platformId;
    }

    public function setShowId(int $showId)
    {
        $this->showId = $showId;
    }

    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    public function setOs(int $os)
    {
        $this->os = $os;
    }

    public function setLat($lat)
    {
        $this->os = $lat;
    }

    public function setLng($lng)
    {
        $this->lng = $lng;
    }

    public function setPage(int $page)
    {
        $this->page = $page;
    }

    public function setUtmMedium(string $utmMedium)
    {
        $this->utmMedium = $utmMedium;
    }

    public function setPromotionId(string $promotionId)
    {
        $this->promotionId = $promotionId;
    }
}
