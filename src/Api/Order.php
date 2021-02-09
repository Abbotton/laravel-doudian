<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Order extends BaseRequest
{
    /**
     * 添加订单备注
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function addOrderRemark(array $params): array
    {
        return $this->httpPost('order/addOrderRemark', $params);
    }

    /**
     * 设置店铺支持地址变更审核
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function AddressAppliedSwitch(array $params): array
    {
        return $this->httpPost('order/AddressAppliedSwitch', $params);
    }

    /**
     * 买家地址变更确认
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function addressConfirm(array $params): array
    {
        return $this->httpPost('order/addressConfirm', $params);
    }

    /**
     * 卖家主动修改收货地址
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function addressModify(array $params): array
    {
        return $this->httpPost('order/addressModify', $params);
    }

    /**
     * 取消货到付款订单
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function cancel(array $params): array
    {
        return $this->httpPost('order/cancel', $params);
    }

    /**
     * 获取订单详情
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function detail(array $params): array
    {
        return $this->httpPost('order/detail', $params);
    }

    /**
     * 获取服务单列表
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function getServiceList(array $params): array
    {
        return $this->httpPost('order/getServiceList', $params);
    }

    /**
     * 获取订单列表
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function list(array $params): array
    {
        return $this->httpPost('order/list', $params);
    }

    /**
     * 回复服务请求
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function replyService(array $params): array
    {
        return $this->httpPost('order/replyService', $params);
    }

    /**
     * 查询商家服务单详情请求
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function serviceDetail(array $params): array
    {
        return $this->httpPost('order/serviceDetail', $params);
    }

    /**
     * 获取服务请求列表
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function serviceList(array $params): array
    {
        return $this->httpPost('order/serviceList', $params);
    }

    /**
     * 确认货到付款订单
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function stockUp(array $params): array
    {
        return $this->httpPost('order/stockUp', $params);
    }

    /**
     * 未支付订单改货款
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function updateOrderAmount(array $params): array
    {
        return $this->httpPost('order/updateOrderAmount', $params);
    }

    /**
     * 未支付订单邮费修改
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function updatePostAmount(array $params): array
    {
        return $this->httpPost('order/updatePostAmount', $params);
    }

    /**
     * 查询订单账单明细
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function settle(array $params): array
    {
        return $this->httpPost('order/settle', $params);
    }

    /**
     * 获取运费险保单详情
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function insurance(array $params): array
    {
        return $this->httpPost('order/insurance', $params);
    }
}
