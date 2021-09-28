<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Storage extends BaseRequest
{
    /**
     * 回告销退单状态.
     *
     * @return array
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function getOrderList(): array
    {
        return $this->httpPost('storage/notifySaleReturnStatus');
    }
}
