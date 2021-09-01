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

    /**
     * 商家接单.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function orderConfirm(array $params): array
    {
        return $this->httpPost('dutyFree/orderConfirm', $params);
    }

    /**
     * 入库和提货出库回告.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function warehouseInOutboundEvent(array $params): array
    {
        return $this->httpPost('crossBorder/warehouseInOutboundEvent', $params);
    }

    /**
     * 库存盘点回告.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function stockTaking(array $params): array
    {
        return $this->httpPost('crossBorder/stockTaking', $params);
    }

    /**
     * 库存类型变动回告.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function stockTransform(array $params): array
    {
        return $this->httpPost('crossBorder/stockTransform', $params);
    }
}
