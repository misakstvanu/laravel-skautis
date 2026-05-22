<?php

namespace Misakstvanu\LaravelSkautis\Requests\Welcome;

final class WelcomeAllInput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?int $idFunctionType = null,
        public readonly ?bool $sendToAll = null,
        public readonly ?string $idUnitType = null,
        public readonly ?bool $isEnabled = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'DisplayName' => $this->displayName,
            'ID_FunctionType' => $this->idFunctionType,
            'SendToAll' => $this->sendToAll,
            'ID_UnitType' => $this->idUnitType,
            'IsEnabled' => $this->isEnabled,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
