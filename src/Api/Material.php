<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Material extends BaseRequest
{
    /**
     * 查询商品详情.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function materialsProductsDetails(array $params): array
    {
        return $this->httpPost('alliance/materialsProductsDetails', $params);
    }

    /**
     * 创建文件夹.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function createFolder(array $params): array
    {
        return $this->httpPost('material/createFolder', $params);
    }

    /**
     * 将文件夹移动到回收站.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function moveFolderToRecycleBin(array $params): array
    {
        return $this->httpPost('material/moveFolderToRecycleBin', $params);
    }

    /**
     * 编辑/移动文件夹.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function editFolder(array $params): array
    {
        return $this->httpPost('material/editFolder', $params);
    }

    /**
     * 移动素材到回收站.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function moveMaterialToRecycleBin(array $params): array
    {
        return $this->httpPost('material/moveMaterialToRecycleBin', $params);
    }

    /**
     * 从回收站中恢复素材.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function recoverMaterial(array $params): array
    {
        return $this->httpPost('material/recoverMaterial', $params);
    }

    /**
     * 编辑素材.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function editMaterial(array $params): array
    {
        return $this->httpPost('material/editMaterial', $params);
    }

    /**
     * 从回收站恢复文件夹.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function recoverFolder(array $params): array
    {
        return $this->httpPost('material/recoverFolder', $params);
    }

    /**
     * 彻底删除素材.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function deleteMaterial(array $params): array
    {
        return $this->httpPost('material/deleteMaterial', $params);
    }

    /**
     * 彻底删除文件夹.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function deleteFolder(array $params): array
    {
        return $this->httpPost('material/deleteFolder', $params);
    }

    /**
     * 查素材详情.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function queryMaterialDetail(array $params): array
    {
        return $this->httpPost('material/queryMaterialDetail', $params);
    }

    /**
     * 同步上传素材.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function uploadImageSync(array $params): array
    {
        return $this->httpPost('material/uploadImageSync', $params);
    }

    /**
     * 素材中心--异步上传视频接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function uploadVideoAsync(array $params): array
    {
        return $this->httpPost('material/uploadVideoAsync', $params);
    }

    /**
     * 搜索素材.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function searchMaterial(array $params): array
    {
        return $this->httpPost('material/searchMaterial', $params);
    }

    /**
     * 搜索文件夹.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function searchFolder(array $params): array
    {
        return $this->httpPost('material/searchFolder', $params);
    }

    /**
     * 查看文件夹详情.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function getFolderInfo(array $params): array
    {
        return $this->httpPost('material/getFolderInfo', $params);
    }

    /**
     * 批量上传视频到素材中心.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function batchUploadVideoAsync(array $params): array
    {
        return $this->httpPost('material/batchUploadVideoAsync', $params);
    }

    /**
     * 批量上传图片到素材中心.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function batchUploadImageSync(array $params): array
    {
        return $this->httpPost('material/batchUploadImageSync', $params);
    }

    /**
     * 获取商家容量详情.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function getCapInfo(array $params): array
    {
        return $this->httpPost('material/get_cap_info', $params);
    }
}
