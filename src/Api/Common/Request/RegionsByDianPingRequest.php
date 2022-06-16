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

/**
 * 获取某个城市的商圈信息（点评）
 */
class RegionsByDianPingRequest extends Request
{
    public function __construct()
    {
    }

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, "cityId", $this->cityId);
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
        return sprintf("api/city/%s/regions", $this->cityId);
    }

    public function getMethod()
    {
        return "get";
    }

    public function setCityId(int $cityId)
    {
        $this->cityId = $cityId;
    }
}
