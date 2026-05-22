<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class ParticipantEducationExamAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?bool $isActive = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?int $idParticipantEducation = null,
        public readonly ?string $dateExam = null,
        public readonly ?string $dateLetter = null,
        public readonly ?int $idEventEducationExam = null,
        public readonly ?bool $haveLetterNumber = null,
        public readonly ?bool $canAskForLetter = null,
        public readonly ?bool $canDoExam = null,
        public readonly ?bool $canGenerateLetter = null,
        public readonly ?bool $canGenerateRequestState = null,
        public readonly ?string $unfilledObligatoryRequirements = null,
        public readonly ?bool $isAccredited = null,
        public readonly ?bool $isDecree = null,
        public readonly ?bool $isLetterRequest = null,
        public readonly ?bool $isExam = null,
        public readonly ?string $idEventEducationLetterRequestState = null,
        public readonly ?string $idEventEducationGroup = null,
        public readonly ?string $eventEducationLetterRequestState = null,
        public readonly ?string $letterNumber = null,
        public readonly ?string $dateGenerated = null,
        public readonly ?bool $isAccepted = null,
        public readonly ?bool $canSignOut = null,
        public readonly ?bool $qualificationFailed = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            isActive: isset($obj->{'IsActive'}) ? (bool) $obj->{'IsActive'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idParticipantEducation: isset($obj->{'ID_ParticipantEducation'}) ? (int) $obj->{'ID_ParticipantEducation'} : null,
            dateExam: isset($obj->{'DateExam'}) ? (string) $obj->{'DateExam'} : null,
            dateLetter: isset($obj->{'DateLetter'}) ? (string) $obj->{'DateLetter'} : null,
            idEventEducationExam: isset($obj->{'ID_EventEducationExam'}) ? (int) $obj->{'ID_EventEducationExam'} : null,
            haveLetterNumber: isset($obj->{'HaveLetterNumber'}) ? (bool) $obj->{'HaveLetterNumber'} : null,
            canAskForLetter: isset($obj->{'CanAskForLetter'}) ? (bool) $obj->{'CanAskForLetter'} : null,
            canDoExam: isset($obj->{'CanDoExam'}) ? (bool) $obj->{'CanDoExam'} : null,
            canGenerateLetter: isset($obj->{'CanGenerateLetter'}) ? (bool) $obj->{'CanGenerateLetter'} : null,
            canGenerateRequestState: isset($obj->{'CanGenerateRequestState'}) ? (bool) $obj->{'CanGenerateRequestState'} : null,
            unfilledObligatoryRequirements: isset($obj->{'UnfilledObligatoryRequirements'}) ? (string) $obj->{'UnfilledObligatoryRequirements'} : null,
            isAccredited: isset($obj->{'IsAccredited'}) ? (bool) $obj->{'IsAccredited'} : null,
            isDecree: isset($obj->{'IsDecree'}) ? (bool) $obj->{'IsDecree'} : null,
            isLetterRequest: isset($obj->{'IsLetterRequest'}) ? (bool) $obj->{'IsLetterRequest'} : null,
            isExam: isset($obj->{'IsExam'}) ? (bool) $obj->{'IsExam'} : null,
            idEventEducationLetterRequestState: isset($obj->{'ID_EventEducationLetterRequestState'}) ? (string) $obj->{'ID_EventEducationLetterRequestState'} : null,
            idEventEducationGroup: isset($obj->{'ID_EventEducationGroup'}) ? (string) $obj->{'ID_EventEducationGroup'} : null,
            eventEducationLetterRequestState: isset($obj->{'EventEducationLetterRequestState'}) ? (string) $obj->{'EventEducationLetterRequestState'} : null,
            letterNumber: isset($obj->{'LetterNumber'}) ? (string) $obj->{'LetterNumber'} : null,
            dateGenerated: isset($obj->{'DateGenerated'}) ? (string) $obj->{'DateGenerated'} : null,
            isAccepted: isset($obj->{'IsAccepted'}) ? (bool) $obj->{'IsAccepted'} : null,
            canSignOut: isset($obj->{'CanSignOut'}) ? (bool) $obj->{'CanSignOut'} : null,
            qualificationFailed: isset($obj->{'QualificationFailed'}) ? (bool) $obj->{'QualificationFailed'} : null,
        );
    }
}
