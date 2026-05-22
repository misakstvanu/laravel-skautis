<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\ActionAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\ActionVerifyInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\ErrorAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\ErrorDetailInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\ErrorInsertInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\ErrorUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\GroupAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\GroupMemberApplicationInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\GroupTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\HolidayDetailNotHolidayInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\InstanceDetailInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\LogAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\LogDetailHistoryInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\LogDetailInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\LoginAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\LoginDetailInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\LoginDetailTwoFactorInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\LoginInsertInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\LoginUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\LoginUpdateLogoutInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\LoginUpdateRefreshInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\LoginUpdateRoleAutoInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\LoginUpdateTwoFactorInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\OperationAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\PermissionAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\PermissionAllLoginInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\PersistentIPDetailIsPersitentInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\PluginAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\PluginDetailInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\PluginUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\RoleAllFunctionInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\RoleAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\RoleDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\RoleDetailInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\RoleInsertInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\RolePermissionAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\RolePermissionDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\RolePermissionInsertInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\RolePermissionUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\RoleUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\SettingsAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\SettingsAllPublicInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\SettingsDetailInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\SettingsGroupAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\SettingsUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\TableArchiveInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\TableMaintranceInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\TableRebuildInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\TableSetOrderInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\TempFileDetailInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\TempFileDownloadInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\TempFileInsertDocumentInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\TempFileInsertInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\TempFileMaintranceInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\TwoFactorTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserActivationInsertInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserActivationUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserActivationUpdateResendInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserAuthenticationAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserAuthenticationDetailFormInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserAuthenticationDetailInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserAuthenticationInsertInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserAuthenticationRequestInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserAuthenticationStateAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserAuthenticationTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserAuthenticationUpdateFormInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserDetailExternalInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserDetailInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserDetailTwoFactorInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserInsertInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserLoginCodeAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserLoginCodeOtherGenerateEmailCodeInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserLoginCodeOtherGenerateInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserLoginCodeOtherVerifyInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserLoginDeviceAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserLoginDeviceDeleteAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserLoginDeviceDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserLoginDeviceUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserPasswordRequestInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserRoleALLUnitInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserRoleAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserRoleAllUserUnitInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserRoleDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserRoleInsertInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserRoleUpdateColorInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserRoleUpdateColorResetInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserRoleUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserRoleUpdateIsActiveInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserRoleUpdateRestoreOrderInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserUpdateFavoriteLimitInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserUpdatePasswordAdminInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserUpdatePasswordInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserUpdateTwoFactorDateInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\UserUpdateTwoFactorInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\VatRateAllInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\VatRateDetailInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\VatRateDetailPriceInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\VatRateDetailVatRateTypeInput;
use Misakstvanu\LaravelSkautis\Requests\UserManagement\WeekDayAllInput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\ActionAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\ActionVerifyOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\ErrorAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\ErrorDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\ErrorInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\GroupAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\GroupTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\HolidayDetailNotHolidayOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\InstanceDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\LogAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\LogDetailHistoryOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\LogDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\LoginAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\LoginDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\LoginDetailTwoFactorOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\LoginInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\LoginUpdateOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\LoginUpdateRefreshOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\LoginUpdateRoleAutoOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\LoginUpdateTwoFactorOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\OperationAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\PermissionAllLoginOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\PermissionAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\PersistentIPDetailIsPersitentOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\PluginAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\PluginDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\RoleAllFunctionOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\RoleAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\RoleDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\RoleInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\RolePermissionAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\RolePermissionInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\SettingsAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\SettingsAllPublicOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\SettingsDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\SettingsGroupAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\TableMaintranceOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\TempFileDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\TempFileDownloadOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\TempFileMaintranceOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\TwoFactorTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserActivationInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserActivationUpdateOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserAuthenticationAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserAuthenticationDetailFormOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserAuthenticationDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserAuthenticationInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserAuthenticationRequestOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserAuthenticationStateAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserAuthenticationTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserDetailExternalOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserDetailTwoFactorOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserLoginCodeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserLoginCodeOtherVerifyOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserLoginDeviceAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserPasswordRequestOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserRoleALLUnitOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserRoleAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserRoleAllUserUnitOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\UserRoleInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\VatRateAllOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\VatRateDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\VatRateDetailPriceOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\VatRateDetailVatRateTypeOutput;
use Misakstvanu\LaravelSkautis\Responses\UserManagement\WeekDayAllOutput;

