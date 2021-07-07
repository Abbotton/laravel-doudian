<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Member extends BaseRequest
{
    /**
     * 会员等级更新.
     *
     * @param  array  $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function batchUpdate(array $params): array
    {
        return $this->httpPost('member/batchUpdate', $params);
    }
}
