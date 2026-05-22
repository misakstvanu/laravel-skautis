<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class ErrorInsertInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?int $idUser = null,
        public readonly ?int $idPerson = null,
        public readonly ?string $person = null,
        public readonly ?string $idErrorType = null,
        public readonly ?string $errorType = null,
        public readonly ?string $date = null,
        public readonly ?string $uRL = null,
        public readonly ?string $description = null,
        public readonly ?bool $isProcessed = null,
        public readonly ?string $browser = null,
        public readonly ?string $iP = null,
        public readonly ?string $idErrorSeverity = null,
        public readonly ?string $errorSeverity = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'DisplayName' => $this->displayName,
            'ID_User' => $this->idUser,
            'ID_Person' => $this->idPerson,
            'Person' => $this->person,
            'ID_ErrorType' => $this->idErrorType,
            'ErrorType' => $this->errorType,
            'Date' => $this->date,
            'URL' => $this->uRL,
            'Description' => $this->description,
            'IsProcessed' => $this->isProcessed,
            'Browser' => $this->browser,
            'IP' => $this->iP,
            'ID_ErrorSeverity' => $this->idErrorSeverity,
            'ErrorSeverity' => $this->errorSeverity,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
