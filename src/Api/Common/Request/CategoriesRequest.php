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
 * 获取某个城市的一级类目包含的二级类目信息
 */
class CategoriesRequest extends Request
{
    protected $cat0Id = 0;

    public function __construct()
    {
    }

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, "platformId", $this->platformId);
        $this->setUserParam($params, "cityId", $this->cityId);
        $this->setUserParam($params, "cat0Id", $this->cat0Id);
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
        return sprintf("api/city/%s/categories", $this->cityId);
    }

    public function getMethod()
    {
        return "get";
    }

    public function setPlatformId(int $platformId)
    {
        $this->platformId = $platformId;
    }

    public function setCityId(int $cityId)
    {
        $this->cityId = $cityId;
    }

    public function setCat0Id(int $cat0Id)
    {
        $this->cat0Id = $cat0Id;
    }
}
