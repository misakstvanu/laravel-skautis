<?php
namespace Misakstvanu\LaravelSkautis\Tests;
use Misakstvanu\LaravelSkautis\Metadata\OperationCatalog;
class OperationCatalogTest extends TestCase
{
    public function test_every_service_operation_is_in_catalog(): void
    {
        $manifestPath = dirname(__DIR__, 3).'/skautis-docs/operations-manifest.json';
        $manifest = json_decode((string) file_get_contents($manifestPath), true, 512, JSON_THROW_ON_ERROR);
        $this->assertSame(array_keys($manifest), array_keys(OperationCatalog::SERVICES));
        foreach ($manifest as $service => $operations) {
            $this->assertSame(
                $operations,
                array_keys(OperationCatalog::SERVICES[$service]['operations']),
                sprintf('Service %s operations mismatch.', $service),
            );
        }
    }
}
