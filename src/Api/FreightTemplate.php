<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class FreightTemplate extends BaseRequest
{
    /**
     * 更新运费模板.
     *
     * @param  array  $params
     *
     * @return array
     * @throws RequestException
     *
     * @throws InvalidArgumentException
     */
    public function update(array $params): array
    {
        return $this->httpPost('freightTemplate/update', $params);
    }

    /**
     * 创建运费模板.
     *
     * @param  array  $params
     *
     * @return array
     * @throws RequestException
     *
     * @throws InvalidArgumentException
     */
    public function create(array $params): array
    {
        return $this->httpPost('freightTemplate/create', $params);
    }

    /**
     * 运费模板查询.
     *
     * @param  array  $params
     *
     * @return array
     * @throws InvalidArgumentException
     *
     * @throws RequestException
     */
    public function list(array $params = []): array
    {
        return $this->httpPost('freightTemplate/list', $params);
    }
}
