<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class CrossBorder extends BaseRequest
{
    /**
     * 查询跨境商家资金信息接口.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function queryBalance(array $params): array
    {
        return $this->httpPost('crossBorder/queryBalance', $params);
    }

    /**
     * 银行信息校验.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function bankAccountVerify(array $params): array
    {
        return $this->httpPost('crossBorder/bankAccountVerify', $params);
    }

    /**
     * 查询跨境订单列表.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function orderList(array $params): array
    {
        return $this->httpPost('crossBorder/orderList', $params);
    }

    /**
     * 商家接单.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function orderConfirm(array $params): array
    {
        return $this->httpPost('dutyFree/orderConfirm', $params);
    }

    /**
     * 入库和提货出库回告.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function warehouseInOutboundEvent(array $params): array
    {
        return $this->httpPost('crossborder/warehouseInOutboundEvent', $params);
    }

    /**
     * 库存盘点回告.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function stockTaking(array $params): array
    {
        return $this->httpPost('crossborder/stockTaking', $params);
    }

    /**
     * 库存类型变动回告.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function stockTransform(array $params): array
    {
        return $this->httpPost('crossborder/stockTransform', $params);
    }

    /**
     * 服务商锁单结果回告.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function OrderInterception(array $params): array
    {
        return $this->httpPost('crossborder/OrderInterception', $params);
    }

    /**
     * 运单信息回告.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function takingLogisticsInfo(array $params): array
    {
        return $this->httpPost('crossborder/takingLogisticsInfo', $params);
    }
}
