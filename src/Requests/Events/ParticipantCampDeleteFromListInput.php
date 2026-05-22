<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class ParticipantCampDeleteFromListInput
{
    public function __construct(
        public readonly ?string $person = null,
        public readonly ?string $idParticipantType = null,
        public readonly ?string $participantType = null,
        public readonly ?bool $isManual = null,
        public readonly ?string $birthday = null,
        public readonly ?int $age = null,
        public readonly ?string $assurance = null,
        public readonly ?string $street = null,
        public readonly ?string $city = null,
        public readonly ?string $postcode = null,
        public readonly ?string $state = null,
        public readonly ?string $fullAddress = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $unitRegistrationNumber = null,
        public readonly ?string $category = null,
        public readonly ?bool $canDelete = null,
        public readonly ?string $idCardNumber = null,
        public readonly ?string $idCardValidTo = null,
        public readonly ?string $accepted = null,
        public readonly ?bool $isAccepted = null,
        public readonly ?string $idCampEnrollState = null,
        public readonly ?string $campEnrollState = null,
        public readonly ?string $icon = null,
        public readonly ?string $iconClass = null,
        public readonly ?float $price = null,
        public readonly ?int $idEventCampEnroll = null,
        public readonly ?string $variableSymbol = null,
        public readonly ?bool $isPaid = null,
        public readonly ?string $membershipCategory = null,
        public readonly ?string $participationTerm = null,
        public readonly ?bool $participationTermDifferentThanEventCamp = null,
        public readonly ?string $campOnlineLogin = null,
        public readonly ?string $paymentType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'Person' => $this->person,
            'ID_ParticipantType' => $this->idParticipantType,
            'ParticipantType' => $this->participantType,
            'IsManual' => $this->isManual,
            'Birthday' => $this->birthday,
            'Age' => $this->age,
            'Assurance' => $this->assurance,
            'Street' => $this->street,
            'City' => $this->city,
            'Postcode' => $this->postcode,
            'State' => $this->state,
            'FullAddress' => $this->fullAddress,
            'ID_Unit' => $this->idUnit,
            'Unit' => $this->unit,
            'UnitRegistrationNumber' => $this->unitRegistrationNumber,
            'Category' => $this->category,
            'CanDelete' => $this->canDelete,
            'IdCardNumber' => $this->idCardNumber,
            'IdCardValidTo' => $this->idCardValidTo,
            'Accepted' => $this->accepted,
            'IsAccepted' => $this->isAccepted,
            'ID_CampEnrollState' => $this->idCampEnrollState,
            'CampEnrollState' => $this->campEnrollState,
            'Icon' => $this->icon,
            'IconClass' => $this->iconClass,
            'Price' => $this->price,
            'ID_EventCampEnroll' => $this->idEventCampEnroll,
            'VariableSymbol' => $this->variableSymbol,
            'IsPaid' => $this->isPaid,
            'MembershipCategory' => $this->membershipCategory,
            'ParticipationTerm' => $this->participationTerm,
            'ParticipationTermDifferentThanEventCamp' => $this->participationTermDifferentThanEventCamp,
            'CampOnlineLogin' => $this->campOnlineLogin,
            'PaymentType' => $this->paymentType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
