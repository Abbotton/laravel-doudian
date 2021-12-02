<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Yunc extends BaseRequest
{
    /**
     * toB场景取消出库单.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function cancelOutboundOrderToB(array $params): array
    {
        return $this->httpPost('yunc/cancelOutboundOrderToB', $params);
    }

    /**
     * 商家入驻仓关系查询.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function shopWarehouseRefQuery(array $params): array
    {
        return $this->httpPost('yunc/shopWarehouseRefQuery', $params);
    }

    /**
     * wms入库单回告.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function wmsInboundCallback(array $params): array
    {
        return $this->httpPost('yunc/wmsInboundCallback', $params);
    }

    /**
     * 云仓出库接单.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function cloudCreateOutboundOrder(array $params): array
    {
        return $this->httpPost('yunc/cloudCreateOutboundOrder', $params);
    }

    /**
     * 销退入库取消.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function cloudCancelInboundOrder(array $params): array
    {
        return $this->httpPost('yunc/cloudCancelInboundOrder', $params);
    }

    /**
     * 销退单入库.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function cloudCreateInboundOrder(array $params): array
    {
        return $this->httpPost('yunc/cloudCreateInboundOrder', $params);
    }

    /**
     * 云仓出库取消.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function cloudCancelOutboundOrder(array $params): array
    {
        return $this->httpPost('yunc/cloudCancelOutboundOrder', $params);
    }

    /**
     * 给外部WMS调用的推送出库信息回传.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function pushOutboundFeedback(array $params): array
    {
        return $this->httpPost('yunc/pushOutboundFeedback', $params);
    }

    /**
     * 货品推送接口-ERP(单个).
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function erpCargoSinglePush(array $params): array
    {
        return $this->httpPost('yunc/erpCargoSinglePush', $params);
    }

    /**
     * erp创建入库单.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function erpInboundCreate(array $params): array
    {
        return $this->httpPost('yunc/erpInboundCreate', $params);
    }

    /**
     * 设置指定地址下的仓的优先级.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function erpInboundCancel(array $params): array
    {
        return $this->httpPost('yunc/erpInboundCancel', $params);
    }

    /**
     * 库存调整(盘点和转移).
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function adjustInventory(array $params): array
    {
        return $this->httpPost('yunc/adjustInventory', $params);
    }

    /**
     * toB出库单.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function createOutboundOrderToB(array $params): array
    {
        return $this->httpPost('yunc/createOutboundOrderToB', $params);
    }

    /**
     * 仓储系统回传发货信息.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function deliveryInfoNotify(array $params): array
    {
        return $this->httpPost('wms/deliveryInfoNotify', $params);
    }
}
