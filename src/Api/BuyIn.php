<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class BuyIn extends BaseRequest
{
    /**
     * 商品定向计划管理.
     *
     * @param  array  $params
     * @return array
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public function orienPlanCtrl(array $params): array
    {
        return $this->httpPost('buyin/orienPlanCtrl', $params);
    }

    /**
     * 商品定向计划查询.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function orienPlanList(array $params): array
    {
        return $this->httpPost('buyin/orienPlanList', $params);
    }

    /**
     * 向指定定向计划中添加达人.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function orienPlanAuthorsAdd(array $params): array
    {
        return $this->httpPost('buyin/orienPlanAuthorsAdd', $params);
    }

    /**
     * 定向计划达人申请审核.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function orienPlanAudit(array $params): array
    {
        return $this->httpPost('buyin/orienPlanAudit', $params);
    }

    /**
     * 创建/修改商品定向计划.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function createOrUpdateOrienPlan(array $params): array
    {
        return $this->httpPost('buyin/createOrUpdateOrienPlan', $params);
    }

    /**
     * 查询定向计划作者列表.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function orienPlanAuthors(array $params): array
    {
        return $this->httpPost('buyin/orienPlanAuthors', $params);
    }

    /**
     * 团长活动查询接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function activitySearch(array $params): array
    {
        return $this->httpPost('buyin/activitySearch', $params);
    }

    /**
     * 商品团长活动提报接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function applyActivities(array $params): array
    {
        return $this->httpPost('buyin/applyActivities', $params);
    }

    /**
     * 创建/修改商品专属推广计划.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function exclusivePlan(array $params): array
    {
        return $this->httpPost('buyin/exclusivePlan', $params);
    }

    /**
     * 创建/修改普通商品推广计划.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function simplePlan(array $params): array
    {
        return $this->httpPost('buyin/simplePlan', $params);
    }
}
