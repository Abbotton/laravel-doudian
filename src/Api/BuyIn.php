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

    /**
     * 商品状态查询.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function materialsProductStatus(array $params): array
    {
        return $this->httpPost('buyin/materialsProductStatus', $params);
    }

    /**
     * 查询机构联盟订单.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function queryInstituteOrders(array $params): array
    {
        return $this->httpPost('buyin/queryInstituteOrders', $params);
    }

    /**
     * 达人PID创建.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function kolPidCreate(array $params): array
    {
        return $this->httpPost('buyin/kolPidCreate', $params);
    }

    /**
     * 达人PID查询接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function kolPidList(array $params): array
    {
        return $this->httpPost('buyin/kolPidList', $params);
    }

    /**
     * 达人PID 编辑.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function kolPidEdit(array $params): array
    {
        return $this->httpPost('buyin/kolPidEdit', $params);
    }

    /**
     * 达人PID删除.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function kolPidDel(array $params): array
    {
        return $this->httpPost('buyin/kolPidDel', $params);
    }

    /**
     * 商品分销转链.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function kolProductShare(array $params): array
    {
        return $this->httpPost('buyin/kolProductShare', $params);
    }

    /**
     * 机构PID创建.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function institutePidCreate(array $params): array
    {
        return $this->httpPost('buyin/institutePidCreate', $params);
    }

    /**
     * 机构PID 编辑.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function institutePidEdit(array $params): array
    {
        return $this->httpPost('buyin/institutePidEdit', $params);
    }

    /**
     * 机构PID删除.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function institutePidDel(array $params): array
    {
        return $this->httpPost('buyin/institutePidDel', $params);
    }

    /**
     * 直播间分销物料查询.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function liveShareMaterial(array $params): array
    {
        return $this->httpPost('buyin/liveShareMaterial', $params);
    }

    /**
     * 机构获取达人直播间分享链接.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function instituteLiveShare(array $params): array
    {
        return $this->httpPost('buyin/instituteLiveShare', $params);
    }

    /**
     * 机构PID查询接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function institutePidList(array $params): array
    {
        return $this->httpPost('buyin/institutePidList', $params);
    }

    /**
     * 查询达人直播间分销订单.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function kolOrderAds(array $params): array
    {
        return $this->httpPost('buyin/kolOrderAds', $params);
    }

    /**
     * 查询机构下团长活动特殊申请.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function specialApplyList(array $params): array
    {
        return $this->httpPost('buyin/colonel/specialApplyList', $params);
    }

    /**
     * 团长活动特殊申请审核.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function specialApplyDeal(array $params): array
    {
        return $this->httpPost('buyin/colonel/specialApplyDeal', $params);
    }

    /**
     * 查询达人视角商品详情.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function kolMaterialsProductsDetails(array $params): array
    {
        return $this->httpPost('buyin/kolMaterialsProductsDetails', $params);
    }

    /**
     * 查询机构联盟MCN机构订单.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function instituteOrderMCN(array $params): array
    {
        return $this->httpPost('buyin/instituteOrderMCN', $params);
    }

    /**
     * 机构查询团长订单.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function instituteOrderColonel(array $params): array
    {
        return $this->httpPost('buyin/instituteOrderColonel', $params);
    }

    /**
     * 店铺会员绑定渠道关系创建.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function shopPidMemberCreate(array $params): array
    {
        return $this->httpPost('buyin/shopPidMemberCreate', $params);
    }

    /**
     * 查询商品 SKU.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function productSkus(array $params): array
    {
        return $this->httpPost('buyin/productSkus', $params);
    }

    /**
     * 商家可参与的团长活动查询接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function shopActivityList(array $params): array
    {
        return $this->httpPost('buyin/ShopActivityList', $params);
    }

    /**
     * 延长推广待处理/已处理记录查询.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function activityProductExtendList(array $params): array
    {
        return $this->httpPost('buyin/activityProductExtendList', $params);
    }

    /**
     * 商家处理团长活动商品的推广延期申请.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function activityProductExtendApprove(array $params): array
    {
        return $this->httpPost('buyin/activityProductExtendApprove', $params);
    }

    /**
     * 团长可参与的二级团长活动查询接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function originColonelEnrollableActivityList(array $params): array
    {
        return $this->httpPost('buyin/originColonelEnrollableActivityList', $params);
    }

    /**
     * 获取团长活动详情.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function colonelActivityDetail(array $params): array
    {
        return $this->httpPost('buyin/colonelActivityDetail', $params);
    }

    /**
     * 团长获取可提报二级团长活动的商品列表.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function originColonelUnappliedProductList(array $params): array
    {
        return $this->httpPost('buyin/originColonelUnappliedProductList', $params);
    }

    /**
     * 团长报名二级团长活动.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function originColonelApplyActivities(array $params): array
    {
        return $this->httpPost('buyin/originColonelApplyActivities', $params);
    }

    /**
     * 商品选品来源转链.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function instPickSourceConvert(array $params): array
    {
        return $this->httpPost('buyin/instPickSourceConvert', $params);
    }

    /**
     * 机构选品GMV查询接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function instGmv(array $params): array
    {
        return $this->httpPost('buyin/instGmv', $params);
    }

    /**
     * 机构选品GMV明细查询接口.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function instGmvDetail(array $params): array
    {
        return $this->httpPost('buyin/instGmvDetail', $params);
    }

    /**
     * 分销直播间商品列表.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function distributionLiveProductList(array $params): array
    {
        return $this->httpPost('buyin/distributionLiveProductList', $params);
    }

    /**
     * 商品口令转商品解析.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function shareCommandParse(array $params): array
    {
        return $this->httpPost('buyin/shareCommandParse', $params);
    }

    /**
     * 检索精选联盟商品，需达人授权.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function kolMaterialsProductsSearch(array $params): array
    {
        return $this->httpPost('buyin/kolMaterialsProductsSearch', $params);
    }

    /**
     * 获取达人直播间分享链接.
     *
     * @param  array  $params
     * @return array
     * @throws InvalidArgumentException
     * @throws RequestException
     */
    public function kolLiveShare(array $params): array
    {
        return $this->httpPost('buyin/kolLiveShare', $params);
    }
}
