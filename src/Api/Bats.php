<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Bats extends BaseRequest
{
    /**
     * 查询订单是否需要质检.
     *
     * @param  array  $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function getOrderList(array $params): array
    {
        return $this->httpPost('btas/getInspectionOrder', $params);
    }

    /**
     * 商家送检调用.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function saveInspectionInfo(array $params): array
    {
        return $this->httpPost('btas/saveInspectionInfo', $params);
    }

    /**
     * 获取订单的质检结果.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function getOrderInspectionResult(array $params): array
    {
        return $this->httpPost('btas/getOrderInspectionResult', $params);
    }

    /**
     * 商家调用发货.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function shipping(array $params): array
    {
        return $this->httpPost('btas/shipping', $params);
    }

    /**
     * 图片质检送检.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function saveInspectionOnline(array $params): array
    {
        return $this->httpPost('btas/saveInspectionOnline', $params);
    }

    /**
     * 获取可图片鉴定的品牌.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function listBrand(array $params): array
    {
        return $this->httpPost('btas/listBrand', $params);
    }
}
