<?php

namespace Misakstvanu\LaravelSkautis\Responses\Journal;

final class PersonJournalFreeAttachmentsOutput
{
    public function __construct(
        public readonly ?int $freeAttachments = null,
        public readonly ?int $freeAttachmentsLeft = null,
        public readonly ?int $babyPackage = null,
        public readonly ?int $babySubscriptionCount = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            freeAttachments: isset($obj->{'FreeAttachments'}) ? (int) $obj->{'FreeAttachments'} : null,
            freeAttachmentsLeft: isset($obj->{'FreeAttachmentsLeft'}) ? (int) $obj->{'FreeAttachmentsLeft'} : null,
            babyPackage: isset($obj->{'BabyPackage'}) ? (int) $obj->{'BabyPackage'} : null,
            babySubscriptionCount: isset($obj->{'BabySubscriptionCount'}) ? (int) $obj->{'BabySubscriptionCount'} : null,
        );
    }
}
