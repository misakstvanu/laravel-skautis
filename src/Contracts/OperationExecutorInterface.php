<?php

namespace Misakstvanu\LaravelSkautis\Contracts;

use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Data\OperationResponse;

/**
 * The single choke point for every SkautIS SOAP call.
 *
 * Every one of the 19 generated classes under `src/Services/` reaches the
 * network only through an implementation of this interface, so a fake can be
 * bound in the container without touching any of them.
 */
interface OperationExecutorInterface
{
    public function call(string $service, string $operation, OperationRequest $request): OperationResponse;
}
