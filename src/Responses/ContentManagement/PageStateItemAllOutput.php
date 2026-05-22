<?php

namespace Misakstvanu\LaravelSkautis\Responses\ContentManagement;

final class PageStateItemAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idPageState = null,
        public readonly ?string $pageState = null,
        public readonly ?string $controlID = null,
        public readonly ?string $key = null,
        public readonly ?string $value = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idPageState: isset($obj->{'ID_PageState'}) ? (int) $obj->{'ID_PageState'} : null,
            pageState: isset($obj->{'PageState'}) ? (string) $obj->{'PageState'} : null,
            controlID: isset($obj->{'ControlID'}) ? (string) $obj->{'ControlID'} : null,
            key: isset($obj->{'Key'}) ? (string) $obj->{'Key'} : null,
            value: isset($obj->{'Value'}) ? (string) $obj->{'Value'} : null,
        );
    }
}
