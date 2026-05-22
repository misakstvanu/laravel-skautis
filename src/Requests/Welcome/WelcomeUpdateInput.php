<?php

namespace Misakstvanu\LaravelSkautis\Requests\Welcome;

final class WelcomeUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $functions = null,
        public readonly ?bool $isEnabled = null,
        public readonly ?bool $isParentUnit = null,
        public readonly ?bool $isSupervisorSent = null,
        public readonly ?bool $sendToAll = null,
        public readonly ?bool $isFinal = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'Functions' => $this->functions,
            'IsEnabled' => $this->isEnabled,
            'IsParentUnit' => $this->isParentUnit,
            'IsSupervisorSent' => $this->isSupervisorSent,
            'SendToAll' => $this->sendToAll,
            'IsFinal' => $this->isFinal,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
