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
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function getShopCategory(array $params): array
    {
        return $this->httpPost('shop/getShopCategory', $params);
    }
}
