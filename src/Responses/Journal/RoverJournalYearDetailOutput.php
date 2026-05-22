<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class RoverJournalYearDetailOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $dateMail = null,
        public readonly ?bool $mailSent = null,
        public readonly ?string $dateLock = null,
        public readonly ?bool $isActual = null,
        public readonly ?int $idRoverJournalYearPrevious = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            dateMail: isset($obj->{'DateMail'}) ? (string) $obj->{'DateMail'} : null,
            mailSent: isset($obj->{'MailSent'}) ? (bool) $obj->{'MailSent'} : null,
            dateLock: isset($obj->{'DateLock'}) ? (string) $obj->{'DateLock'} : null,
            isActual: isset($obj->{'IsActual'}) ? (bool) $obj->{'IsActual'} : null,
            idRoverJournalYearPrevious: isset($obj->{'ID_RoverJournalYearPrevious'}) ? (int) $obj->{'ID_RoverJournalYearPrevious'} : null,
        );
    }
}
