<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Order extends BaseRequest
{
    /**
     * 添加订单备注.
     *
     * @param  array  $params
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function addOrderRemark(array $params): array
    {
        return $this->httpPost('order/addOrderRemark', $params);
    }

    /**
     * 设置店铺支持地址变更审核.
     *
     * @param  array  $params
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function addressAppliedSwitch(array $params): array
    {
        return $this->httpPost('order/AddressAppliedSwitch', $params);
    }

    /**
     * 买家地址变更确认.
     *
     * @param  array  $params
     * @return array
     *
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
     * @param  array  $params
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function addressModify(array $params): array
    {
        return $this->httpPost('order/addressModify', $params);
    }

    /**
     * 获取服务单列表.
     *
     * @param  array  $params
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function getServiceList(array $params): array
    {
        return $this->httpPost('order/getServiceList', $params);
    }

    /**
     * 回复服务请求
     *
     * @param  array  $params
     * @return array
     *
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
     * @param  array  $params
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function serviceDetail(array $params): array
    {
        return $this->httpPost('order/serviceDetail', $params);
    }

    /**
     * 未支付订单改货款.
     *
     * @param  array  $params
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function updateOrderAmount(array $params): array
    {
        return $this->httpPost('order/updateOrderAmount', $params);
    }

    /**
     * 未支付订单邮费修改.
     *
     * @param  array  $params
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function updatePostAmount(array $params): array
    {
        return $this->httpPost('order/updatePostAmount', $params);
    }

    /**
     * 查询订单账单明细.
     *
     * @param  array  $params
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function settle(array $params): array
    {
        return $this->httpPost('order/settle', $params);
    }

    /**
     * 获取运费险保单详情.
     *
     * @param  array  $params
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function insurance(array $params): array
    {
        return $this->httpPost('order/insurance', $params);
    }

    /**
     * 新版查询订单的详细信息.
     *
     * @param  array  $params
     * @return array
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function orderDetail(array $params): array
    {
        return $this->httpPost('order/orderDetail', $params);
    }

    /**
     * 订单列表查询.
     *
     * @param  array  $params
     * @return array
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function searchList(array $params): array
    {
        return $this->httpPost('order/searchList', $params);
    }

    /**
     * 获取跨境承运单信息.
     *
     * @param  array  $params
     * @return array
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function getCrossBorderFulfillInfo(array $params): array
    {
        return $this->httpPost('order/getCrossBorderFulfillInfo', $params);
    }

    /**
     * 获取App对于商家订单修改地址的审核权限.
     *
     * @return array
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function addresSwitchConfig(): array
    {
        return $this->httpPost('order/addresSwitchConfig');
    }

    /**
     * 查询账单明细.
     *
     * @param  array  $params
     * @return array
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function getSettleBillDetail(array $params): array
    {
        return $this->httpPost('order/getSettleBillDetail', $params);
    }

    /**
     * 批量加密接口.
     *
     * @param  array  $params
     * @return array
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function batchEncrypt(array $params): array
    {
        return $this->httpPost('order/batchEncrypt', $params);
    }

    /**
     * 批量脱敏接口.
     *
     * @param  array  $params
     * @return array
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function batchSensitive(array $params): array
    {
        return $this->httpPost('order/batchSensitive', $params);
    }

    /**
     * 批量解密接口.
     *
     * @param  array  $params
     * @return array
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function batchDecrypt(array $params): array
    {
        return $this->httpPost('order/batchDecrypt', $params);
    }

    /**
     * 批量获取索引串接口.
     *
     * @param  array  $params
     * @return array
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function batchSearchIndex(array $params): array
    {
        return $this->httpPost('order/BatchSearchIndex', $params);
    }

    /**
     * 查看商家开票列表.
     *
     * @param  array  $params
     * @return array
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function invoiceList(array $params): array
    {
        return $this->httpPost('order/invoiceList', $params);
    }

    /**
     * 订单商品的序列号上传.
     *
     * @param  array  $params
     * @return array
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function addSerialNumber(array $params): array
    {
        return $this->httpPost('order/addSerialNumber', $params);
    }

    /**
     * 发票信息回传API.
     *
     * @param  array  $params
     * @return array
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function invoiceUpload(array $params): array
    {
        return $this->httpPost('order/invoiceUpload', $params);
    }

    /**
     * 查保单详情.
     *
     * @param  array  $params
     * @return array
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function policy(array $params): array
    {
        return $this->httpPost('order/policy', $params);
    }

    /**
     * 下载账单，生成downloadId.
     *
     * @param  array  $params
     * @return array
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function downloadSettleItemToShop(array $params): array
    {
        return $this->httpPost('order/downloadSettleItemToShop', $params);
    }
}
