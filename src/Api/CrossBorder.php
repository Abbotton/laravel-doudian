<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class CrossBorder extends BaseRequest
{
    /**
     * 查询跨境商家资金信息接口.
     *
     * @param  array  $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function queryBalance(array $params): array
    {
        return $this->httpPost('crossBorder/queryBalance', $params);
    }

    /**
     * 银行信息校验.
     *
     * @param  array  $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function bankAccountVerify(array $params): array
    {
        return $this->httpPost('crossBorder/bankAccountVerify', $params);
    }

    /**
     * 查询跨境订单列表.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function orderList(array $params): array
    {
        return $this->httpPost('crossBorder/orderList', $params);
    }
}
