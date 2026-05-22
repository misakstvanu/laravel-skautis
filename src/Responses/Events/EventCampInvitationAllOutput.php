<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCampInvitationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEventCamp = null,
        public readonly ?string $text = null,
        public readonly ?int $idPersonSender = null,
        public readonly ?string $personSender = null,
        public readonly ?string $paymentTerm = null,
        public readonly ?float $price = null,
        public readonly ?int $specificSymbol = null,
        public readonly ?string $paymentNote = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEventCamp: isset($obj->{'ID_EventCamp'}) ? (int) $obj->{'ID_EventCamp'} : null,
            text: isset($obj->{'Text'}) ? (string) $obj->{'Text'} : null,
            idPersonSender: isset($obj->{'ID_PersonSender'}) ? (int) $obj->{'ID_PersonSender'} : null,
            personSender: isset($obj->{'PersonSender'}) ? (string) $obj->{'PersonSender'} : null,
            paymentTerm: isset($obj->{'PaymentTerm'}) ? (string) $obj->{'PaymentTerm'} : null,
            price: isset($obj->{'Price'}) ? (float) $obj->{'Price'} : null,
            specificSymbol: isset($obj->{'SpecificSymbol'}) ? (int) $obj->{'SpecificSymbol'} : null,
            paymentNote: isset($obj->{'PaymentNote'}) ? (string) $obj->{'PaymentNote'} : null,
        );
    }
}
