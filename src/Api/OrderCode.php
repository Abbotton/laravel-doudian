<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class OrderCode extends BaseRequest
{
    /**
     * 下载bic订单码.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function downloadOrderCodeByShop(array $params): array
    {
        return $this->httpPost('orderCode/downloadOrderCodeByShop', $params);
    }

    /**
     * bic流程订单物流发货接口.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function erpShopBindOrderCode(array $params): array
    {
        return $this->httpPost('orderCode/erpShopBindOrderCode', $params);
    }

    /**
     * 批量下载bic订单码.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function batchGetOrderCodeByShop(array $params): array
    {
        return $this->httpPost('orderCode/batchGetOrderCodeByShop', $params);
    }
}
