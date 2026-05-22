<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationSubtypeAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?string $displayName = null,
        public readonly ?string $idUnitType = null,
        public readonly ?string $unitType = null,
        public readonly ?string $idEventType = null,
        public readonly ?string $eventType = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?string $description = null,
        public readonly ?string $note = null,
        public readonly ?int $idEvaluationVersion = null,
        public readonly ?string $evaluationVersion = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            displayName: isset($obj->{'DisplayName'}) ? (string) $obj->{'DisplayName'} : null,
            idUnitType: isset($obj->{'ID_UnitType'}) ? (string) $obj->{'ID_UnitType'} : null,
            unitType: isset($obj->{'UnitType'}) ? (string) $obj->{'UnitType'} : null,
            idEventType: isset($obj->{'ID_EventType'}) ? (string) $obj->{'ID_EventType'} : null,
            eventType: isset($obj->{'EventType'}) ? (string) $obj->{'EventType'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            description: isset($obj->{'Description'}) ? (string) $obj->{'Description'} : null,
            note: isset($obj->{'Note'}) ? (string) $obj->{'Note'} : null,
            idEvaluationVersion: isset($obj->{'ID_EvaluationVersion'}) ? (int) $obj->{'ID_EvaluationVersion'} : null,
            evaluationVersion: isset($obj->{'EvaluationVersion'}) ? (string) $obj->{'EvaluationVersion'} : null,
        );
    }
}
