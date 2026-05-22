<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class ErrorAllInput
{
    public function __construct(
        public readonly ?int $idUser = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idErrorType = null,
        public readonly ?string $dateFrom = null,
        public readonly ?string $dateTo = null,
        public readonly ?bool $isProcessed = null,
        public readonly ?string $ignoredErrorType = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_User' => $this->idUser,
            'DisplayName' => $this->displayName,
            'ID_ErrorType' => $this->idErrorType,
            'DateFrom' => $this->dateFrom,
            'DateTo' => $this->dateTo,
            'IsProcessed' => $this->isProcessed,
            'IgnoredErrorType' => $this->ignoredErrorType,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
