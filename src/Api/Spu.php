<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Spu extends BaseRequest
{
    /**
     * 关键属性查询接口.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function getKeyPropertyByCid(array $params): array
    {
        return $this->httpPost('spu/getKeyPropertyByCid', $params);
    }

    /**
     * SPU信息查看.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function getSpuInfoBySpuId(array $params): array
    {
        return $this->httpPost('spu/getSpuInfoBySpuId', $params);
    }

    /**
     * 获取spu模板.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function getSpuTpl(array $params): array
    {
        return $this->httpPost('spu/getSpuTpl', $params);
    }

    /**
     * 通过关键属性获取SPU信息.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function addShopSpu(array $params): array
    {
        return $this->httpPost('spu/addShopSpu', $params);
    }
}
