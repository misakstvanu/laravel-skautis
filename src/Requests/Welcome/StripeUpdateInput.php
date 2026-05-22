<?php

namespace Misakstvanu\LaravelSkautis\Requests\Welcome;

final class StripeUpdateInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idWelcome = null,
        public readonly ?string $welcome = null,
        public readonly ?string $displayName = null,
        public readonly ?int $order = null,
        public readonly ?string $text = null,
        public readonly ?string $idSex = null,
        public readonly ?string $sex = null,
        public readonly ?bool $isNew = null,
        public readonly ?int $idAlignmentType = null,
        public readonly ?string $alignmentType = null,
        public readonly ?bool $isWarning = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_Welcome' => $this->idWelcome,
            'Welcome' => $this->welcome,
            'DisplayName' => $this->displayName,
            'Order' => $this->order,
            'Text' => $this->text,
            'ID_Sex' => $this->idSex,
            'Sex' => $this->sex,
            'IsNew' => $this->isNew,
            'ID_AlignmentType' => $this->idAlignmentType,
            'AlignmentType' => $this->alignmentType,
            'IsWarning' => $this->isWarning,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
