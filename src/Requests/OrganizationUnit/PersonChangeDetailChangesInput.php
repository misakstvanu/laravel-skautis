<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonChangeDetailChangesInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $accessKey = null,
        public readonly ?int $id = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'AccessKey' => $this->accessKey,
            'ID' => $this->id,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
