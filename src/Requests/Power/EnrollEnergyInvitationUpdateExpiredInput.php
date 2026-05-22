<?php

namespace Misakstvanu\LaravelSkautis\Requests\Power;

final class EnrollEnergyInvitationUpdateExpiredInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $validTo = null,
        public readonly ?string $accessKey = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $email = null,
        public readonly ?string $personalText = null,
        public readonly ?string $lastOpened = null,
        public readonly ?bool $isValid = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ValidTo' => $this->validTo,
            'AccessKey' => $this->accessKey,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'Email' => $this->email,
            'PersonalText' => $this->personalText,
            'LastOpened' => $this->lastOpened,
            'IsValid' => $this->isValid,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'RegistrationNumber' => $this->registrationNumber,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
