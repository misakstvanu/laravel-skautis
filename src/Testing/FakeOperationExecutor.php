<?php

namespace Misakstvanu\LaravelSkautis\Testing;

use JsonException;
use Misakstvanu\LaravelSkautis\Contracts\OperationExecutorInterface;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Data\OperationResponse;
use Misakstvanu\LaravelSkautis\OperationExecutor;
use RuntimeException;
use stdClass;

/**
 * A fixture-backed stand-in for the real SOAP executor.
 *
 * Every operation is answered from an in-memory stub or from the JSON file
 * `{$fixturePath}/{$service}/{$operation}.json`, and every call is recorded, so
 * a test can run with no network and still assert on the calls that were made.
 */
class FakeOperationExecutor extends OperationExecutor implements OperationExecutorInterface
{
    /**
     * In-memory overrides, keyed by `"{$service}/{$operation}"`.
     *
     * @var array<string, mixed>
     */
    private array $stubs = [];

    /**
     * Every call in the order it was made.
     *
     * @var list<array{service: string, operation: string, request: array<string, mixed>}>
     */
    private array $recorded = [];

    /**
     * The parent constructor is deliberately not called.
     *
     * `OperationExecutor`'s promoted `private readonly Skautis $skautis` is read
     * only by the parent's `call()`, which this class overrides in full, so the
     * property is left uninitialised rather than forcing every test to build a
     * `Skautis` instance it can never reach.
     */
    public function __construct(private readonly string $fixturePath, private readonly bool $throwOnMissing = true) {}

    /**
     * Resolves a stub first, then a fixture file on disk.
     *
     * @throws RuntimeException when neither exists and `$throwOnMissing` is true
     * @throws JsonException when a fixture file is not valid JSON
     */
    public function call(string $service, string $operation, OperationRequest $request): OperationResponse
    {
        $this->recorded[] = [
            'service' => $service,
            'operation' => $operation,
            'request' => $request->toArray(),
        ];

        $key = $this->keyFor($service, $operation);

        if (array_key_exists($key, $this->stubs)) {
            return OperationResponse::from($this->stubs[$key]);
        }

        $fixture = $this->fixtureFor($service, $operation);

        if (is_file($fixture)) {
            $json = (string) file_get_contents($fixture);

            return OperationResponse::from(json_decode($json, false, 512, JSON_THROW_ON_ERROR));
        }

        if ($this->throwOnMissing) {
            throw new RuntimeException(sprintf('SkautIS fake: missing fixture %s', $fixture));
        }

        return OperationResponse::from([]);
    }

    /**
     * Registers an in-memory override that wins over any fixture file.
     *
     * The payload goes through the same JSON round-trip a fixture file would, so
     * an associative array arrives as a `stdClass` and a list of them as
     * `stdClass[]` — a stub and a fixture are interchangeable.
     *
     * @param array<mixed>|stdClass $payload
     *
     * @throws JsonException when the payload cannot be encoded
     */
    public function stub(string $service, string $operation, array|stdClass $payload): static
    {
        $encoded = json_encode($payload, JSON_THROW_ON_ERROR);
        $this->stubs[$this->keyFor($service, $operation)] = json_decode($encoded, false, 512, JSON_THROW_ON_ERROR);

        return $this;
    }

    /**
     * @return list<array{service: string, operation: string, request: array<string, mixed>}>
     */
    public function recorded(): array
    {
        return $this->recorded;
    }

    /**
     * The absolute path a fixture for this operation would live at.
     *
     * The path is reported verbatim in the missing-fixture exception, so a
     * developer is told which file to add.
     */
    public function fixtureFor(string $service, string $operation): string
    {
        $root = realpath($this->fixturePath) ?: $this->fixturePath;

        return $root.DIRECTORY_SEPARATOR.$service.DIRECTORY_SEPARATOR.$operation.'.json';
    }

    private function keyFor(string $service, string $operation): string
    {
        return $service.'/'.$operation;
    }
}
