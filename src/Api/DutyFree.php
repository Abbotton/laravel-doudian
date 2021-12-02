<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class DutyFree extends BaseRequest
{
    /**
     * 商家接单.
     *
     * @param  array  $params
     *
     * @return array
     * @throws RequestException
     *
     * @throws InvalidArgumentException
     */
    public function orderConfirm(array $params): array
    {
        return $this->httpPost('dutyFree/orderConfirm', $params);
    }

    /**
     * 海南项目服务商回传实操节点.
     *
     * @param  array  $params
     *
     * @return array
     * @throws RequestException
     *
     * @throws InvalidArgumentException
     */
    public function orderOperate(array $params): array
    {
        return $this->httpPost('dutyFree/orderOperate', $params);
    }

    /**
     * 商家拉单.
     *
     * @param  array  $params
     *
     * @return array
     * @throws RequestException
     *
     * @throws InvalidArgumentException
     */
    public function orderList(array $params): array
    {
        return $this->httpPost('dutyFree/orderList', $params);
    }
}
