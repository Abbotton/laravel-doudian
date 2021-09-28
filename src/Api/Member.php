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
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function batchUpdate(array $params): array
    {
        return $this->httpPost('member/batchUpdate', $params);
    }

    /**
     * 会员订单列表查询.
     *
     * @param  array  $params
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function searchList(array $params): array
    {
        return $this->httpPost('member/searchList', $params);
    }
}
