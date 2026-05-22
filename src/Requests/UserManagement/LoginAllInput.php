<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class LoginAllInput
{
    public function __construct(
        public readonly ?string $idApplicationNotCurrent = null,
        public readonly ?int $count = null,
        public readonly ?bool $notEqual = null,
        public readonly ?string $idApplication = null,
        public readonly ?bool $success = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_ApplicationNotCurrent' => $this->idApplicationNotCurrent,
            'Count' => $this->count,
            'NotEqual' => $this->notEqual,
            'ID_Application' => $this->idApplication,
            'Success' => $this->success,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
