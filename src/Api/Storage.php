<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Storage extends BaseRequest
{
    /**
     * 回告销退单状态.
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function getOrderList(): array
    {
        return $this->httpPost('storage/notifySaleReturnStatus');
    }
}
