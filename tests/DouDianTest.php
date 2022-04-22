<?php

namespace Abbotton\DouDian\Tests;

use Abbotton\DouDian\DouDian;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use ReflectionClass;

class DouDianTest extends TestCase
{
    public function test_can_throw_invalid_argument_exception()
    {
        $this->expectExceptionMessage('配置有误, 请填写app_key');
        (new DouDian())->shop->brandList();

        $this->expectExceptionMessage('配置有误, 请填写app_secret');
        (new DouDian(['app_key' => 'foo']))->shop->brandList();
    }

    public function test_can_throw_class_not_found_exception()
    {
        $this->expectExceptionMessage($this->getClass('foo').', Not found');
        $this->expectExceptionCode(404);
        $config = $this->getConfig();

        (new DouDian($config))->foo->bar();
    }

    private function getClass($class): string
    {
        return 'Abbotton\\DouDian\\Api\\'.ucfirst($class);
    }

    private function getConfig(): array
    {
        return ['app_key' => 'foo', 'app_secret' => 'bar'];
    }

    public function test_can_get_exists_instance()
    {
        $shop = (new DouDian($this->getConfig()))->shop;

        $this->assertInstanceOf($this->getClass('shop'), $shop);
    }

    public function test_all_requests_will_return_the_correct_response()
    {
        $mock = new MockHandler();
        $handlerStack = new HandlerStack($mock);
        $client = new Client(['handler' => $handlerStack]);

        $app = new DouDian($this->getConfig());

        $responseJson = '{"data":[],"err_no":0,"message":"success"}';
        $responseData = json_decode($responseJson, true);
        $classArray = ['afterSale', 'alliance', 'antiSpam', 'bats', 'brand', 'buyIn', 'coupons', 'crossBorder', 'dutyFree', 'freightTemplate', 'iop', 'logistics', 'material', 'member', 'openCloud', 'order', 'orderCode', 'product', 'recycle', 'security', 'shop', 'sms', 'storage', 'supplyChain', 'spu', 'token', 'topup', 'wareHouse', 'yunc'];

        foreach ($classArray as &$class) {
            $reflectionClass = new ReflectionClass($app->$class);
            $methods = $reflectionClass->getMethods();
            foreach ($methods as &$method) {
                if ($method->class == $this->getClass($class)) {
                    $response = new Response(200, [], $responseJson);
                    $mock->append($response);
                    $methodName = $method->getName();
                    $result = count($method->getParameters()) > 0
                        ? $app->$class->setHttpClient($client)->$methodName(['foo' => 'bar'])
                        : $app->$class->setHttpClient($client)->$methodName();
                    $this->assertSame($responseData, $result);
                }
            }
        }
    }

    public function test_can_set_shop_id()
    {
        $app = new DouDian($this->getConfig());

        $this->assertNull($app->getShopId());

        $app->setShopId(1);

        $this->assertEquals(1, $app->getShopId());
    }
}
