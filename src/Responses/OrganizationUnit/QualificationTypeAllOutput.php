<?php

namespace Misakstvanu\LaravelSkautis\Responses\OrganizationUnit;

final class QualificationTypeAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $note = null,
        public readonly ?int $validityLength = null,
        public readonly ?int $renewalLength = null,
        public readonly ?bool $isExam = null,
        public readonly ?bool $isRequest = null,
        public readonly ?bool $isLetterRequest = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            validityLength: isset($obj->{'ValidityLength'}) ? (int) $obj->{'ValidityLength'} : null,
            renewalLength: isset($obj->{'RenewalLength'}) ? (int) $obj->{'RenewalLength'} : null,
            isExam: isset($obj->{'IsExam'}) ? (bool) $obj->{'IsExam'} : null,
            isRequest: isset($obj->{'IsRequest'}) ? (bool) $obj->{'IsRequest'} : null,
            isLetterRequest: isset($obj->{'IsLetterRequest'}) ? (bool) $obj->{'IsLetterRequest'} : null,
        );
    }
}
