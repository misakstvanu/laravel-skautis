<?php
namespace Misakstvanu\LaravelSkautis\Tests;
use Misakstvanu\LaravelSkautis\LaravelSkautisServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [LaravelSkautisServiceProvider::class];
    }
}
