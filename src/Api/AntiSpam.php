<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class AntiSpam extends BaseRequest
{
    /**
     * 商户登陆风险检查.
     *
     * @param  array  $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function userLogin(array $params): array
    {
        return $this->httpPost('antispam/userLogin', $params);
    }
}
