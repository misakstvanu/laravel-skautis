<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class UnitAuditorAllInput
{
    public function __construct(
        public readonly ?int $top = null,
        public readonly ?string $personName = null,
        public readonly ?bool $onlyValid = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Top' => $this->top,
            'PersonName' => $this->personName,
            'OnlyValid' => $this->onlyValid,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
