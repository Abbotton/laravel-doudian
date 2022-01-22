<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class Sms extends BaseRequest
{
    /**
     * 提交短信模板申请单.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function templateApply(array $params): array
    {
        return $this->httpPost('sms/template/apply', $params);
    }

    /**
     * 公共模版查询接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function publicTemplate(array $params): array
    {
        return $this->httpPost('sms/public/template', $params);
    }

    /**
     * 提交短信签名申请单.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function signApply(array $params): array
    {
        return $this->httpPost('sms/sign/apply', $params);
    }

    /**
     * 撤销短信模板申请单.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function templateRevoke(array $params): array
    {
        return $this->httpPost('sms/template/revoke', $params);
    }

    /**
     * 查看短信签名申请单.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function signApplyList(array $params): array
    {
        return $this->httpPost('sms/sign/apply/list', $params);
    }

    /**
     * 短信发送.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function send(array $params): array
    {
        return $this->httpPost('sms/send', $params);
    }

    /**
     * 批量短信发送.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function batchSend(array $params): array
    {
        return $this->httpPost('sms/batchSend', $params);
    }

    /**
     * 删除短信签名.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function signDelete(array $params): array
    {
        return $this->httpPost('sms/sign/delete', $params);
    }

    /**
     * 撤销短信签名申请单.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function signApplyRevoke(array $params): array
    {
        return $this->httpPost('sms/sign/apply/revoke', $params);
    }

    /**
     * 删除短信模板.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function templateDelete(array $params): array
    {
        return $this->httpPost('sms/template/delete', $params);
    }

    /**
     * 查询短信发送结果.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function sendResult(array $params): array
    {
        return $this->httpPost('sms/sendResult', $params);
    }

    /**
     * 查询短信模板申请单.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function templateApplyList(array $params): array
    {
        return $this->httpPost('sms/template/apply/list', $params);
    }

    /**
     * 查看短信签名.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function signSearch(array $params): array
    {
        return $this->httpPost('sms/sign/search', $params);
    }

    /**
     * 查询短信模板.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function templateSearch(array $params): array
    {
        return $this->httpPost('sms/template/search', $params);
    }
}
