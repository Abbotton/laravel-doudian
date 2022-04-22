<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class OpenCloud extends BaseRequest
{
    /**
     * 数据推送，推送店铺列表.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function ddpGetShopList(array $params): array
    {
        return $this->httpPost('openCloud/ddpGetShopList', $params);
    }

    /**
     * 数据推送，删除绑定的推送店铺.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function ddpDeleteShop(array $params): array
    {
        return $this->httpPost('openCloud/ddpDeleteShop', $params);
    }

    /**
     * 数据推送，添加数据推送店铺.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function ddpAddShop(array $params): array
    {
        return $this->httpPost('openCloud/ddpAddShop', $params);
    }
}
