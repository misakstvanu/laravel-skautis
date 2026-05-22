<?php

namespace Misakstvanu\LaravelSkautis\Responses\Evaluation;

final class EvaluationAllOutput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idEvaluationSubtype = null,
        public readonly ?string $evaluationSubtype = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $eventEducationType = null,
        public readonly ?int $idUnit = null,
        public readonly ?string $unit = null,
        public readonly ?string $registrationNumber = null,
        public readonly ?int $idEvent = null,
        public readonly ?string $event = null,
        public readonly ?string $idEventType = null,
        public readonly ?string $eventType = null,
        public readonly ?string $idEvaluationState = null,
        public readonly ?string $evaluationState = null,
        public readonly ?int $year = null,
        public readonly ?string $color = null,
        public readonly ?string $evaluationRating = null,
        public readonly ?string $displayNameEvaluated = null,
        public readonly ?string $typeEvaluated = null,
        public readonly ?bool $isUnit = null,
        public readonly ?int $idEvaluationPerson = null,
    ) {}

    public static function fromStdClass(\stdClass $obj): self
    {
        return new self(
            id: isset($obj->{'ID'}) ? (int) $obj->{'ID'} : null,
            idEvaluationSubtype: isset($obj->{'ID_EvaluationSubtype'}) ? (int) $obj->{'ID_EvaluationSubtype'} : null,
            evaluationSubtype: isset($obj->{'EvaluationSubtype'}) ? (string) $obj->{'EvaluationSubtype'} : null,
            idEventEducationType: isset($obj->{'ID_EventEducationType'}) ? (int) $obj->{'ID_EventEducationType'} : null,
            eventEducationType: isset($obj->{'EventEducationType'}) ? (string) $obj->{'EventEducationType'} : null,
            idUnit: isset($obj->{'ID_Unit'}) ? (int) $obj->{'ID_Unit'} : null,
            unit: isset($obj->{'Unit'}) ? (string) $obj->{'Unit'} : null,
            registrationNumber: isset($obj->{'RegistrationNumber'}) ? (string) $obj->{'RegistrationNumber'} : null,
            idEvent: isset($obj->{'ID_Event'}) ? (int) $obj->{'ID_Event'} : null,
            event: isset($obj->{'Event'}) ? (string) $obj->{'Event'} : null,
            idEventType: isset($obj->{'ID_EventType'}) ? (string) $obj->{'ID_EventType'} : null,
            eventType: isset($obj->{'EventType'}) ? (string) $obj->{'EventType'} : null,
            idEvaluationState: isset($obj->{'ID_EvaluationState'}) ? (string) $obj->{'ID_EvaluationState'} : null,
            evaluationState: isset($obj->{'EvaluationState'}) ? (string) $obj->{'EvaluationState'} : null,
            year: isset($obj->{'Year'}) ? (int) $obj->{'Year'} : null,
            color: isset($obj->{'Color'}) ? (string) $obj->{'Color'} : null,
            evaluationRating: isset($obj->{'EvaluationRating'}) ? (string) $obj->{'EvaluationRating'} : null,
            displayNameEvaluated: isset($obj->{'DisplayNameEvaluated'}) ? (string) $obj->{'DisplayNameEvaluated'} : null,
            typeEvaluated: isset($obj->{'TypeEvaluated'}) ? (string) $obj->{'TypeEvaluated'} : null,
            isUnit: isset($obj->{'IsUnit'}) ? (bool) $obj->{'IsUnit'} : null,
            idEvaluationPerson: isset($obj->{'ID_EvaluationPerson'}) ? (int) $obj->{'ID_EvaluationPerson'} : null,
        );
    }
}
