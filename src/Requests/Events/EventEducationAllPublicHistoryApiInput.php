<?php

namespace Misakstvanu\LaravelSkautis\Requests\Events;

final class EventEducationAllPublicHistoryApiInput
{
    public function __construct(
        public readonly ?string $idApplication = null,
        public readonly ?int $idEventEducationType = null,
        public readonly ?string $idEventEducationGroup = null,
        public readonly ?bool $isForester = null,
        public readonly ?bool $isChildFriendly = null,
        public readonly ?bool $isAgeRestricted = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID_Application' => $this->idApplication,
            'ID_EventEducationType' => $this->idEventEducationType,
            'ID_EventEducationGroup' => $this->idEventEducationGroup,
            'IsForester' => $this->isForester,
            'IsChildFriendly' => $this->isChildFriendly,
            'IsAgeRestricted' => $this->isAgeRestricted,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
