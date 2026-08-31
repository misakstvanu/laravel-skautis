<?php

namespace Misakstvanu\LaravelSkautis\Tests;

use Misakstvanu\LaravelSkautis\Metadata\OperationCatalog;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use ReflectionClass;
use ReflectionMethod;

/**
 * Guards `OperationCatalog::SERVICES` against the generated service classes.
 *
 * The catalogue is a hand-maintainable copy of what the 19 classes under
 * `src/Services/` expose, so the only invariant worth pinning is that the two
 * still agree. Reflection over the package's own classes is enough for that:
 * the case needs no container, no network and no file outside the package.
 */
class OperationCatalogTest extends PHPUnitTestCase
{
    private const EXPECTED_SERVICE_COUNT = 19;

    public function test_the_catalogue_describes_exactly_nineteen_services(): void
    {
        $this->assertCount(self::EXPECTED_SERVICE_COUNT, OperationCatalog::SERVICES);
    }

    public function test_every_service_key_has_a_service_class_file(): void
    {
        foreach (array_keys(OperationCatalog::SERVICES) as $service) {
            $path = __DIR__.'/../src/Services/'.$service.'Service.php';

            $this->assertFileExists($path, sprintf('Service %s has no service class.', $service));
        }
    }

    public function test_every_service_key_matches_the_class_service_name_constant(): void
    {
        foreach (array_keys(OperationCatalog::SERVICES) as $service) {
            $this->assertSame(
                $service,
                $this->serviceClass($service)->getConstant('SERVICE_NAME'),
                sprintf('Service %s does not match its SERVICE_NAME constant.', $service),
            );
        }
    }

    public function test_every_catalogued_operation_set_matches_the_service_class_methods(): void
    {
        foreach (array_keys(OperationCatalog::SERVICES) as $service) {
            $catalogued = array_keys(OperationCatalog::SERVICES[$service]['operations']);
            $implemented = $this->operationMethods($service);

            sort($catalogued);
            sort($implemented);

            $this->assertSame(
                $catalogued,
                $implemented,
                $this->mismatchMessage($service, $catalogued, $implemented),
            );
        }
    }

    /**
     * Public method names of a service class, minus the constructor.
     *
     * @return list<string>
     */
    private function operationMethods(string $service): array
    {
        $names = array_map(
            static fn (ReflectionMethod $method): string => $method->getName(),
            $this->serviceClass($service)->getMethods(ReflectionMethod::IS_PUBLIC),
        );

        return array_values(array_filter($names, static fn (string $name): bool => $name !== '__construct'));
    }

    private function serviceClass(string $service): ReflectionClass
    {
        $class = 'Misakstvanu\\LaravelSkautis\\Services\\'.$service.'Service';

        $this->assertTrue(class_exists($class), sprintf('Service class %s does not exist.', $class));

        return new ReflectionClass($class);
    }

    /**
     * @param  list<string>  $catalogued
     * @param  list<string>  $implemented
     */
    private function mismatchMessage(string $service, array $catalogued, array $implemented): string
    {
        return sprintf(
            'Service %s operations mismatch. Only in the catalogue: [%s]. Only on %sService: [%s].',
            $service,
            implode(', ', array_diff($catalogued, $implemented)) ?: '-',
            $service,
            implode(', ', array_diff($implemented, $catalogued)) ?: '-',
        );
    }
}
