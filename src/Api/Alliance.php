<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Alliance extends BaseRequest
{
    /**
     * 查询联盟订单明细.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function getOrderList(array $params): array
    {
        return $this->httpPost('alliance/getOrderList', $params);
    }

    /**
     * 检索精选联盟商品.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function materialsProductsSearch(array $params): array
    {
        return $this->httpPost('alliance/materialsProductsSearch', $params);
    }

    /**
     * 团长活动创建/编辑接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function colonelActivityCreateOrUpdate(array $params): array
    {
        return $this->httpPost('alliance/colonelActivityCreateOrUpdate', $params);
    }

    /**
     * 创建活动时候可选择的类目接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function activityProductCategoryList(array $params): array
    {
        return $this->httpPost('alliance/activityProductCategoryList', $params);
    }

    /**
     * 团长活动查询接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function instituteColonelActivityList(array $params): array
    {
        return $this->httpPost('alliance/instituteColonelActivityList', $params);
    }

    /**
     * 专属团长活动删除接口（下线+删除）.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function instituteColonelActivityOperate(array $params): array
    {
        return $this->httpPost('alliance/instituteColonelActivityOperate', $params);
    }

    /**
     * 活动商品查询接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function colonelActivityProduct(array $params): array
    {
        return $this->httpPost('alliance/colonelActivityProduct', $params);
    }

    /**
     * 专属团长活动商品审核接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function colonelActivityProductAudit(array $params): array
    {
        return $this->httpPost('alliance/colonelActivityProductAudit', $params);
    }

    /**
     * 专属团长活动商品延时接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function colonelActivityProductExtension(array $params): array
    {
        return $this->httpPost('alliance/colonelActivityProductExtension', $params);
    }

    /**
     * 类目查询.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function materialsProductCategory(array $params): array
    {
        return $this->httpPost('alliance/materialsProductCategory', $params);
    }
}
