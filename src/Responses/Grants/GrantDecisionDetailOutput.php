<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantDecisionDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            amount: isset($obj->{'Amount'}) ? (float) $obj->{'Amount'} : null,
            maxAmount: isset($obj->{'MaxAmount'}) ? (float) $obj->{'MaxAmount'} : null,
            idGrantDecisionState: isset($obj->{'ID_GrantDecisionState'}) ? (string) $obj->{'ID_GrantDecisionState'} : null,
            grantDecisionState: isset($obj->{'GrantDecisionState'}) ? (string) $obj->{'GrantDecisionState'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            lastUpdate: isset($obj->{'LastUpdate'}) ? (string) $obj->{'LastUpdate'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            revision: isset($obj->{'Revision'}) ? (int) $obj->{'Revision'} : null,
            isActive: isset($obj->{'IsActive'}) ? (int) $obj->{'IsActive'} : null,
            number: isset($obj->{'Number'}) ? (string) $obj->{'Number'} : null,
            idProvider: isset($obj->{'ID_Provider'}) ? (int) $obj->{'ID_Provider'} : null,
            providerName: isset($obj->{'ProviderName'}) ? (string) $obj->{'ProviderName'} : null,
            providerAddress: isset($obj->{'ProviderAddress'}) ? (string) $obj->{'ProviderAddress'} : null,
            providerID: isset($obj->{'ProviderID'}) ? (string) $obj->{'ProviderID'} : null,
            providerRegistrationNumber: isset($obj->{'ProviderRegistrationNumber'}) ? (string) $obj->{'ProviderRegistrationNumber'} : null,
            idReceiver: isset($obj->{'ID_Receiver'}) ? (int) $obj->{'ID_Receiver'} : null,
            receiverName: isset($obj->{'ReceiverName'}) ? (string) $obj->{'ReceiverName'} : null,
            receiverAddress: isset($obj->{'ReceiverAddress'}) ? (string) $obj->{'ReceiverAddress'} : null,
            receiverID: isset($obj->{'ReceiverID'}) ? (string) $obj->{'ReceiverID'} : null,
            receiverRegistrationNumber: isset($obj->{'ReceiverRegistrationNumber'}) ? (string) $obj->{'ReceiverRegistrationNumber'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            eventName: isset($obj->{'EventName'}) ? (string) $obj->{'EventName'} : null,
            idEventType: isset($obj->{'ID_EventType'}) ? (string) $obj->{'ID_EventType'} : null,
            eventType: isset($obj->{'EventType'}) ? (string) $obj->{'EventType'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
        );
    }
}
