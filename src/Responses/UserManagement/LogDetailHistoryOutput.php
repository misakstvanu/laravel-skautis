<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class LogDetailHistoryOutput
{
    public function __construct(
        public readonly ?string $displayName = null,
        public readonly ?string $oldValue = null,
        public readonly ?string $newValue = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            oldValue: isset($obj->{'OldValue'}) ? (string) $obj->{'OldValue'} : null,
            newValue: isset($obj->{'NewValue'}) ? (string) $obj->{'NewValue'} : null,
        );
    }
}
