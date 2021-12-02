<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Brand extends BaseRequest
{
    /**
     * 根据类目遍历品牌.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function list(array $params): array
    {
        return $this->httpPost('brand/list', $params);
    }

    /**
     * 通过前缀匹配召回品牌信息.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function getSug(array $params): array
    {
        return $this->httpPost('brand/getSug', $params);
    }

    /**
     * 兼容老品牌id转为新品牌id.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function convert(array $params): array
    {
        return $this->httpPost('brand/convert', $params);
    }
}
