<?php

namespace Misakstvanu\LaravelSkautis\Tests;

use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Testing\FakeOperationExecutor;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use RuntimeException;

/**
 * The fake resolves stubs and fixture files with no container and no network,
 * so this case extends PHPUnit directly rather than the package's Testbench
 * base class.
 */
class FakeOperationExecutorTest extends PHPUnitTestCase
{
    private string $fixtureRoot;

    protected function setUp(): void
    {
        parent::setUp();
        $this->fixtureRoot = sys_get_temp_dir().'/skautis-fake-'.bin2hex(random_bytes(6));
        mkdir($this->fixtureRoot, 0777, true);
    }

    protected function tearDown(): void
    {
        $this->deleteDirectory($this->fixtureRoot);
        parent::tearDown();
    }

    public function test_a_single_object_fixture_yields_one_object(): void
    {
        $this->writeFixture('UserManagement', 'UserDetail', '{"ID": 42, "Person": "Jan Novák"}');

        $response = $this->fake()->call('UserManagement', 'UserDetail', OperationRequest::empty());

        $this->assertNotNull($response->firstObject());
        $this->assertSame('Jan Novák', $response->firstObject()->Person);
    }

    public function test_an_array_fixture_yields_every_object(): void
    {
        $this->writeFixture('UserManagement', 'UserRoleAll', '[{"ID_Unit": 60001}, {"ID_Unit": 60002}]');

        $response = $this->fake()->call('UserManagement', 'UserRoleAll', OperationRequest::empty());

        $this->assertCount(2, $response->objects());
    }

    public function test_a_stub_beats_a_fixture_file_on_disk(): void
    {
        $this->writeFixture('OrganizationUnit', 'UnitDetail', '{"DisplayName": "z disku"}');

        $fake = $this->fake()->stub('OrganizationUnit', 'UnitDetail', ['DisplayName' => 'ze stubu']);
        $response = $fake->call('OrganizationUnit', 'UnitDetail', OperationRequest::empty());

        $this->assertSame('ze stubu', $response->firstObject()->DisplayName);
    }

    public function test_a_missing_fixture_names_the_path_it_looked_for(): void
    {
        $fake = $this->fake();

        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage($fake->fixtureFor('OrganizationUnit', 'PersonAll'));

        $fake->call('OrganizationUnit', 'PersonAll', OperationRequest::empty());
    }

    public function test_a_missing_fixture_is_an_empty_response_when_not_throwing(): void
    {
        $response = $this->fake(throwOnMissing: false)
            ->call('OrganizationUnit', 'PersonAll', OperationRequest::empty());

        $this->assertNull($response->firstObject());
        $this->assertSame([], $response->objects());
    }

    public function test_it_records_the_arguments_it_was_called_with(): void
    {
        $fake = $this->fake()->stub('Events', 'EventAll', []);

        $fake->call('Events', 'EventAll', OperationRequest::from(['ID_Unit' => 60001]));
        $fake->stub('UserManagement', 'UserDetail', [])->call('UserManagement', 'UserDetail', OperationRequest::empty());

        $this->assertSame([
            ['service' => 'Events', 'operation' => 'EventAll', 'request' => ['ID_Unit' => 60001]],
            ['service' => 'UserManagement', 'operation' => 'UserDetail', 'request' => []],
        ], $fake->recorded());
    }

    private function fake(bool $throwOnMissing = true): FakeOperationExecutor
    {
        return new FakeOperationExecutor($this->fixtureRoot, $throwOnMissing);
    }

    private function writeFixture(string $service, string $operation, string $json): void
    {
        mkdir($this->fixtureRoot.'/'.$service, 0777, true);
        file_put_contents($this->fixtureRoot.'/'.$service.'/'.$operation.'.json', $json);
    }

    private function deleteDirectory(string $directory): void
    {
        if (! is_dir($directory)) {
            return;
        }

        foreach (array_diff((array) scandir($directory), ['.', '..']) as $entry) {
            $path = $directory.'/'.$entry;
            is_dir($path) ? $this->deleteDirectory($path) : unlink($path);
        }

        rmdir($directory);
    }
}
