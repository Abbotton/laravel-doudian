<?php

namespace Abbotton\DouDian\Tests;

use Abbotton\DouDian\DouDianServiceProvider;
use Illuminate\Support\Facades\Cache;
use Mockery;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    const OAUTH_CACHE_KEY = 'doudian_oauth_token';

    public function setUp(): void
    {
        $this->setUpTheTestEnvironment();

        Cache::shouldReceive('get')
            ->with(self::OAUTH_CACHE_KEY, Mockery::any())
            ->andReturn([
                'access_token'             => 'foo',
                'access_token_expired_at'  => time() + 86400,
                'refresh_token_expired_at' => strtotime('+14 day'),
                'refresh_token'            => 'bar',
                'expires_in'               => time() + 86400,
                'shop_id'                  => 123,
                'shop_name'                => 'test shop',
            ])
            ->getMock()
            ->shouldIgnoreMissing();
    }

    protected function getPackageProviders($app)
    {
        return [DouDianServiceProvider::class];
    }
}
