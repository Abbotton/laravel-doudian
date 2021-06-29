<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Test extends BaseRequest
{
    /**
     * 小流量接口测试.
     *
     * @param  array  $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function adminTest(array $params): array
    {
        return $this->httpPost('test/adminTest', $params);
    }
}
