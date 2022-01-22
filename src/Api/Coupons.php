<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Coupons extends BaseRequest
{
    /**
     * 卡券取消核销接口.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function cancelVerify(array $params): array
    {
        return $this->httpPost('coupons/cancelVerify', $params);
    }

    /**
     * 卡券废弃接口.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function abandon(array $params): array
    {
        return $this->httpPost('coupons/abandon', $params);
    }

    /**
     * 卡券同步.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function syncV2(array $params): array
    {
        return $this->httpPost('coupons/syncV2', $params);
    }

    /**
     * 卡券核销接口V2版本.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function verifyV2(array $params): array
    {
        return $this->httpPost('coupons/verifyV2', $params);
    }

    /**
     * 卡券核销次数更新.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function certVerifyUpdate(array $params): array
    {
        return $this->httpPost('coupons/certVerifyUpdate', $params);
    }

    /**
     * 三方卡券列表查询.
     *
     * @param  array  $params
     *
     * @return array
     * @throws InvalidArgumentException
     *
     * @throws RequestException
     */
    public function list(array $params): array
    {
        return $this->httpPost('coupons/list', $params);
    }
}
