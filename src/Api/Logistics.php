<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Logistics extends BaseRequest
{
    /**
     * 获取区列表
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function areaList(array $params): array
    {
        return $this->httpPost('address/areaList', $params);
    }

    /**
     * 获取市列表
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function cityList(array $params): array
    {
        return $this->httpPost('address/cityList', $params);
    }

    /**
     * 获取省列表
     *
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function provinceList(): array
    {
        return $this->httpPost('address/provinceList');
    }

    /**
     * 订单发货
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function add(array $params): array
    {
        return $this->httpPost('order/logisticsAdd', $params);
    }

    /**
     * 一个父订单可发多个物流包裹
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function addMultiPack(array $params): array
    {
        return $this->httpPost('order/logisticsAddMultiPack', $params);
    }

    /**
     * 支持多个子订单发同一个物流包裹
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function addSinglePack(array $params): array
    {
        return $this->httpPost('order/logisticsAddSinglePack', $params);
    }

    /**
     * 获取快递公司列表
     *
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function companyList(): array
    {
        return $this->httpPost('order/logisticsCompanyList');
    }

    /**
     * 修改发货物流
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function edit(array $params): array
    {
        return $this->httpPost('order/logisticsEdit', $params);
    }

    /**
     * 修改包裹里的物流信息
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function editByPack(array $params): array
    {
        return $this->httpPost('order/logisticsEditByPack', $params);
    }
}
