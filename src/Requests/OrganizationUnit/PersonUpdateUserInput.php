<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonUpdateUserInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $userName = null,
        public readonly ?string $securityCode = null,
        public readonly ?bool $overwrite = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'UserName' => $this->userName,
            'SecurityCode' => $this->securityCode,
            'Overwrite' => $this->overwrite,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
