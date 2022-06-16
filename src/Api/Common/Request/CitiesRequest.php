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
 * 获取某个省份的所有城市
 */
class CitiesRequest extends Request
{
    public function __construct()
    {
    }

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, "platformId", $this->platformId);
        $this->setUserParam($params, "provinceId", $this->provinceId);
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
        return sprintf("api/province/%s/cities", $this->provinceId);
    }

    public function getMethod()
    {
        return "get";
    }

    public function setPlatformId(int $platformId)
    {
        $this->platformId = $platformId;
    }

    public function setProvinceId(int $provinceId)
    {
        $this->provinceId = $provinceId;
    }
}
