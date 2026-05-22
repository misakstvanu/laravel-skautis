<?php

namespace Misakstvanu\LaravelSkautis\Requests\Grants;

final class GrantDecisionInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idGrant = null,
        public readonly ?float $amount = null,
        public readonly ?float $maxAmount = null,
        public readonly ?string $idGrantDecisionState = null,
        public readonly ?string $grantDecisionState = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $lastUpdate = null,
        public readonly ?string $note = null,
        public readonly ?int $revision = null,
        public readonly ?int $isActive = null,
        public readonly ?string $number = null,
        public readonly ?int $idProvider = null,
        public readonly ?string $providerName = null,
        public readonly ?string $providerAddress = null,
        public readonly ?string $providerID = null,
        public readonly ?string $providerRegistrationNumber = null,
        public readonly ?int $idReceiver = null,
        public readonly ?string $receiverName = null,
        public readonly ?string $receiverAddress = null,
        public readonly ?string $receiverID = null,
        public readonly ?string $receiverRegistrationNumber = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $eventName = null,
        public readonly ?string $idEventType = null,
        public readonly ?string $eventType = null,
        public readonly ?int $year = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'ID_Grant' => $this->idGrant,
            'Amount' => $this->amount,
            'MaxAmount' => $this->maxAmount,
            'ID_GrantDecisionState' => $this->idGrantDecisionState,
            'GrantDecisionState' => $this->grantDecisionState,
            'ValidFrom' => $this->validFrom,
            'ValidTo' => $this->validTo,
            'LastUpdate' => $this->lastUpdate,
            'Note' => $this->note,
            'Revision' => $this->revision,
            'IsActive' => $this->isActive,
            'Number' => $this->number,
            'ID_Provider' => $this->idProvider,
            'ProviderName' => $this->providerName,
            'ProviderAddress' => $this->providerAddress,
            'ProviderID' => $this->providerID,
            'ProviderRegistrationNumber' => $this->providerRegistrationNumber,
            'ID_Receiver' => $this->idReceiver,
            'ReceiverName' => $this->receiverName,
            'ReceiverAddress' => $this->receiverAddress,
            'ReceiverID' => $this->receiverID,
            'ReceiverRegistrationNumber' => $this->receiverRegistrationNumber,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID_Event' => $this->idEvent,
            'EventName' => $this->eventName,
            'ID_EventType' => $this->idEventType,
            'EventType' => $this->eventType,
            'Year' => $this->year,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
