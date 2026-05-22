<?php

namespace Misakstvanu\LaravelSkautis\Responses\Power;

final class EnrollEnergyCandidateInsertOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEnrollEnergyInvitation = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEnrollEnergyInvitation: isset($obj->{'ID_EnrollEnergyInvitation'}) ? (int) $obj->{'ID_EnrollEnergyInvitation'} : null,
        );
    }
}
