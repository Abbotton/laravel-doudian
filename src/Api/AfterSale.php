<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class AfterSale extends BaseRequest
{
    /**
     * 商家为订单添加售后备注.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function addOrderRemark(array $params): array
    {
        return $this->httpPost('afterSale/addOrderRemark', $params);
    }

    /**
     * 商家处理换货申请.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function buyerExchange(array $params): array
    {
        return $this->httpPost('afterSale/buyerExchange', $params);
    }

    /**
     * 商家确认是否收到换货.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function buyerExchangeConfirm(array $params): array
    {
        return $this->httpPost('afterSale/buyerExchangeConfirm', $params);
    }

    /**
     * 商家处理发货后仅退款申请.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function buyerRefund(array $params): array
    {
        return $this->httpPost('afterSale/buyerRefund', $params);
    }

    /**
     * 商家处理退货申请.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function buyerReturn(array $params): array
    {
        return $this->httpPost('afterSale/buyerReturn', $params);
    }

    /**
     * 商家确认是否收到退货.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function firmReceive(array $params): array
    {
        return $this->httpPost('afterSale/firmReceive', $params);
    }

    /**
     * 获取已发货且有售后的订单列表（待下线）.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function orderList(array $params): array
    {
        return $this->httpPost('afterSale/orderList', $params);
    }

    /**
     * 根据子订单ID查询退款详情.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function refundProcessDetail(array $params): array
    {
        return $this->httpPost('afterSale/refundProcessDetail', $params);
    }

    /**
     * 卖家提交举证信息.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function submitEvidence(array $params = []): array
    {
        return $this->httpPost('aftersale/submitEvidence', $params);
    }

    /**
     * 延长售后收货时限.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function timeExtend(array $params): array
    {
        return $this->httpPost('afterSale/timeExtend', $params);
    }

    /**
     * 货到付款订单上传赔付凭证
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function uploadCompensation(array $params): array
    {
        return $this->httpPost('afterSale/uploadCompensation', $params);
    }

    /**
     * 获取备货中有退款的订单列表（待下线）.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function refundOrderList(array $params): array
    {
        return $this->httpPost('refund/orderList', $params);
    }

    /**
     * 商家处理备货中退款申请.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function shopRefund(array $params): array
    {
        return $this->httpPost('refund/shopRefund', $params);
    }

    /**
     * 售后单列表查询（推荐使用）.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function refundListSearch(array $params = []): array
    {
        return $this->httpPost('trade/refundListSearch', $params);
    }
}
