<?php

/*
 * This file is part of the gaowei-space/meituan-pub-union.
 *
 * (c) gaowei <huyao9950@hotmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace GaoweiSpace\MeituanPubUnion\Http;

/**
 * 请求基类
 */
abstract class Request
{
    public function __construct()
    {
    }

    abstract public function getVersion();

    abstract public function getDataType();

    abstract public function getApiAction();

    abstract public function getMethod();

    abstract protected function setUserParams(&$var);

    final public function getParamsMap()
    {
        $paramsMap = [];
        $this->setUserParams($paramsMap);
        return $paramsMap;
    }

    final protected function setUserParam(&$paramMap, $name, $param)
    {
        if (!is_null($param) && $param !== "") {
            $paramMap[$name] = $param;
        }
    }
}
