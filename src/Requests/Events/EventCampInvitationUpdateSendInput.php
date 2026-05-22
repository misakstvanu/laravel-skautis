<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventCampInvitationUpdateSendInput
{
    public function __construct(
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

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_EventCamp' => $this->idEventCamp,
            'Text' => $this->text,
            'ID_PersonSender' => $this->idPersonSender,
            'PersonSender' => $this->personSender,
            'PaymentTerm' => $this->paymentTerm,
            'LoginDeadline' => $this->loginDeadline,
            'LoginDeadlineText' => $this->loginDeadlineText,
            'Price' => $this->price,
            'VariableSymbol' => $this->variableSymbol,
            'SpecificSymbol' => $this->specificSymbol,
            'Account' => $this->account,
            'PaymentNote' => $this->paymentNote,
            'Persons' => $this->persons,
            'ID_CampOnlineLogin' => $this->idCampOnlineLogin,
            'OnlineLoginDisplayName' => $this->onlineLoginDisplayName,
            'ParticipationFrom' => $this->participationFrom,
            'ParticipationTo' => $this->participationTo,
            'ID_PaymentType' => $this->idPaymentType,
            'PaymentType' => $this->paymentType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
