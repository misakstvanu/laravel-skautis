<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class CampLoginQuestionAllOutput
{
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?int $idCampOnlineLogin = null,
        public readonly ?int $idCampLoginQuestion = null,
        public readonly ?int $idCampFixedQuestion = null,
        public readonly ?string $campOnlineLogin = null,
        public readonly ?int $idCampLoginQuestionGroup = null,
        public readonly ?string $idLoginQuestionType = null,
        public readonly ?string $loginQuestionType = null,
        public readonly ?string $displayName = null,
        public readonly ?string $rawText = null,
        public readonly ?string $help = null,
        public readonly ?string $helpRaw = null,
        public readonly ?string $note = null,
        public readonly ?string $idLoginQuestionRequirement = null,
        public readonly ?string $loginQuestionRequirement = null,
        public readonly ?int $order = null,
        public readonly ?int $orderReal = null,
        public readonly ?bool $isSystem = null,
        public readonly ?bool $isReadOnly = null,
        public readonly ?bool $canDelete = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            idCampOnlineLogin: isset($obj->{'ID_CampOnlineLogin'}) ? (int) $obj->{'ID_CampOnlineLogin'} : null,
            idCampLoginQuestion: isset($obj->{'ID_CampLoginQuestion'}) ? (int) $obj->{'ID_CampLoginQuestion'} : null,
            idCampFixedQuestion: isset($obj->{'ID_CampFixedQuestion'}) ? (int) $obj->{'ID_CampFixedQuestion'} : null,
            campOnlineLogin: isset($obj->{'CampOnlineLogin'}) ? (string) $obj->{'CampOnlineLogin'} : null,
            idCampLoginQuestionGroup: isset($obj->{'ID_CampLoginQuestionGroup'}) ? (int) $obj->{'ID_CampLoginQuestionGroup'} : null,
            idLoginQuestionType: isset($obj->{'ID_LoginQuestionType'}) ? (string) $obj->{'ID_LoginQuestionType'} : null,
            loginQuestionType: isset($obj->{'LoginQuestionType'}) ? (string) $obj->{'LoginQuestionType'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            rawText: isset($obj->{'RawText'}) ? (string) $obj->{'RawText'} : null,
            help: isset($obj->{'Help'}) ? (string) $obj->{'Help'} : null,
            helpRaw: isset($obj->{'HelpRaw'}) ? (string) $obj->{'HelpRaw'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idLoginQuestionRequirement: isset($obj->{'ID_LoginQuestionRequirement'}) ? (string) $obj->{'ID_LoginQuestionRequirement'} : null,
            loginQuestionRequirement: isset($obj->{'LoginQuestionRequirement'}) ? (string) $obj->{'LoginQuestionRequirement'} : null,
            order: isset($obj->{'Order'}) ? (int) $obj->{'Order'} : null,
            orderReal: isset($obj->{'OrderReal'}) ? (int) $obj->{'OrderReal'} : null,
            isSystem: isset($obj->{'IsSystem'}) ? (bool) $obj->{'IsSystem'} : null,
            isReadOnly: isset($obj->{'IsReadOnly'}) ? (bool) $obj->{'IsReadOnly'} : null,
            canDelete: isset($obj->{'CanDelete'}) ? (bool) $obj->{'CanDelete'} : null,
        );
    }
}
