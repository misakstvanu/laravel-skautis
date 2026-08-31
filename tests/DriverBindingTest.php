<?php
namespace Misakstvanu\LaravelSkautis\Tests;
use InvalidArgumentException;
use Misakstvanu\LaravelSkautis\Contracts\OperationExecutorInterface;
use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Testing\FakeOperationExecutor;
use Skautis\Skautis;
class DriverBindingTest extends TestCase
{
    public function test_the_fake_driver_resolves_the_fixture_backed_executor(): void
    {
        config(['skautis.driver' => 'fake']);
        $this->app->forgetInstance(OperationExecutor::class);
        $executor = $this->app->make(OperationExecutor::class);
        $this->assertInstanceOf(FakeOperationExecutor::class, $executor);
        $this->assertInstanceOf(OperationExecutorInterface::class, $executor);
    }
    public function test_the_soap_driver_resolves_the_real_executor(): void
    {
        config(['skautis.driver' => 'soap']);
        $this->app->forgetInstance(OperationExecutor::class);
        $executor = $this->app->make(OperationExecutor::class);
        $this->assertInstanceOf(OperationExecutor::class, $executor);
        $this->assertNotInstanceOf(FakeOperationExecutor::class, $executor);
    }
    public function test_the_default_driver_is_soap(): void
    {
        $this->assertSame('soap', config('skautis.driver'));
        $this->assertNull(config('skautis.fixture_path'));
    }
    public function test_the_fake_driver_never_resolves_the_skautis_client(): void
    {
        config(['skautis.driver' => 'fake']);
        $this->app->forgetInstance(OperationExecutor::class);
        $this->app->forgetInstance(Skautis::class);
        $this->app->make(OperationExecutor::class);
        $this->assertFalse($this->app->resolved(Skautis::class));
    }
    public function test_the_fake_driver_falls_back_to_the_packages_own_fixture_directory(): void
    {
        config(['skautis.driver' => 'fake', 'skautis.fixture_path' => null]);
        $this->app->forgetInstance(OperationExecutor::class);
        $executor = $this->app->make(OperationExecutor::class);
        $this->assertStringEndsWith(
            implode(DIRECTORY_SEPARATOR, ['tests', 'fixtures', 'Events', 'EventAll.json']),
            $executor->fixtureFor('Events', 'EventAll')
        );
    }
    public function test_a_configured_fixture_path_wins(): void
    {
        $root = sys_get_temp_dir().DIRECTORY_SEPARATOR.'skautis-driver-'.uniqid();
        mkdir($root, 0o777, true);
        config(['skautis.driver' => 'fake', 'skautis.fixture_path' => $root]);
        $this->app->forgetInstance(OperationExecutor::class);
        $executor = $this->app->make(OperationExecutor::class);
        $this->assertSame(
            realpath($root).DIRECTORY_SEPARATOR.'Events'.DIRECTORY_SEPARATOR.'EventAll.json',
            $executor->fixtureFor('Events', 'EventAll')
        );
        rmdir($root);
    }
    public function test_an_unknown_driver_is_rejected_by_name(): void
    {
        config(['skautis.driver' => 'mongodb']);
        $this->app->forgetInstance(OperationExecutor::class);
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Unsupported SkautIS driver [mongodb]. Accepted values: soap|fake.');
        $this->app->make(OperationExecutor::class);
    }
}