/**
 * Webová služba pro práci s uživateli (zakládání, přidělování rolí, přihlašování apod.)
 */
class UserManagementService
{
    public const SERVICE_NAME = 'UserManagement';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam akcí
     * @return ActionAllOutput[]
     */
    public function ActionAll(ActionAllInput $input = new ActionAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ActionAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ActionAllOutput => ActionAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Vrátí seznam akcí, které může přihlášený uživatele vyvolat pro zadaný záznam
     * @return ActionVerifyOutput[]
     */
    public function ActionVerify(ActionVerifyInput $input = new ActionVerifyInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ActionVerify', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ActionVerifyOutput => ActionVerifyOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam chyb
     * @return ErrorAllOutput[]
     */
    public function ErrorAll(ErrorAllInput $input = new ErrorAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ErrorAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ErrorAllOutput => ErrorAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail chyby
     */
    public function ErrorDetail(ErrorDetailInput $input = new ErrorDetailInput()): ErrorDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ErrorDetail', OperationRequest::from($input->toArray()));
        return ErrorDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit chybu
     */
    public function ErrorInsert(ErrorInsertInput $input = new ErrorInsertInput()): ErrorInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ErrorInsert', OperationRequest::from($input->toArray()));
        return ErrorInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit chybu
     */
    public function ErrorUpdate(ErrorUpdateInput $input = new ErrorUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ErrorUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam skupin
     * @return GroupAllOutput[]
     */
    public function GroupAll(GroupAllInput $input = new GroupAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GroupAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GroupAllOutput => GroupAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Přidá/odebere přihlášeného uživatele do skupiny aplikace
     */
    public function GroupMemberApplication(GroupMemberApplicationInput $input = new GroupMemberApplicationInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GroupMemberApplication', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam typů skupin
     * @return GroupTypeAllOutput[]
     */
    public function GroupTypeAll(GroupTypeAllInput $input = new GroupTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GroupTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GroupTypeAllOutput => GroupTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * K danému datu vrátí nejbližší možný pracovní den
     */
    public function HolidayDetailNotHoliday(HolidayDetailNotHolidayInput $input = new HolidayDetailNotHolidayInput()): HolidayDetailNotHolidayOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'HolidayDetailNotHoliday', OperationRequest::from($input->toArray()));
        return HolidayDetailNotHolidayOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst detail instance skautISu
     */
    public function InstanceDetail(InstanceDetailInput $input = new InstanceDetailInput()): InstanceDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'InstanceDetail', OperationRequest::from($input->toArray()));
        return InstanceDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam položek logu
     * @return LogAllOutput[]
     */
    public function LogAll(LogAllInput $input = new LogAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'LogAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): LogAllOutput => LogAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail logu
     */
    public function LogDetail(LogDetailInput $input = new LogDetailInput()): LogDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'LogDetail', OperationRequest::from($input->toArray()));
        return LogDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst změněné vlastnosti
     * @return LogDetailHistoryOutput[]
     */
    public function LogDetailHistory(LogDetailHistoryInput $input = new LogDetailHistoryInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'LogDetailHistory', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): LogDetailHistoryOutput => LogDetailHistoryOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam přihlášení
     * @return LoginAllOutput[]
     */
    public function LoginAll(LoginAllInput $input = new LoginAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'LoginAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): LoginAllOutput => LoginAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst informace o přihlášení
     */
    public function LoginDetail(LoginDetailInput $input = new LoginDetailInput()): LoginDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'LoginDetail', OperationRequest::from($input->toArray()));
        return LoginDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst informace o přihlášení pro 2F
     */
    public function LoginDetailTwoFactor(LoginDetailTwoFactorInput $input = new LoginDetailTwoFactorInput()): LoginDetailTwoFactorOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'LoginDetailTwoFactor', OperationRequest::from($input->toArray()));
        return LoginDetailTwoFactorOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Přihlášení uživatele
     */
    public function LoginInsert(LoginInsertInput $input = new LoginInsertInput()): LoginInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'LoginInsert', OperationRequest::from($input->toArray()));
        return LoginInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Přihlášení uživatele na jinou roli
     */
    public function LoginUpdate(LoginUpdateInput $input = new LoginUpdateInput()): LoginUpdateOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'LoginUpdate', OperationRequest::from($input->toArray()));
        return LoginUpdateOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Odhlášení uživatele
     */
    public function LoginUpdateLogout(LoginUpdateLogoutInput $input = new LoginUpdateLogoutInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'LoginUpdateLogout', OperationRequest::from($input->toArray()));
    }

    /**
     * Prodloužení platnosti přihlašovacího tokenu o 30 minut
     */
    public function LoginUpdateRefresh(LoginUpdateRefreshInput $input = new LoginUpdateRefreshInput()): LoginUpdateRefreshOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'LoginUpdateRefresh', OperationRequest::from($input->toArray()));
        return LoginUpdateRefreshOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Automaticky nastavit vhodnou roli
     */
    public function LoginUpdateRoleAuto(LoginUpdateRoleAutoInput $input = new LoginUpdateRoleAutoInput()): LoginUpdateRoleAutoOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'LoginUpdateRoleAuto', OperationRequest::from($input->toArray()));
        return LoginUpdateRoleAutoOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Ověření uživatele přes dvoufázové přihlášení
     */
    public function LoginUpdateTwoFactor(LoginUpdateTwoFactorInput $input = new LoginUpdateTwoFactorInput()): LoginUpdateTwoFactorOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'LoginUpdateTwoFactor', OperationRequest::from($input->toArray()));
        return LoginUpdateTwoFactorOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam operací
     * @return OperationAllOutput[]
     */
    public function OperationAll(OperationAllInput $input = new OperationAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'OperationAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): OperationAllOutput => OperationAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam oprávnění
     * @return PermissionAllOutput[]
     */
    public function PermissionAll(PermissionAllInput $input = new PermissionAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PermissionAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): PermissionAllOutput => PermissionAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Vrátí seznam oprávnění přhlášeného uživatele
     * @return PermissionAllLoginOutput[]
     */
    public function PermissionAllLogin(PermissionAllLoginInput $input = new PermissionAllLoginInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PermissionAllLogin', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): PermissionAllLoginOutput => PermissionAllLoginOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Zda se nemá z IP odhlašovat
     */
    public function PersistentIPDetailIsPersitent(PersistentIPDetailIsPersitentInput $input = new PersistentIPDetailIsPersitentInput()): PersistentIPDetailIsPersitentOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersistentIPDetailIsPersitent', OperationRequest::from($input->toArray()));
        return PersistentIPDetailIsPersitentOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam pluginů
     * @return PluginAllOutput[]
     */
    public function PluginAll(PluginAllInput $input = new PluginAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PluginAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): PluginAllOutput => PluginAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail pluginu
     */
    public function PluginDetail(PluginDetailInput $input = new PluginDetailInput()): PluginDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PluginDetail', OperationRequest::from($input->toArray()));
        return PluginDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit plugin
     */
    public function PluginUpdate(PluginUpdateInput $input = new PluginUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PluginUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam rolí
     * @return RoleAllOutput[]
     */
    public function RoleAll(RoleAllInput $input = new RoleAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RoleAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): RoleAllOutput => RoleAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam vhodných rolí podle funkcí
     * @return RoleAllFunctionOutput[]
     */
    public function RoleAllFunction(RoleAllFunctionInput $input = new RoleAllFunctionInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RoleAllFunction', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): RoleAllFunctionOutput => RoleAllFunctionOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat roli
     */
    public function RoleDelete(RoleDeleteInput $input = new RoleDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RoleDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail role
     */
    public function RoleDetail(RoleDetailInput $input = new RoleDetailInput()): RoleDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RoleDetail', OperationRequest::from($input->toArray()));
        return RoleDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit roli
     */
    public function RoleInsert(RoleInsertInput $input = new RoleInsertInput()): RoleInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RoleInsert', OperationRequest::from($input->toArray()));
        return RoleInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam práv přiřazených do role
     * @return RolePermissionAllOutput[]
     */
    public function RolePermissionAll(RolePermissionAllInput $input = new RolePermissionAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RolePermissionAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): RolePermissionAllOutput => RolePermissionAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Odebrat právo z role
     */
    public function RolePermissionDelete(RolePermissionDeleteInput $input = new RolePermissionDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RolePermissionDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Přidat právo do role
     */
    public function RolePermissionInsert(RolePermissionInsertInput $input = new RolePermissionInsertInput()): RolePermissionInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RolePermissionInsert', OperationRequest::from($input->toArray()));
        return RolePermissionInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit přiřazení práva do role
     */
    public function RolePermissionUpdate(RolePermissionUpdateInput $input = new RolePermissionUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RolePermissionUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit roli
     */
    public function RoleUpdate(RoleUpdateInput $input = new RoleUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RoleUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam Nastavení
     * @return SettingsAllOutput[]
     */
    public function SettingsAll(SettingsAllInput $input = new SettingsAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SettingsAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SettingsAllOutput => SettingsAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam Nastavení
     * @return SettingsAllPublicOutput[]
     */
    public function SettingsAllPublic(SettingsAllPublicInput $input = new SettingsAllPublicInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SettingsAllPublic', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SettingsAllPublicOutput => SettingsAllPublicOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail Nastavení
     */
    public function SettingsDetail(SettingsDetailInput $input = new SettingsDetailInput()): SettingsDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SettingsDetail', OperationRequest::from($input->toArray()));
        return SettingsDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam skupin nastavení
     * @return SettingsGroupAllOutput[]
     */
    public function SettingsGroupAll(SettingsGroupAllInput $input = new SettingsGroupAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SettingsGroupAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SettingsGroupAllOutput => SettingsGroupAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Upravit hodnotu nastavení
     */
    public function SettingsUpdate(SettingsUpdateInput $input = new SettingsUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SettingsUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Table Archive.
     */
    public function TableArchive(TableArchiveInput $input = new TableArchiveInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'TableArchive', OperationRequest::from($input->toArray()));
    }

    /**
     * Table Maintrance.
     */
    public function TableMaintrance(TableMaintranceInput $input = new TableMaintranceInput()): TableMaintranceOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'TableMaintrance', OperationRequest::from($input->toArray()));
        return TableMaintranceOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Table Rebuild.
     */
    public function TableRebuild(TableRebuildInput $input = new TableRebuildInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'TableRebuild', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit pořadí tabulky
     */
    public function TableSetOrder(TableSetOrderInput $input = new TableSetOrderInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'TableSetOrder', OperationRequest::from($input->toArray()));
    }

    /**
     * Informace o dočasném souboru
     */
    public function TempFileDetail(TempFileDetailInput $input = new TempFileDetailInput()): TempFileDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'TempFileDetail', OperationRequest::from($input->toArray()));
        return TempFileDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Stáhnout dočasný soubor
     */
    public function TempFileDownload(TempFileDownloadInput $input = new TempFileDownloadInput()): TempFileDownloadOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'TempFileDownload', OperationRequest::from($input->toArray()));
        return TempFileDownloadOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Vložení dočasného souboru
     */
    public function TempFileInsert(TempFileInsertInput $input = new TempFileInsertInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'TempFileInsert', OperationRequest::from($input->toArray()));
    }

    /**
     * Vložení dočasného souboru
     */
    public function TempFileInsertDocument(TempFileInsertDocumentInput $input = new TempFileInsertDocumentInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'TempFileInsertDocument', OperationRequest::from($input->toArray()));
    }

    /**
     * Temp File Maintrance.
     */
    public function TempFileMaintrance(TempFileMaintranceInput $input = new TempFileMaintranceInput()): TempFileMaintranceOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'TempFileMaintrance', OperationRequest::from($input->toArray()));
        return TempFileMaintranceOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam typů dvoufaktorového ověření
     * @return TwoFactorTypeAllOutput[]
     */
    public function TwoFactorTypeAll(TwoFactorTypeAllInput $input = new TwoFactorTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'TwoFactorTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): TwoFactorTypeAllOutput => TwoFactorTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Založit aktivaci účtu
     */
    public function UserActivationInsert(UserActivationInsertInput $input = new UserActivationInsertInput()): UserActivationInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserActivationInsert', OperationRequest::from($input->toArray()));
        return UserActivationInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit aktivaci účtu
     */
    public function UserActivationUpdate(UserActivationUpdateInput $input = new UserActivationUpdateInput()): UserActivationUpdateOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserActivationUpdate', OperationRequest::from($input->toArray()));
        return UserActivationUpdateOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Znovu odeslat aktivační email
     */
    public function UserActivationUpdateResend(UserActivationUpdateResendInput $input = new UserActivationUpdateResendInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserActivationUpdateResend', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam uživatelů
     * @return UserAllOutput[]
     */
    public function UserAll(UserAllInput $input = new UserAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): UserAllOutput => UserAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst ověření uživatele
     * @return UserAuthenticationAllOutput[]
     */
    public function UserAuthenticationAll(UserAuthenticationAllInput $input = new UserAuthenticationAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserAuthenticationAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): UserAuthenticationAllOutput => UserAuthenticationAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail ověření
     */
    public function UserAuthenticationDetail(UserAuthenticationDetailInput $input = new UserAuthenticationDetailInput()): UserAuthenticationDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserAuthenticationDetail', OperationRequest::from($input->toArray()));
        return UserAuthenticationDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst detail ověření
     */
    public function UserAuthenticationDetailForm(UserAuthenticationDetailFormInput $input = new UserAuthenticationDetailFormInput()): UserAuthenticationDetailFormOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserAuthenticationDetailForm', OperationRequest::from($input->toArray()));
        return UserAuthenticationDetailFormOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit ověření
     */
    public function UserAuthenticationInsert(UserAuthenticationInsertInput $input = new UserAuthenticationInsertInput()): UserAuthenticationInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserAuthenticationInsert', OperationRequest::from($input->toArray()));
        return UserAuthenticationInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit ověření uživatele
     */
    public function UserAuthenticationRequest(UserAuthenticationRequestInput $input = new UserAuthenticationRequestInput()): UserAuthenticationRequestOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserAuthenticationRequest', OperationRequest::from($input->toArray()));
        return UserAuthenticationRequestOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * User Authentication State All.
     * @return UserAuthenticationStateAllOutput[]
     */
    public function UserAuthenticationStateAll(UserAuthenticationStateAllInput $input = new UserAuthenticationStateAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserAuthenticationStateAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): UserAuthenticationStateAllOutput => UserAuthenticationStateAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * User Authentication Type All.
     * @return UserAuthenticationTypeAllOutput[]
     */
    public function UserAuthenticationTypeAll(UserAuthenticationTypeAllInput $input = new UserAuthenticationTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserAuthenticationTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): UserAuthenticationTypeAllOutput => UserAuthenticationTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Nahrát ověřený formulář
     */
    public function UserAuthenticationUpdateForm(UserAuthenticationUpdateFormInput $input = new UserAuthenticationUpdateFormInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserAuthenticationUpdateForm', OperationRequest::from($input->toArray()));
    }

    /**
     * Načtení informací o uživateli
     */
    public function UserDetail(UserDetailInput $input = new UserDetailInput()): UserDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserDetail', OperationRequest::from($input->toArray()));
        return UserDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načtení externích informací o uživateli
     */
    public function UserDetailExternal(UserDetailExternalInput $input = new UserDetailExternalInput()): UserDetailExternalOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserDetailExternal', OperationRequest::from($input->toArray()));
        return UserDetailExternalOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načtení informací o uživateli pro dvoufaktorové přihlášení
     */
    public function UserDetailTwoFactor(UserDetailTwoFactorInput $input = new UserDetailTwoFactorInput()): UserDetailTwoFactorOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserDetailTwoFactor', OperationRequest::from($input->toArray()));
        return UserDetailTwoFactorOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Registrace uživatele
     */
    public function UserInsert(UserInsertInput $input = new UserInsertInput()): UserInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserInsert', OperationRequest::from($input->toArray()));
        return UserInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam záložních kódů uživatele
     * @return UserLoginCodeAllOutput[]
     */
    public function UserLoginCodeAll(UserLoginCodeAllInput $input = new UserLoginCodeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserLoginCodeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): UserLoginCodeAllOutput => UserLoginCodeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Vygenerovat záložní kódy pro uživatele
     */
    public function UserLoginCodeOtherGenerate(UserLoginCodeOtherGenerateInput $input = new UserLoginCodeOtherGenerateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserLoginCodeOtherGenerate', OperationRequest::from($input->toArray()));
    }

    /**
     * Vygenerovat kód pro přihlášení přes 2F
     */
    public function UserLoginCodeOtherGenerateEmailCode(UserLoginCodeOtherGenerateEmailCodeInput $input = new UserLoginCodeOtherGenerateEmailCodeInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserLoginCodeOtherGenerateEmailCode', OperationRequest::from($input->toArray()));
    }

    /**
     * Zkontrolovat platnost tokenu
     */
    public function UserLoginCodeOtherVerify(UserLoginCodeOtherVerifyInput $input = new UserLoginCodeOtherVerifyInput()): UserLoginCodeOtherVerifyOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserLoginCodeOtherVerify', OperationRequest::from($input->toArray()));
        return UserLoginCodeOtherVerifyOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam zařízení použitých přihlášení
     */
    public function UserLoginDeviceAll(UserLoginDeviceAllInput $input = new UserLoginDeviceAllInput()): UserLoginDeviceAllOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserLoginDeviceAll', OperationRequest::from($input->toArray()));
        return UserLoginDeviceAllOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Smazat zařízení použité k přihlášení
     */
    public function UserLoginDeviceDelete(UserLoginDeviceDeleteInput $input = new UserLoginDeviceDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserLoginDeviceDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Smazat všechna zařízení použité k přihlášení
     */
    public function UserLoginDeviceDeleteAll(UserLoginDeviceDeleteAllInput $input = new UserLoginDeviceDeleteAllInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserLoginDeviceDeleteAll', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit zařízení použité k přihlášení
     */
    public function UserLoginDeviceUpdate(UserLoginDeviceUpdateInput $input = new UserLoginDeviceUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserLoginDeviceUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Žádost o zaslání e-mailu při ztrátě hesla
     */
    public function UserPasswordRequest(UserPasswordRequestInput $input = new UserPasswordRequestInput()): UserPasswordRequestOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserPasswordRequest', OperationRequest::from($input->toArray()));
        return UserPasswordRequestOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam obsazení rolí v jednotce
     * @return UserRoleALLUnitOutput[]
     */
    public function UserRoleALLUnit(UserRoleALLUnitInput $input = new UserRoleALLUnitInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserRoleALLUnit', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): UserRoleALLUnitOutput => UserRoleALLUnitOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam rolí přiřazených uživateli
     * @return UserRoleAllOutput[]
     */
    public function UserRoleAll(UserRoleAllInput $input = new UserRoleAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserRoleAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): UserRoleAllOutput => UserRoleAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam rolí uživatele v jednotce
     * @return UserRoleAllUserUnitOutput[]
     */
    public function UserRoleAllUserUnit(UserRoleAllUserUnitInput $input = new UserRoleAllUserUnitInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserRoleAllUserUnit', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): UserRoleAllUserUnitOutput => UserRoleAllUserUnitOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Odebrat uživateli roli
     */
    public function UserRoleDelete(UserRoleDeleteInput $input = new UserRoleDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserRoleDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Přidat uživateli roli
     */
    public function UserRoleInsert(UserRoleInsertInput $input = new UserRoleInsertInput()): UserRoleInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserRoleInsert', OperationRequest::from($input->toArray()));
        return UserRoleInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit roli uživatele
     */
    public function UserRoleUpdate(UserRoleUpdateInput $input = new UserRoleUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserRoleUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit barvu role uživatele
     */
    public function UserRoleUpdateColor(UserRoleUpdateColorInput $input = new UserRoleUpdateColorInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserRoleUpdateColor', OperationRequest::from($input->toArray()));
    }

    /**
     * Reset barevného nastavení uživatele
     */
    public function UserRoleUpdateColorReset(UserRoleUpdateColorResetInput $input = new UserRoleUpdateColorResetInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserRoleUpdateColorReset', OperationRequest::from($input->toArray()));
    }

    /**
     * Změnit viditelnost role
     */
    public function UserRoleUpdateIsActive(UserRoleUpdateIsActiveInput $input = new UserRoleUpdateIsActiveInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserRoleUpdateIsActive', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit výchozí řazení rolí uživatele
     */
    public function UserRoleUpdateRestoreOrder(UserRoleUpdateRestoreOrderInput $input = new UserRoleUpdateRestoreOrderInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserRoleUpdateRestoreOrder', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit uživatele
     */
    public function UserUpdate(UserUpdateInput $input = new UserUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Úprava počtu zobrazovaných oblíbených položek
     */
    public function UserUpdateFavoriteLimit(UserUpdateFavoriteLimitInput $input = new UserUpdateFavoriteLimitInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserUpdateFavoriteLimit', OperationRequest::from($input->toArray()));
    }

    /**
     * Změna zapomenutého hesla pomocí jedinečného identifikátoru
     */
    public function UserUpdatePassword(UserUpdatePasswordInput $input = new UserUpdatePasswordInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserUpdatePassword', OperationRequest::from($input->toArray()));
    }

    /**
     * Změnit heslo administrátorem
     */
    public function UserUpdatePasswordAdmin(UserUpdatePasswordAdminInput $input = new UserUpdatePasswordAdminInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserUpdatePasswordAdmin', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit nastavení 2F uživatele
     */
    public function UserUpdateTwoFactor(UserUpdateTwoFactorInput $input = new UserUpdateTwoFactorInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserUpdateTwoFactor', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit nastavení 2F uživatele
     */
    public function UserUpdateTwoFactorDate(UserUpdateTwoFactorDateInput $input = new UserUpdateTwoFactorDateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UserUpdateTwoFactorDate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam sazeb DPH
     * @return VatRateAllOutput[]
     */
    public function VatRateAll(VatRateAllInput $input = new VatRateAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'VatRateAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): VatRateAllOutput => VatRateAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail sazby DPH
     */
    public function VatRateDetail(VatRateDetailInput $input = new VatRateDetailInput()): VatRateDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'VatRateDetail', OperationRequest::from($input->toArray()));
        return VatRateDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst detail sazby DPH
     */
    public function VatRateDetailPrice(VatRateDetailPriceInput $input = new VatRateDetailPriceInput()): VatRateDetailPriceOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'VatRateDetailPrice', OperationRequest::from($input->toArray()));
        return VatRateDetailPriceOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst detail sazby DPH podle typu sazby DPH
     */
    public function VatRateDetailVatRateType(VatRateDetailVatRateTypeInput $input = new VatRateDetailVatRateTypeInput()): VatRateDetailVatRateTypeOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'VatRateDetailVatRateType', OperationRequest::from($input->toArray()));
        return VatRateDetailVatRateTypeOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam dnů v týdnu
     * @return WeekDayAllOutput[]
     */
    public function WeekDayAll(WeekDayAllInput $input = new WeekDayAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WeekDayAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WeekDayAllOutput => WeekDayAllOutput::fromStdClass($item), $response->objects());
    }

}
