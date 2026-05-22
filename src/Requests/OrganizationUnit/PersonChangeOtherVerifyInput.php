<?php

namespace Misakstvanu\LaravelSkautis\Requests\OrganizationUnit;

final class PersonChangeOtherVerifyInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $accessKey = null,
        public readonly ?string $lastName = null,
        public readonly ?string $birthDate = null,
        public readonly ?bool $isForeign = null,
        public readonly ?string $identificationCodeEnd = null,
        public readonly ?string $birthCity = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'AccessKey' => $this->accessKey,
            'LastName' => $this->lastName,
            'BirthDate' => $this->birthDate,
            'IsForeign' => $this->isForeign,
            'IdentificationCodeEnd' => $this->identificationCodeEnd,
            'BirthCity' => $this->birthCity,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
