<?php

namespace Misakstvanu\LaravelSkautis\Requests\UserManagement;

final class UserAuthenticationUpdateFormInput
{
    public function __construct(
        public readonly ?int $id = null,
        public readonly ?int $idUser = null,
        public readonly ?string $dateCreate = null,
        public readonly ?string $idUserAuthenticationType = null,
        public readonly ?string $userAuthenticationType = null,
        public readonly ?string $idUserAuthenticationState = null,
        public readonly ?string $userAuthenticationState = null,
        public readonly ?string $code = null,
        public readonly ?string $number = null,
        public readonly ?int $idUserAuthenticated = null,
        public readonly ?string $dateAuthenticated = null,
        public readonly ?string $content = null,
        public readonly ?string $formExtension = null,
        public readonly ?string $formContent = null,
    ) {}

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
            'ID' => $this->id,
            'ID_User' => $this->idUser,
            'DateCreate' => $this->dateCreate,
            'ID_UserAuthenticationType' => $this->idUserAuthenticationType,
            'UserAuthenticationType' => $this->userAuthenticationType,
            'ID_UserAuthenticationState' => $this->idUserAuthenticationState,
            'UserAuthenticationState' => $this->userAuthenticationState,
            'Code' => $this->code,
            'Number' => $this->number,
            'ID_UserAuthenticated' => $this->idUserAuthenticated,
            'DateAuthenticated' => $this->dateAuthenticated,
            'Content' => $this->content,
            'FormExtension' => $this->formExtension,
            'FormContent' => $this->formContent,
            ],
            fn (mixed $v): bool => $v !== null,
        );
    }
}
