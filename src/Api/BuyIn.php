<?php

namespace Abbotton\DouDian\Api;

use Illuminate\Http\Client\RequestException;
use Psr\SimpleCache\InvalidArgumentException;

class BuyIn extends BaseRequest
{
    /**
     * 商品定向计划管理.
     *
     * @param array $params
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     *
     * @return array
     */
    public function orienPlanCtrl(array $params): array
    {
        return $this->httpPost('buyin/orienPlanCtrl', $params);
    }

    /**
     * 商品定向计划查询.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function orienPlanList(array $params): array
    {
        return $this->httpPost('buyin/orienPlanList', $params);
    }

    /**
     * 向指定定向计划中添加达人.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function orienPlanAuthorsAdd(array $params): array
    {
        return $this->httpPost('buyin/orienPlanAuthorsAdd', $params);
    }

    /**
     * 定向计划达人申请审核.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function orienPlanAudit(array $params): array
    {
        return $this->httpPost('buyin/orienPlanAudit', $params);
    }

    /**
     * 创建/修改商品定向计划.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function createOrUpdateOrienPlan(array $params): array
    {
        return $this->httpPost('buyin/createOrUpdateOrienPlan', $params);
    }

    /**
     * 查询定向计划作者列表.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function orienPlanAuthors(array $params): array
    {
        return $this->httpPost('buyin/orienPlanAuthors', $params);
    }

    /**
     * 团长活动查询接口.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function activitySearch(array $params): array
    {
        return $this->httpPost('buyin/activitySearch', $params);
    }

    /**
     * 商品团长活动提报接口.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function applyActivities(array $params): array
    {
        return $this->httpPost('buyin/applyActivities', $params);
    }

    /**
     * 创建/修改商品专属推广计划.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function exclusivePlan(array $params): array
    {
        return $this->httpPost('buyin/exclusivePlan', $params);
    }

    /**
     * 创建/修改普通商品推广计划.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function simplePlan(array $params): array
    {
        return $this->httpPost('buyin/simplePlan', $params);
    }

    /**
     * 机构查询达人直播间分销订单.
     *
     * @param array $params
     *
     * @throws InvalidArgumentException
     * @throws RequestException
     *
     * @return array
     */
    public function instituteOrderAds(array $params): array
    {
        return $this->httpPost('buyin/instituteOrderAds', $params);
    }
}
