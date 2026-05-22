<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class ErrorDetailOutput
{
    public function __construct(
        public readonly ?string $idLogin = null,
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

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idLogin: isset($obj->{'ID_Login'}) ? (string) $obj->{'ID_Login'} : null,
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            idPerson: isset($obj->{'ID_Person'}) ? (int) $obj->{'ID_Person'} : null,
            person: isset($obj->{'Person'}) ? (string) $obj->{'Person'} : null,
            idErrorType: isset($obj->{'ID_ErrorType'}) ? (string) $obj->{'ID_ErrorType'} : null,
            errorType: isset($obj->{'ErrorType'}) ? (string) $obj->{'ErrorType'} : null,
            date: isset($obj->{'Date'}) ? (string) $obj->{'Date'} : null,
            uRL: isset($obj->{'URL'}) ? (string) $obj->{'URL'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            isProcessed: isset($obj->{'IsProcessed'}) ? (bool) $obj->{'IsProcessed'} : null,
            browser: isset($obj->{'Browser'}) ? (string) $obj->{'Browser'} : null,
            iP: isset($obj->{'IP'}) ? (string) $obj->{'IP'} : null,
            idErrorSeverity: isset($obj->{'ID_ErrorSeverity'}) ? (string) $obj->{'ID_ErrorSeverity'} : null,
            errorSeverity: isset($obj->{'ErrorSeverity'}) ? (string) $obj->{'ErrorSeverity'} : null,
        );
    }
}
