<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantDecisionAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idGrant = null,
        public readonly ?string $idGrantDecisionState = null,
        public readonly ?string $grantDecisionState = null,
        public readonly ?string $validFrom = null,
        public readonly ?string $validTo = null,
        public readonly ?string $number = null,
        public readonly ?string $name = null,
        public readonly ?string $idGrantType = null,
        public readonly ?string $grantType = null,
        public readonly ?int $idReceiver = null,
        public readonly ?string $receiverName = null,
        public readonly ?string $receiverRegistrationNumber = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $date = null,
        public readonly ?int $idAgreementPerson = null,
        public readonly ?string $agreementPerson = null,
        public readonly ?string $agreementDate = null,
        public readonly ?int $idGrantPerson = null,
        public readonly ?string $grantPerson = null,
        public readonly ?string $grantDate = null,
        public readonly ?bool $isActual = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idGrant: isset($obj->{'ID_Grant'}) ? (int) $obj->{'ID_Grant'} : null,
            idGrantDecisionState: isset($obj->{'ID_GrantDecisionState'}) ? (string) $obj->{'ID_GrantDecisionState'} : null,
            grantDecisionState: isset($obj->{'GrantDecisionState'}) ? (string) $obj->{'GrantDecisionState'} : null,
            validFrom: isset($obj->{'ValidFrom'}) ? (string) $obj->{'ValidFrom'} : null,
            validTo: isset($obj->{'ValidTo'}) ? (string) $obj->{'ValidTo'} : null,
            number: isset($obj->{'Number'}) ? (string) $obj->{'Number'} : null,
            name: isset($obj->{'Name'}) ? (string) $obj->{'Name'} : null,
            idGrantType: isset($obj->{'ID_GrantType'}) ? (string) $obj->{'ID_GrantType'} : null,
            grantType: isset($obj->{'GrantType'}) ? (string) $obj->{'GrantType'} : null,
            idReceiver: isset($obj->{'ID_Receiver'}) ? (int) $obj->{'ID_Receiver'} : null,
            receiverName: isset($obj->{'ReceiverName'}) ? (string) $obj->{'ReceiverName'} : null,
            receiverRegistrationNumber: isset($obj->{'ReceiverRegistrationNumber'}) ? (string) $obj->{'ReceiverRegistrationNumber'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            idAgreementPerson: isset($obj->{'ID_AgreementPerson'}) ? (int) $obj->{'ID_AgreementPerson'} : null,
            agreementPerson: isset($obj->{'AgreementPerson'}) ? (string) $obj->{'AgreementPerson'} : null,
            agreementDate: isset($obj->{'AgreementDate'}) ? (string) $obj->{'AgreementDate'} : null,
            idGrantPerson: isset($obj->{'ID_GrantPerson'}) ? (int) $obj->{'ID_GrantPerson'} : null,
            grantPerson: isset($obj->{'GrantPerson'}) ? (string) $obj->{'GrantPerson'} : null,
            grantDate: isset($obj->{'GrantDate'}) ? (string) $obj->{'GrantDate'} : null,
            isActual: isset($obj->{'IsActual'}) ? (bool) $obj->{'IsActual'} : null,
        );
    }
}
