<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Order extends BaseRequest
{
    /**
     * 添加订单备注.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function addOrderRemark(array $params): array
    {
        return $this->httpPost('order/addOrderRemark', $params);
    }

    /**
     * 设置店铺支持地址变更审核.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function addressAppliedSwitch(array $params): array
    {
        return $this->httpPost('order/AddressAppliedSwitch', $params);
    }

    /**
     * 买家地址变更确认.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function addressConfirm(array $params): array
    {
        return $this->httpPost('order/addressConfirm', $params);
    }

    /**
     * 卖家主动修改收货地址
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function addressModify(array $params): array
    {
        return $this->httpPost('order/addressModify', $params);
    }

    /**
     * 获取服务单列表.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function getServiceList(array $params): array
    {
        return $this->httpPost('order/getServiceList', $params);
    }

    /**
     * 回复服务请求
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function replyService(array $params): array
    {
        return $this->httpPost('order/replyService', $params);
    }

    /**
     * 查询商家服务单详情请求
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function serviceDetail(array $params): array
    {
        return $this->httpPost('order/serviceDetail', $params);
    }

    /**
     * 未支付订单改货款.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function updateOrderAmount(array $params): array
    {
        return $this->httpPost('order/updateOrderAmount', $params);
    }

    /**
     * 未支付订单邮费修改.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function updatePostAmount(array $params): array
    {
        return $this->httpPost('order/updatePostAmount', $params);
    }

    /**
     * 获取运费险保单详情.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function insurance(array $params): array
    {
        return $this->httpPost('order/insurance', $params);
    }

    /**
     * 新版查询订单的详细信息.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function orderDetail(array $params): array
    {
        return $this->httpPost('order/orderDetail', $params);
    }

    /**
     * 订单列表查询.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function searchList(array $params): array
    {
        return $this->httpPost('order/searchList', $params);
    }

    /**
     * 获取跨境承运单信息.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function getCrossBorderFulfillInfo(array $params): array
    {
        return $this->httpPost('order/getCrossBorderFulfillInfo', $params);
    }

    /**
     * 获取App对于商家订单修改地址的审核权限.
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function addresSwitchConfig(): array
    {
        return $this->httpPost('order/addresSwitchConfig');
    }

    /**
     * 批量加密接口.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function batchEncrypt(array $params): array
    {
        return $this->httpPost('order/batchEncrypt', $params);
    }

    /**
     * 批量脱敏接口.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function batchSensitive(array $params): array
    {
        return $this->httpPost('order/batchSensitive', $params);
    }

    /**
     * 批量解密接口.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function batchDecrypt(array $params): array
    {
        return $this->httpPost('order/batchDecrypt', $params);
    }

    /**
     * 批量获取索引串接口.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function batchSearchIndex(array $params): array
    {
        return $this->httpPost('order/BatchSearchIndex', $params);
    }

    /**
     * 查看商家开票列表.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function invoiceList(array $params): array
    {
        return $this->httpPost('order/invoiceList', $params);
    }

    /**
     * 订单商品的序列号上传.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function addSerialNumber(array $params): array
    {
        return $this->httpPost('order/addSerialNumber', $params);
    }

    /**
     * 发票信息回传API.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function invoiceUpload(array $params): array
    {
        return $this->httpPost('order/invoiceUpload', $params);
    }

    /**
     * 查保单详情.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function policy(array $params): array
    {
        return $this->httpPost('order/policy', $params);
    }

    /**
     * 下载账单，生成downloadId.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function downloadSettleItemToShop(array $params): array
    {
        return $this->httpPost('order/downloadSettleItemToShop', $params);
    }

    /**
     * 查询账单明细V2.
     *
     * @param  array  $params
     *
     * @return array
     * @throws RequestException
     *
     * @throws InvalidArgumentException
     */
    public function getSettleBillDetailV2(array $params): array
    {
        return $this->httpPost('order/getSettleBillDetailV2', $params);
    }

    /**
     * 查看是否下载成功并返回下载地址.
     *
     * @param  array  $params
     *
     * @return array
     * @throws RequestException
     *
     * @throws InvalidArgumentException
     */
    public function downloadToShop(array $params): array
    {
        return $this->httpPost('order/downloadToShop', $params);
    }

    /**
     * 下载资金流水明细文件.
     *
     * @param  array  $params
     *
     * @return array
     * @throws RequestException
     *
     * @throws InvalidArgumentException
     */
    public function downloadShopAccountItemFile(array $params): array
    {
        return $this->httpPost('order/downloadShopAccountItemFile', $params);
    }

    /**
     * 资金流水明细下载请求.
     *
     * @param  array  $params
     *
     * @return array
     * @throws RequestException
     *
     * @throws InvalidArgumentException
     */
    public function downloadShopAccountItem(array $params): array
    {
        return $this->httpPost('order/downloadShopAccountItem', $params);
    }

    /**
     * 资金流水明细接口.
     *
     * @param  array  $params
     *
     * @return array
     * @throws RequestException
     *
     * @throws InvalidArgumentException
     */
    public function getShopAccountItem(array $params): array
    {
        return $this->httpPost('order/getShopAccountItem', $params);
    }

    /**
     * 查询明文手机号报备接口(PS: 官方文档中方法名拼写错误).
     *
     * @param  array  $params
     *
     * @return array
     * @throws RequestException
     *
     * @throws InvalidArgumentException
     */
    public function orderReportList(array $params): array
    {
        return $this->httpPost('order/ordeReportList', $params);
    }

    /**
     * 商家结算账单.
     *
     * @param  array  $params
     *
     * @return array
     * @throws RequestException
     *
     * @throws InvalidArgumentException
     */
    public function getSettleBillDetailV3(array $params): array
    {
        return $this->httpPost('order/getSettleBillDetailV3', $params);
    }
}
