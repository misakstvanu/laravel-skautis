<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class CampOnlineLoginUpdateQuestionOrderInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idCampLoginQuestion = null,
        public readonly ?int $idCampFixedQuestion = null,
        public readonly ?int $newOrder = null,
        public readonly ?int $orderChange = null,
        public readonly mixed $dataOrder = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_CampLoginQuestion' => $this->idCampLoginQuestion,
            'ID_CampFixedQuestion' => $this->idCampFixedQuestion,
            'NewOrder' => $this->newOrder,
            'OrderChange' => $this->orderChange,
            'DataOrder' => $this->dataOrder,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
