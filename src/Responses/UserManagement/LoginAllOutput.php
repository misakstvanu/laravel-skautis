<?php

namespace Misakstvanu\LaravelSkautis\Responses\UserManagement;

final class LoginAllOutput
{
    public function __construct(
        public readonly ?int $idUser = null,
        public readonly ?string $dateLogin = null,
        public readonly ?string $iP = null,
        public readonly ?string $idApplication = null,
        public readonly ?string $application = null,
        public readonly ?bool $success = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            idUser: isset($obj->{'ID_User'}) ? (int) $obj->{'ID_User'} : null,
            dateLogin: isset($obj->{'DateLogin'}) ? (string) $obj->{'DateLogin'} : null,
            iP: isset($obj->{'IP'}) ? (string) $obj->{'IP'} : null,
            idApplication: isset($obj->{'ID_Application'}) ? (string) $obj->{'ID_Application'} : null,
            application: isset($obj->{'Application'}) ? (string) $obj->{'Application'} : null,
            success: isset($obj->{'Success'}) ? (bool) $obj->{'Success'} : null,
        );
    }
}
