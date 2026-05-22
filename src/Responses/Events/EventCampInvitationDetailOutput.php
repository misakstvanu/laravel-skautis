<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCampInvitationDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?int $id = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?string $text = null,
        public readonly ?int $idPersonSender = null,
        public readonly ?string $personSender = null,
        public readonly ?string $paymentTerm = null,
        public readonly ?string $loginDeadline = null,
        public readonly ?string $loginDeadlineText = null,
        public readonly ?float $price = null,
        public readonly ?string $variableSymbol = null,
        public readonly ?string $specificSymbol = null,
        public readonly ?string $account = null,
        public readonly ?string $paymentNote = null,
        public readonly mixed $persons = null,
        public readonly ?int $idCampOnlineLogin = null,
        public readonly ?string $onlineLoginDisplayName = null,
        public readonly ?string $participationFrom = null,
        public readonly ?string $participationTo = null,
        public readonly ?string $idPaymentType = null,
        public readonly ?string $paymentType = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventCamp: isset($obj->{'ID_EventCamp'}) ? (int) $obj->{'ID_EventCamp'} : null,
            text: isset($obj->{'Text'}) ? (string) $obj->{'Text'} : null,
            idPersonSender: isset($obj->{'ID_PersonSender'}) ? (int) $obj->{'ID_PersonSender'} : null,
            personSender: isset($obj->{'PersonSender'}) ? (string) $obj->{'PersonSender'} : null,
            paymentTerm: isset($obj->{'PaymentTerm'}) ? (string) $obj->{'PaymentTerm'} : null,
            loginDeadline: isset($obj->{'LoginDeadline'}) ? (string) $obj->{'LoginDeadline'} : null,
            loginDeadlineText: isset($obj->{'LoginDeadlineText'}) ? (string) $obj->{'LoginDeadlineText'} : null,
            price: isset($obj->{'Price'}) ? (float) $obj->{'Price'} : null,
            variableSymbol: isset($obj->{'VariableSymbol'}) ? (string) $obj->{'VariableSymbol'} : null,
            specificSymbol: isset($obj->{'SpecificSymbol'}) ? (string) $obj->{'SpecificSymbol'} : null,
            account: isset($obj->{'Account'}) ? (string) $obj->{'Account'} : null,
            paymentNote: isset($obj->{'PaymentNote'}) ? (string) $obj->{'PaymentNote'} : null,
            persons: $obj->{'Persons'} ?? null,
            idCampOnlineLogin: isset($obj->{'ID_CampOnlineLogin'}) ? (int) $obj->{'ID_CampOnlineLogin'} : null,
            onlineLoginDisplayName: isset($obj->{'OnlineLoginDisplayName'}) ? (string) $obj->{'OnlineLoginDisplayName'} : null,
            participationFrom: isset($obj->{'ParticipationFrom'}) ? (string) $obj->{'ParticipationFrom'} : null,
            participationTo: isset($obj->{'ParticipationTo'}) ? (string) $obj->{'ParticipationTo'} : null,
            idPaymentType: isset($obj->{'ID_PaymentType'}) ? (string) $obj->{'ID_PaymentType'} : null,
            paymentType: isset($obj->{'PaymentType'}) ? (string) $obj->{'PaymentType'} : null,
        );
    }
}
