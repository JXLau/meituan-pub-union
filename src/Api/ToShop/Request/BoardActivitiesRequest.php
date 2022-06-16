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
 * 到店-榜单活动
 */
class BoardActivitiesRequest extends Request
{
    public function __construct()
    {
    }

    protected function setUserParams(&$params): void
    {
        // 必传参数
        $this->setUserParam($params, "utmSource", $this->utmSource);
        $this->setUserParam($params, "timeLimit", $this->timeLimit);
        
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
        return '/api/board/activities';
    }

    public function getMethod(): string
    {
        return "post";
    }

    public function setTimeLimit(int $timeLimit): void
    {
        $this->timeLimit = $timeLimit;
    }

    public function setUtmSource(string $utmSource): void
    {
        $this->utmSource = $utmSource;
    }


}
