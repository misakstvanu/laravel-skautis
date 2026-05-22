<?php

namespace Misakstvanu\LaravelSkautis\Responses\Message;

final class MessageTypeDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
        public readonly ?string $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idMessageGroup = null,
        public readonly ?string $messageGroup = null,
        public readonly ?string $procedure = null,
        public readonly ?bool $allwaysEmail = null,
        public readonly ?string $note = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (string) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idMessageGroup: isset($obj->{'ID_MessageGroup'}) ? (int) $obj->{'ID_MessageGroup'} : null,
            messageGroup: isset($obj->{'MessageGroup'}) ? (string) $obj->{'MessageGroup'} : null,
            procedure: isset($obj->{'Procedure'}) ? (string) $obj->{'Procedure'} : null,
            allwaysEmail: isset($obj->{'AllwaysEmail'}) ? (bool) $obj->{'AllwaysEmail'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
        );
    }
}
