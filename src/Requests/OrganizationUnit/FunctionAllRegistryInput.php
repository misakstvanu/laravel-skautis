<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class FunctionAllRegistryInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idUnit = null,
        public readonly ?bool $returnStatutory = null,
        public readonly ?bool $returnAssistant = null,
        public readonly ?bool $returnContact = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_Unit' => $this->idUnit,
            'ReturnStatutory' => $this->returnStatutory,
            'ReturnAssistant' => $this->returnAssistant,
            'ReturnContact' => $this->returnContact,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
