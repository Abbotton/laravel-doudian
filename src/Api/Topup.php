<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Topup extends BaseRequest
{
    /**
     * 商家充值结果回调.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function result(array $params): array
    {
        return $this->httpPost('topup/result', $params);
    }

    /**
     * 获取叶子类目可选的账号模板id.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function accountTemplateList(array $params): array
    {
        return $this->httpPost('topup/accountTemplateList', $params);
    }
}
