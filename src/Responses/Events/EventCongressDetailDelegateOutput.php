<?php

namespace Misakstvanu\LaravelSkautis\Responses\Events;

final class EventCongressDetailDelegateOutput
{
    public function __construct(
        public readonly ?int $actualDelegateCount = null,
        public readonly ?int $memberCount = null,
        public readonly ?int $delegateCount = null,
        public readonly ?int $delegateQuota = null,
        public readonly ?bool $isCustomDelegateQuota = null,
        public readonly ?int $fromFunctionCount = null,
        public readonly ?float $fromFunctionRatio = null,
        public readonly ?int $fromUnitCount = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            actualDelegateCount: isset($obj->{'ActualDelegateCount'}) ? (int) $obj->{'ActualDelegateCount'} : null,
            memberCount: isset($obj->{'MemberCount'}) ? (int) $obj->{'MemberCount'} : null,
            delegateCount: isset($obj->{'DelegateCount'}) ? (int) $obj->{'DelegateCount'} : null,
            delegateQuota: isset($obj->{'DelegateQuota'}) ? (int) $obj->{'DelegateQuota'} : null,
            isCustomDelegateQuota: isset($obj->{'IsCustomDelegateQuota'}) ? (bool) $obj->{'IsCustomDelegateQuota'} : null,
            fromFunctionCount: isset($obj->{'FromFunctionCount'}) ? (int) $obj->{'FromFunctionCount'} : null,
            fromFunctionRatio: isset($obj->{'FromFunctionRatio'}) ? (float) $obj->{'FromFunctionRatio'} : null,
            fromUnitCount: isset($obj->{'FromUnitCount'}) ? (int) $obj->{'FromUnitCount'} : null,
        );
    }
}
