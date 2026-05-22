<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class DelegateAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idParticipant = null,
        public readonly ?int $idCandidate = null,
        public readonly ?string $idDelegateState = null,
        public readonly ?string $delegateState = null,
        public readonly ?string $cancelDescription = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $birthday = null,
        public readonly ?string $functionType = null,
        public readonly ?int $idEventCongress = null,
        public readonly ?string $eventCongress = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?bool $hasPreference = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
        public readonly ?string $idDelegateType = null,
        public readonly ?string $delegateType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idParticipant: isset($obj->{'ID_Participant'}) ? (int) $obj->{'ID_Participant'} : null,
            idCandidate: isset($obj->{'ID_Candidate'}) ? (int) $obj->{'ID_Candidate'} : null,
            idDelegateState: isset($obj->{'ID_DelegateState'}) ? (string) $obj->{'ID_DelegateState'} : null,
            delegateState: isset($obj->{'DelegateState'}) ? (string) $obj->{'DelegateState'} : null,
            cancelDescription: isset($obj->{'CancelDescription'}) ? (string) $obj->{'CancelDescription'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            birthday: isset($obj->{'Birthday'}) ? (string) $obj->{'Birthday'} : null,
            functionType: isset($obj->{'FunctionType'}) ? (string) $obj->{'FunctionType'} : null,
            idEventCongress: isset($obj->{'ID_EventCongress'}) ? (int) $obj->{'ID_EventCongress'} : null,
            eventCongress: isset($obj->{'EventCongress'}) ? (string) $obj->{'EventCongress'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            hasPreference: isset($obj->{'HasPreference'}) ? (bool) $obj->{'HasPreference'} : null,
            email: isset($obj->{'Email'}) ? (string) $obj->{'Email'} : null,
            phone: isset($obj->{'Phone'}) ? (string) $obj->{'Phone'} : null,
            idDelegateType: isset($obj->{'ID_DelegateType'}) ? (string) $obj->{'ID_DelegateType'} : null,
            delegateType: isset($obj->{'DelegateType'}) ? (string) $obj->{'DelegateType'} : null,
        );
    }
}
