<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonAllEventCampInput
{
    public function __construct(
        public readonly ?int $idEventCamp = null,
        public readonly ?string $displayName = null,
        public readonly ?int $id = null,
        public readonly ?string $identificationCode = null,
        public readonly ?string $identificationCodeStartsWith = null,
        public readonly ?string $eventFunctionTypeKey = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_EventCamp' => $this->idEventCamp,
            'DisplayName' => $this->displayName,
            'ID' => $this->id,
            'IdentificationCode' => $this->identificationCode,
            'IdentificationCodeStartsWith' => $this->identificationCodeStartsWith,
            'EventFunctionTypeKey' => $this->eventFunctionTypeKey,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
