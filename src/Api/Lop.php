<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Lop extends BaseRequest
{
    /**
     * 查询店铺身份.
     *
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function roleGet(): array
    {
        return $this->httpPost('iop/roleGet');
    }

    /**
     * 根据更新时间查询代打订单列表.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function orderList(array $params): array
    {
        return $this->httpPost('iop/orderList', $params);
    }

    /**
     * 电子面单取号.
     *
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function waybillGet(): array
    {
        return $this->httpPost('iop/waybillGet');
    }

    /**
     * 取消电子面单.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function waybillCancel(array $params): array
    {
        return $this->httpPost('iop/waybillCancel', $params);
    }

    /**
     * 电子面单回传并发货.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function waybillReturn(array $params): array
    {
        return $this->httpPost('iop/waybillCancel', $params);
    }

    /**
     * 更新电子面单.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function waybillUpdate(array $params): array
    {
        return $this->httpPost('iop/waybillUpdate', $params);
    }

    /**
     * 订单详情.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function orderInfo(array $params): array
    {
        return $this->httpPost('iop/orderInfo', $params);
    }
}
