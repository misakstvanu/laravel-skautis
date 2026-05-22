<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonAllEventCongressFunctionInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idEventCongressFunction = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_EventCongressFunction' => $this->idEventCongressFunction,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
