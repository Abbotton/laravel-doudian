<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Security extends BaseRequest
{
    /**
     * 批量上报订单安全事件接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function batchReportOrderSecurityEvent(array $params): array
    {
        return $this->httpPost('security/batchReportOrderSecurityEvent', $params);
    }
}
