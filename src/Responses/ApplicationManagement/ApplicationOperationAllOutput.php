<?php

namespace Misakstvanu\LaravelSkautis\Responses\ApplicationManagement;

final class ApplicationOperationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $idApplication = null,
        public readonly ?string $idOperation = null,
        public readonly ?string $operation = null,
        public readonly ?string $idAction = null,
        public readonly ?string $action = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idApplication: isset($obj->{'ID_Application'}) ? (string) $obj->{'ID_Application'} : null,
            idOperation: isset($obj->{'ID_Operation'}) ? (string) $obj->{'ID_Operation'} : null,
            operation: isset($obj->{'Operation'}) ? (string) $obj->{'Operation'} : null,
            idAction: isset($obj->{'ID_Action'}) ? (string) $obj->{'ID_Action'} : null,
            action: isset($obj->{'Action'}) ? (string) $obj->{'Action'} : null,
        );
    }
}
