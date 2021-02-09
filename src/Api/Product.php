<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Product extends BaseRequest
{
    /**
     * 运费模板查询.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function freightTemplateList(array $params = []): array
    {
        return $this->httpPost('freightTemplate/list', $params);
    }

    /**
     * 添加商品
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function productAdd(array $params): array
    {
        return $this->httpPost('product/add', $params);
    }

    /**
     * 商品发布新接口.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function productAddV2(array $params): array
    {
        return $this->httpPost('product/addV2', $params);
    }

    /**
     * 删除商品
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function productDel(array $params): array
    {
        return $this->httpPost('product/del', $params);
    }

    /**
     * 获取商品详情.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function productDetail(array $params): array
    {
        return $this->httpPost('product/detail', $params);
    }

    /**
     * 编辑商品
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function productDdit(array $params): array
    {
        return $this->httpPost('product/edit', $params);
    }

    /**
     * 设置商品限购.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function editBuyerLimit(array $params): array
    {
        return $this->httpPost('product/editBuyerLimit', $params);
    }

    /**
     * 商品编辑新接口.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function productEditV2(array $params): array
    {
        return $this->httpPost('product/editV2', $params);
    }

    /**
     * 根据商品分类获取对应的属性列表.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function getCateProperty(array $params): array
    {
        return $this->httpPost('product/getCateProperty', $params);
    }

    /**
     * 获取商品列表.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function productList(array $params): array
    {
        return $this->httpPost('product/list', $params);
    }

    /**
     * 商品下架.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function setOffline(array $params): array
    {
        return $this->httpPost('product/setOffline', $params);
    }

    /**
     * 商品上架.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function setOnline(array $params): array
    {
        return $this->httpPost('product/setOnline', $params);
    }

    /**
     * 添加SKU.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function skuAdd(array $params): array
    {
        return $this->httpPost('sku/add', $params);
    }

    /**
     * 批量添加sku.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function addAll(array $params): array
    {
        return $this->httpPost('sku/addAll', $params);
    }

    /**
     * 获取商品sku详情.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function skuDetail(array $params): array
    {
        return $this->httpPost('sku/detail', $params);
    }

    /**
     * 修改sku编码
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function editCode(array $params): array
    {
        return $this->httpPost('sku/editCode', $params);
    }

    /**
     * 编辑sku价格
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function editPrice(array $params): array
    {
        return $this->httpPost('sku/editPrice', $params);
    }

    /**
     * 修改sku对应的供应商编码ID.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function skuEditSupplierId(array $params): array
    {
        return $this->httpPost('sku/editSupplierId', $params);
    }

    /**
     * 获取商品sku列表.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function skuList(array $params): array
    {
        return $this->httpPost('sku/list', $params);
    }

    /**
     * 修改sku库存.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function syncStock(array $params): array
    {
        return $this->httpPost('sku/syncStock', $params);
    }

    /**
     * 批量同步库存接口.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function syncStockBatch(array $params): array
    {
        return $this->httpPost('sku/syncStockBatch', $params);
    }

    /**
     * 添加规格
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function specAdd(array $params): array
    {
        return $this->httpPost('spec/add', $params);
    }

    /**
     * 删除规格
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function specDel(array $params): array
    {
        return $this->httpPost('spec/del', $params);
    }

    /**
     * 获取规格列表.
     *
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function specList(): array
    {
        return $this->httpPost('spec/list');
    }

    /**
     * 获取规格详情.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function specDetail(array $params): array
    {
        return $this->httpPost('spec/specDetail', $params);
    }
}
