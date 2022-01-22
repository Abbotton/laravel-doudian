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
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function addOrderRemark(array $params): array
    {
        return $this->httpPost('afterSale/addOrderRemark', $params);
    }

    /**
     * 商家处理换货申请.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function buyerExchange(array $params): array
    {
        return $this->httpPost('afterSale/buyerExchange', $params);
    }

    /**
     * 商家确认是否收到换货.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function buyerExchangeConfirm(array $params): array
    {
        return $this->httpPost('afterSale/buyerExchangeConfirm', $params);
    }

    /**
     * 卖家提交举证信息.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function submitEvidence(array $params = []): array
    {
        return $this->httpPost('afterSale/submitEvidence', $params);
    }

    /**
     * 延长售后收货时限.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function timeExtend(array $params): array
    {
        return $this->httpPost('afterSale/timeExtend', $params);
    }

    /**
     * 售后单列表查询（推荐使用）.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function refundListSearch(array $params = []): array
    {
        return $this->httpPost('trade/refundListSearch', $params);
    }

    /**
     * 提供给商家获取售后单详情信息.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function detail(array $params = []): array
    {
        return $this->httpPost('afterSale/Detail', $params);
    }

    /**
     * 售后审核接口聚合版.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function operate(array $params = []): array
    {
        return $this->httpPost('afterSale/Operate', $params);
    }

    /**
     * 打开售后通道，使用户可以发起超级售后.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function openAfterSaleChannel(array $params = []): array
    {
        return $this->httpPost('afterSale/OpenAfterSaleChannel', $params);
    }

    /**
     * 售后列表接口.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function List(array $params = []): array
    {
        return $this->httpPost('afterSale/List', $params);
    }

    /**
     * 商家经过质检确认用户退货入仓无误后，售后小助手自动同意退款.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function returnGoodsToWareHouseSuccess(array $params = []): array
    {
        return $this->httpPost('afterSale/returnGoodsToWareHouseSuccess', $params);
    }

    /**
     * 商家在未发货仅退款途中取消发货状态，小助手自动同意退款.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function cancelSendGoodsSuccess(array $params = []): array
    {
        return $this->httpPost('afterSale/CancelSendGoodsSuccess', $params);
    }

    /**
     * 申请物流拦截.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function applyLogisticsIntercept(array $params = []): array
    {
        return $this->httpPost('afterSale/applyLogisticsIntercept', $params);
    }

    /**
     * 售后审核处理原因列表查询接口.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function rejectReasonCodeList(array $params = []): array
    {
        return $this->httpPost('afterSale/rejectReasonCodeList', $params);
    }
}
