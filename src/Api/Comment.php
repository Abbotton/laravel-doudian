<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Comment extends BaseRequest
{
    /**
     * 评价列表查询.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function list(array $params): array
    {
        return $this->httpPost('comment/list', $params);
    }

    /**
     * 评价回复.
     *
     * @param array $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function reply(array $params): array
    {
        return $this->httpPost('comment/reply', $params);
    }
}
