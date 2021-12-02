<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Token extends BaseRequest
{
    /**
     * 生成token API.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function create(array $params): array
    {
        return $this->httpPost('token/create', $params);
    }
}
