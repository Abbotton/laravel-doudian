<?php

namespace Abbotton\DouDian;

use Abbotton\DouDian\Api\AfterSale;
use Abbotton\DouDian\Api\Alliance;
use Abbotton\DouDian\Api\AntiSpam;
use Abbotton\DouDian\Api\Bats;
use Abbotton\DouDian\Api\Brand;
use Abbotton\DouDian\Api\BuyIn;
use Abbotton\DouDian\Api\Coupons;
use Abbotton\DouDian\Api\CrossBorder;
use Abbotton\DouDian\Api\DutyFree;
use Abbotton\DouDian\Api\Iop;
use Abbotton\DouDian\Api\Logistics;
use Abbotton\DouDian\Api\Material;
use Abbotton\DouDian\Api\Member;
use Abbotton\DouDian\Api\Order;
use Abbotton\DouDian\Api\OrderCode;
use Abbotton\DouDian\Api\Product;
use Abbotton\DouDian\Api\Recycle;
use Abbotton\DouDian\Api\Shop;
use Abbotton\DouDian\Api\Sms;
use Abbotton\DouDian\Api\Spu;
use Abbotton\DouDian\Api\Storage;
use Abbotton\DouDian\Api\Token;
use Abbotton\DouDian\Api\WareHouse;
use Abbotton\DouDian\Api\Yunc;
use Exception;
use Illuminate\Support\Str;

/**
 * Class DouDian.
 *
 * @property AfterSale   $afterSale
 * @property Alliance    $alliance
 * @property AntiSpam    $antiSpam
 * @property Bats        $bats
 * @property Brand       $brand
 * @property BuyIn       $buyIn
 * @property Coupons     $coupons
 * @property CrossBorder $crossBorder
 * @property DutyFree    $dutyFree
 * @property Logistics   $logistics
 * @property Iop         $iop
 * @property Material    $material
 * @property Member      $member
 * @property Order       $order
 * @property OrderCode   $orderCode
 * @property Product     $product
 * @property Recycle     $recycle
 * @property Shop        $shop
 * @property Sms         $sms
 * @property Storage     $storage
 * @property Spu         $spu
 * @property Token       $token
 * @property WareHouse   $wareHouse
 * @property Yunc        $yunc
 */
class DouDian
{
    private $config;
    private $shop_id = null;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function __get($class)
    {
        $class = '\\Abbotton\\DouDian\\Api\\'.Str::ucfirst($class);
        if (! class_exists($class)) {
            throw new Exception($class.', Not found', 404);
        }

        return new $class($this->config, $this->shop_id);
    }

    /**
     * 设定店铺ID.
     *
     * @param int $shopId
     *
     * @return $this
     */
    public function setShopId(int $shopId): self
    {
        $this->shop_id = $shopId;

        return $this;
    }

    /**
     * 获取店铺ID.
     *
     * @return mixed|null
     */
    public function getShopId()
    {
        return $this->shop_id;
    }
}
