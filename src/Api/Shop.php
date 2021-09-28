<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Shop extends BaseRequest
{
    /**
     * 获取店铺的已授权品牌列表.
     *
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function brandList(): array
    {
        return $this->httpPost('shop/brandList');
    }

    /**
     * 获取店铺后台供商家发布商品的类目.
     *
     * @param  array  $params
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function getShopCategory(array $params): array
    {
        return $this->httpPost('shop/getShopCategory', $params);
    }

    /**
     * 售后地址列表接口.
     *
     * @param  array  $params
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function addressList(array $params): array
    {
        return $this->httpPost('address/list', $params);
    }

    /**
     * 店铺创建售后地址接口.
     *
     * @param  array  $params
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function addressCreate(array $params): array
    {
        return $this->httpPost('address/create', $params);
    }

    /**
     * 店铺创建售后地址接口.
     *
     * @param  array  $params
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function addressUpdate(array $params): array
    {
        return $this->httpPost('address/update', $params);
    }
}
