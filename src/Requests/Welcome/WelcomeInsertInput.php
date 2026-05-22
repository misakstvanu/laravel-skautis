<?php

namespace Misakstvanu\LaravelSkautis\Requests\Welcome;

final class WelcomeInsertInput
{
    public function __construct(
        public readonly ?string $functions = null,
        public readonly ?string $displayName = null,
        public readonly ?bool $isEnabled = null,
        public readonly ?bool $isParentUnit = null,
        public readonly ?bool $isFinal = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Functions' => $this->functions,
            'DisplayName' => $this->displayName,
            'IsEnabled' => $this->isEnabled,
            'IsParentUnit' => $this->isParentUnit,
            'IsFinal' => $this->isFinal,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
