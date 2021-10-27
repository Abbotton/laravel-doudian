<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Logistics extends BaseRequest
{
    /**
     * 订单发货.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function add(array $params): array
    {
        return $this->httpPost('order/logisticsAdd', $params);
    }

    /**
     * 一个父订单可发多个物流包裹.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function addMultiPack(array $params): array
    {
        return $this->httpPost('order/logisticsAddMultiPack', $params);
    }

    /**
     * 支持多个子订单发同一个物流包裹.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function addSinglePack(array $params): array
    {
        return $this->httpPost('order/logisticsAddSinglePack', $params);
    }

    /**
     * 获取快递公司列表.
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function companyList(): array
    {
        return $this->httpPost('order/logisticsCompanyList');
    }

    /**
     * 修改发货物流
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function edit(array $params): array
    {
        return $this->httpPost('order/logisticsEdit', $params);
    }

    /**
     * 修改包裹里的物流信息.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function editByPack(array $params): array
    {
        return $this->httpPost('order/logisticsEditByPack', $params);
    }

    /**
     * 根据省获取全量四级地址.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function getAreasByProvince(array $params): array
    {
        return $this->httpPost('address/getAreasByProvince', $params);
    }

    /**
     * 获取四级地址全量省份信息.
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function getProvince(): array
    {
        return $this->httpPost('address/getProvince');
    }

    /**
     * 顺丰新下单接口.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function createSFOrder(array $params): array
    {
        return $this->httpPost('logistics/createSFOrder', $params);
    }

    /**
     * 用于ISV/商家ERP系统 端发起取消已获取的电子面单号.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function cancelOrder(array $params): array
    {
        return $this->httpPost('logistics/cancelOrder', $params);
    }

    /**
     * 查询地址快递是否可以送达.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function getOutRange(array $params): array
    {
        return $this->httpPost('logistics/getOutRange', $params);
    }

    /**
     * 查询商家和物流商的订购关系以及物流单号使用情况.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function listShopNetsite(array $params): array
    {
        return $this->httpPost('logistics/listShopNetsite', $params);
    }

    /**
     * 商家ERP/ISV 向字节电子面单系统获取单号和打印信息.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function newCreateOrder(array $params): array
    {
        return $this->httpPost('logistics/newCreateOrder', $params);
    }

    /**
     * 更新收件人信息 以及发件人名字联系方式信息，不支持顺丰速递面单信息更新.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function updateOrder(array $params): array
    {
        return $this->httpPost('logistics/updateOrder', $params);
    }

    /**
     * 提供给isv查询运单轨迹的接口.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function trackNoRouteDetail(array $params): array
    {
        return $this->httpPost('logistics/trackNoRouteDetail', $params);
    }

    /**
     * 查询商家自定义区模板（新版）.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function getCustomTemplateList(array $params): array
    {
        return $this->httpPost('logistics/getCustomTemplateList', $params);
    }

    /**
     * 获取商家所有模版信息.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function templateList(array $params): array
    {
        return $this->httpPost('logistics/templateList', $params);
    }

    /**
     * 获取面单信息.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function waybillApply(array $params): array
    {
        return $this->httpPost('logistics/waybillApply', $params);
    }
}
