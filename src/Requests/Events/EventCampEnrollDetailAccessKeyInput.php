<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampEnrollDetailAccessKeyInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?string $accessKey = null,
        public readonly ?int $id = null,
        public readonly ?string $lastName = null,
        public readonly ?string $birthday = null,
        public readonly ?string $identificationCodeEnd = null,
        public readonly ?bool $identificationCodeForce = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'AccessKey' => $this->accessKey,
            'ID' => $this->id,
            'LastName' => $this->lastName,
            'Birthday' => $this->birthday,
            'IdentificationCodeEnd' => $this->identificationCodeEnd,
            'IdentificationCodeForce' => $this->identificationCodeForce,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
