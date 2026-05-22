<?php

namespace Misakstvanu\LaravelSkautis\Responses\Grants;

final class GrantAdvanceUsingAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $dateCreated = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?string $number = null,
        public readonly ?int $approved = null,
        public readonly ?int $notCharged = null,
        public readonly ?int $participants = null,
        public readonly ?int $participantsApproved = null,
        public readonly ?int $personDaysNotCharged = null,
        public readonly ?int $personDaysCharged = null,
        public readonly ?float $amountAverage = null,
        public readonly ?float $amountNotCharged = null,
        public readonly ?float $amountCharged = null,
        public readonly ?float $amountTotal = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            dateCreated: isset($obj->{'DateCreated'}) ? (string) $obj->{'DateCreated'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            number: isset($obj->{'Number'}) ? (string) $obj->{'Number'} : null,
            approved: isset($obj->{'Approved'}) ? (int) $obj->{'Approved'} : null,
            notCharged: isset($obj->{'NotCharged'}) ? (int) $obj->{'NotCharged'} : null,
            participants: isset($obj->{'Participants'}) ? (int) $obj->{'Participants'} : null,
            participantsApproved: isset($obj->{'ParticipantsApproved'}) ? (int) $obj->{'ParticipantsApproved'} : null,
            personDaysNotCharged: isset($obj->{'PersonDaysNotCharged'}) ? (int) $obj->{'PersonDaysNotCharged'} : null,
            personDaysCharged: isset($obj->{'PersonDaysCharged'}) ? (int) $obj->{'PersonDaysCharged'} : null,
            amountAverage: isset($obj->{'AmountAverage'}) ? (float) $obj->{'AmountAverage'} : null,
            amountNotCharged: isset($obj->{'AmountNotCharged'}) ? (float) $obj->{'AmountNotCharged'} : null,
            amountCharged: isset($obj->{'AmountCharged'}) ? (float) $obj->{'AmountCharged'} : null,
            amountTotal: isset($obj->{'AmountTotal'}) ? (float) $obj->{'AmountTotal'} : null,
        );
    }
}
