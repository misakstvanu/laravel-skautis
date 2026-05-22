<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainAdminAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainAdminAllPersonInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainAdminDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainAdminInsertInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainAllPersonInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainAllUnitCreateInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainAllUnitInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainDetailEmailsInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainDetailInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainInsertInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainStateAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainUnitAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainUnitDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainUnitInsertInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainUpdateActivateInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainUpdateAliasInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainUpdateApproveInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainUpdateDNSInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainUpdateEnableGAInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainUpdateSendInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\DomainUpdateUsingInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountAllInactiveInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountAllSyncInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountAllUnitInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountDeleteMainInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountDetailExistsInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountDetailInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountDetailMainInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountDetailOrganizationUnitInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountDetailStorageInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountInsertInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountUpdateChangePasswordInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountUpdateOrganizationUnitInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountUpdatePasswordInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleAccountUpdateSyncInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupAllInactiveInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupAllSyncInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupDeleteMemberInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupDetailInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupInsertInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupSyncRequestAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupSyncRequestInsertInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupSyncRequestUpdateErrorInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupSyncRequestUpdateFinishInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupSyncSettingsAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupSyncSettingsDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupSyncSettingsDetailInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupSyncSettingsInsertInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupSyncSettingsUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupUpdateMemberEmailInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupUpdateMemberPersonInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupUpdateMemberRoleInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupUpdateSyncInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleGroupUpdateSyncTypeInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\GoogleUnitAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SharedDriveAllEventsInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SharedDriveAllSyncInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SharedDriveAllUnitInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SharedDriveAllUnitUsageInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SharedDriveDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SharedDriveDetailInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SharedDriveInsertInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SharedDriveTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SharedDriveUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SharedDriveUpdateSyncErrorInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SharedDriveUpdateSyncInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncContactTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncLevelTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsEmailAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsEmailDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsEmailInsertEmailInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsEmailInsertPersonInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsFunctionTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsFunctionTypeDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsFunctionTypeInsertInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsMembershipCategoryAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsMembershipCategoryDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsMembershipCategoryInsertInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsSyncContactTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsSyncContactTypeDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsSyncContactTypeInsertInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsUnitAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsUnitDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncSettingsUnitInsertInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\SyncTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\UnitDefaultOrganizationUnitDetailUnitInput;
use Misakstvanu\LaravelSkautis\Requests\GoogleApps\WorkspaceUnitAllUnitInput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\DomainAdminAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\DomainAdminAllPersonOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\DomainAdminInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\DomainAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\DomainAllPersonOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\DomainAllUnitCreateOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\DomainAllUnitOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\DomainDetailEmailsOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\DomainDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\DomainInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\DomainStateAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\DomainUnitAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\DomainUnitInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleAccountAllInactiveOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleAccountAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleAccountAllSyncOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleAccountAllUnitOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleAccountDetailExistsOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleAccountDetailMainOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleAccountDetailOrganizationUnitOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleAccountDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleAccountDetailStorageOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleAccountInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleGroupAllInactiveOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleGroupAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleGroupAllSyncOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleGroupDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleGroupInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleGroupSyncRequestAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleGroupSyncRequestInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleGroupSyncSettingsAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleGroupSyncSettingsDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleGroupSyncSettingsInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleGroupUpdateMemberEmailOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleGroupUpdateMemberPersonOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\GoogleUnitAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SharedDriveAllEventsOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SharedDriveAllSyncOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SharedDriveAllUnitOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SharedDriveAllUnitUsageOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SharedDriveDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SharedDriveInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SharedDriveTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SyncContactTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SyncLevelTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SyncSettingsEmailAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SyncSettingsEmailInsertEmailOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SyncSettingsEmailInsertPersonOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SyncSettingsFunctionTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SyncSettingsFunctionTypeInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SyncSettingsMembershipCategoryAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SyncSettingsMembershipCategoryInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SyncSettingsSyncContactTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SyncSettingsSyncContactTypeInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SyncSettingsUnitAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SyncSettingsUnitInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\SyncTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\UnitDefaultOrganizationUnitDetailUnitOutput;
use Misakstvanu\LaravelSkautis\Responses\GoogleApps\WorkspaceUnitAllUnitOutput;

/**
 * Webová služba pro práci s GoogleApps (zápis dat do databáze, komunikace s GoogleApps)
 */
final class GoogleAppsService
{
    public const SERVICE_NAME = 'GoogleApps';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam správců domény
     * @return DomainAdminAllOutput[]
     */
    public function DomainAdminAll(DomainAdminAllInput $input = new DomainAdminAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainAdminAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): DomainAdminAllOutput => DomainAdminAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam správců domény
     * @return DomainAdminAllPersonOutput[]
     */
    public function DomainAdminAllPerson(DomainAdminAllPersonInput $input = new DomainAdminAllPersonInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainAdminAllPerson', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): DomainAdminAllPersonOutput => DomainAdminAllPersonOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat správce domény
     */
    public function DomainAdminDelete(DomainAdminDeleteInput $input = new DomainAdminDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainAdminDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit správce domény
     */
    public function DomainAdminInsert(DomainAdminInsertInput $input = new DomainAdminInsertInput()): DomainAdminInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainAdminInsert', OperationRequest::from($input->toArray()));
        return DomainAdminInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam domén
     * @return DomainAllOutput[]
     */
    public function DomainAll(DomainAllInput $input = new DomainAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): DomainAllOutput => DomainAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam domén dostupné pro osobu
     * @return DomainAllPersonOutput[]
     */
    public function DomainAllPerson(DomainAllPersonInput $input = new DomainAllPersonInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainAllPerson', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): DomainAllPersonOutput => DomainAllPersonOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam domén jednotky
     * @return DomainAllUnitOutput[]
     */
    public function DomainAllUnit(DomainAllUnitInput $input = new DomainAllUnitInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainAllUnit', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): DomainAllUnitOutput => DomainAllUnitOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam domén na kterých může uživatel založit účet pro danou jednotku
     * @return DomainAllUnitCreateOutput[]
     */
    public function DomainAllUnitCreate(DomainAllUnitCreateInput $input = new DomainAllUnitCreateInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainAllUnitCreate', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): DomainAllUnitCreateOutput => DomainAllUnitCreateOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat doménu pouze ze skautISu
     */
    public function DomainDelete(DomainDeleteInput $input = new DomainDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail domény
     */
    public function DomainDetail(DomainDetailInput $input = new DomainDetailInput()): DomainDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainDetail', OperationRequest::from($input->toArray()));
        return DomainDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst emaily založené pod doménou
     * @return DomainDetailEmailsOutput[]
     */
    public function DomainDetailEmails(DomainDetailEmailsInput $input = new DomainDetailEmailsInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainDetailEmails', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): DomainDetailEmailsOutput => DomainDetailEmailsOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Založit doménu
     */
    public function DomainInsert(DomainInsertInput $input = new DomainInsertInput()): DomainInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainInsert', OperationRequest::from($input->toArray()));
        return DomainInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam stavů domény
     * @return DomainStateAllOutput[]
     */
    public function DomainStateAll(DomainStateAllInput $input = new DomainStateAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainStateAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): DomainStateAllOutput => DomainStateAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam jednotek přiřezené doméně
     * @return DomainUnitAllOutput[]
     */
    public function DomainUnitAll(DomainUnitAllInput $input = new DomainUnitAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainUnitAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): DomainUnitAllOutput => DomainUnitAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat jednotku přiřazenou doméně
     */
    public function DomainUnitDelete(DomainUnitDeleteInput $input = new DomainUnitDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainUnitDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit jednotku přiřazenou doméně
     */
    public function DomainUnitInsert(DomainUnitInsertInput $input = new DomainUnitInsertInput()): DomainUnitInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainUnitInsert', OperationRequest::from($input->toArray()));
        return DomainUnitInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit doménu
     */
    public function DomainUpdate(DomainUpdateInput $input = new DomainUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Odeslat požadavek na doménu na ústředí
     */
    public function DomainUpdateActivate(DomainUpdateActivateInput $input = new DomainUpdateActivateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainUpdateActivate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit alias domény
     */
    public function DomainUpdateAlias(DomainUpdateAliasInput $input = new DomainUpdateAliasInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainUpdateAlias', OperationRequest::from($input->toArray()));
    }

    /**
     * Odeslat požadavek na doménu na ústředí
     */
    public function DomainUpdateApprove(DomainUpdateApproveInput $input = new DomainUpdateApproveInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainUpdateApprove', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit DNS záznam domény
     */
    public function DomainUpdateDNS(DomainUpdateDNSInput $input = new DomainUpdateDNSInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainUpdateDNS', OperationRequest::from($input->toArray()));
    }

    /**
     * Zapnout GA na doméně
     */
    public function DomainUpdateEnableGA(DomainUpdateEnableGAInput $input = new DomainUpdateEnableGAInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainUpdateEnableGA', OperationRequest::from($input->toArray()));
    }

    /**
     * Odeslat požadavek na doménu na ústředí
     */
    public function DomainUpdateSend(DomainUpdateSendInput $input = new DomainUpdateSendInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainUpdateSend', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit kdo na doméně může zakládat účty
     */
    public function DomainUpdateUsing(DomainUpdateUsingInput $input = new DomainUpdateUsingInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DomainUpdateUsing', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam kontaktů osoby
     * @return GoogleAccountAllOutput[]
     */
    public function GoogleAccountAll(GoogleAccountAllInput $input = new GoogleAccountAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GoogleAccountAllOutput => GoogleAccountAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam GA účtů ke smazání
     * @return GoogleAccountAllInactiveOutput[]
     */
    public function GoogleAccountAllInactive(GoogleAccountAllInactiveInput $input = new GoogleAccountAllInactiveInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountAllInactive', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GoogleAccountAllInactiveOutput => GoogleAccountAllInactiveOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam GA účtů k synchronizaci
     * @return GoogleAccountAllSyncOutput[]
     */
    public function GoogleAccountAllSync(GoogleAccountAllSyncInput $input = new GoogleAccountAllSyncInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountAllSync', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GoogleAccountAllSyncOutput => GoogleAccountAllSyncOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam kontaktů osoby
     * @return GoogleAccountAllUnitOutput[]
     */
    public function GoogleAccountAllUnit(GoogleAccountAllUnitInput $input = new GoogleAccountAllUnitInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountAllUnit', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GoogleAccountAllUnitOutput => GoogleAccountAllUnitOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat účet v GA
     */
    public function GoogleAccountDelete(GoogleAccountDeleteInput $input = new GoogleAccountDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Smazat hlavni účet v GA
     */
    public function GoogleAccountDeleteMain(GoogleAccountDeleteMainInput $input = new GoogleAccountDeleteMainInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountDeleteMain', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail hlavního účtu jednotky v GA
     */
    public function GoogleAccountDetail(GoogleAccountDetailInput $input = new GoogleAccountDetailInput()): GoogleAccountDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountDetail', OperationRequest::from($input->toArray()));
        return GoogleAccountDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam kontaktů osoby
     */
    public function GoogleAccountDetailExists(GoogleAccountDetailExistsInput $input = new GoogleAccountDetailExistsInput()): GoogleAccountDetailExistsOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountDetailExists', OperationRequest::from($input->toArray()));
        return GoogleAccountDetailExistsOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst detail hlavního účtu osoby v GA
     */
    public function GoogleAccountDetailMain(GoogleAccountDetailMainInput $input = new GoogleAccountDetailMainInput()): GoogleAccountDetailMainOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountDetailMain', OperationRequest::from($input->toArray()));
        return GoogleAccountDetailMainOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst detail hlavního účtu jednotky v GA
     */
    public function GoogleAccountDetailOrganizationUnit(GoogleAccountDetailOrganizationUnitInput $input = new GoogleAccountDetailOrganizationUnitInput()): GoogleAccountDetailOrganizationUnitOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountDetailOrganizationUnit', OperationRequest::from($input->toArray()));
        return GoogleAccountDetailOrganizationUnitOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst detail užití úložiště daného účtu v GA
     */
    public function GoogleAccountDetailStorage(GoogleAccountDetailStorageInput $input = new GoogleAccountDetailStorageInput()): GoogleAccountDetailStorageOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountDetailStorage', OperationRequest::from($input->toArray()));
        return GoogleAccountDetailStorageOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit účet v GA osobě
     */
    public function GoogleAccountInsert(GoogleAccountInsertInput $input = new GoogleAccountInsertInput()): GoogleAccountInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountInsert', OperationRequest::from($input->toArray()));
        return GoogleAccountInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Vynutit změnu hesla při dalším přihlášení do GA
     */
    public function GoogleAccountUpdateChangePassword(GoogleAccountUpdateChangePasswordInput $input = new GoogleAccountUpdateChangePasswordInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountUpdateChangePassword', OperationRequest::from($input->toArray()));
    }

    /**
     * Nastavit organizační jednotku pro google účet
     */
    public function GoogleAccountUpdateOrganizationUnit(GoogleAccountUpdateOrganizationUnitInput $input = new GoogleAccountUpdateOrganizationUnitInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountUpdateOrganizationUnit', OperationRequest::from($input->toArray()));
    }

    /**
     * Změna hesla
     */
    public function GoogleAccountUpdatePassword(GoogleAccountUpdatePasswordInput $input = new GoogleAccountUpdatePasswordInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountUpdatePassword', OperationRequest::from($input->toArray()));
    }

    /**
     * Synchronizovat google účet
     */
    public function GoogleAccountUpdateSync(GoogleAccountUpdateSyncInput $input = new GoogleAccountUpdateSyncInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleAccountUpdateSync', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam google skupin
     * @return GoogleGroupAllOutput[]
     */
    public function GoogleGroupAll(GoogleGroupAllInput $input = new GoogleGroupAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GoogleGroupAllOutput => GoogleGroupAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam GA skupin ke smazání
     * @return GoogleGroupAllInactiveOutput[]
     */
    public function GoogleGroupAllInactive(GoogleGroupAllInactiveInput $input = new GoogleGroupAllInactiveInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupAllInactive', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GoogleGroupAllInactiveOutput => GoogleGroupAllInactiveOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam google skupin pro synchronizaci
     * @return GoogleGroupAllSyncOutput[]
     */
    public function GoogleGroupAllSync(GoogleGroupAllSyncInput $input = new GoogleGroupAllSyncInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupAllSync', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GoogleGroupAllSyncOutput => GoogleGroupAllSyncOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat google skupinu
     */
    public function GoogleGroupDelete(GoogleGroupDeleteInput $input = new GoogleGroupDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Smazat uzivatele z google skupiny
     */
    public function GoogleGroupDeleteMember(GoogleGroupDeleteMemberInput $input = new GoogleGroupDeleteMemberInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupDeleteMember', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail google skupiny
     */
    public function GoogleGroupDetail(GoogleGroupDetailInput $input = new GoogleGroupDetailInput()): GoogleGroupDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupDetail', OperationRequest::from($input->toArray()));
        return GoogleGroupDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit google skupinu
     */
    public function GoogleGroupInsert(GoogleGroupInsertInput $input = new GoogleGroupInsertInput()): GoogleGroupInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupInsert', OperationRequest::from($input->toArray()));
        return GoogleGroupInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam požadavků na synchronizaci
     * @return GoogleGroupSyncRequestAllOutput[]
     */
    public function GoogleGroupSyncRequestAll(GoogleGroupSyncRequestAllInput $input = new GoogleGroupSyncRequestAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupSyncRequestAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GoogleGroupSyncRequestAllOutput => GoogleGroupSyncRequestAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Založit požadavek na synchronizaci
     */
    public function GoogleGroupSyncRequestInsert(GoogleGroupSyncRequestInsertInput $input = new GoogleGroupSyncRequestInsertInput()): GoogleGroupSyncRequestInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupSyncRequestInsert', OperationRequest::from($input->toArray()));
        return GoogleGroupSyncRequestInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Dokončit požadavek na synchronizaci
     */
    public function GoogleGroupSyncRequestUpdateError(GoogleGroupSyncRequestUpdateErrorInput $input = new GoogleGroupSyncRequestUpdateErrorInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupSyncRequestUpdateError', OperationRequest::from($input->toArray()));
    }

    /**
     * Dokončit požadavek na synchronizaci
     */
    public function GoogleGroupSyncRequestUpdateFinish(GoogleGroupSyncRequestUpdateFinishInput $input = new GoogleGroupSyncRequestUpdateFinishInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupSyncRequestUpdateFinish', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam nastavení synchronizace Google skupiny
     * @return GoogleGroupSyncSettingsAllOutput[]
     */
    public function GoogleGroupSyncSettingsAll(GoogleGroupSyncSettingsAllInput $input = new GoogleGroupSyncSettingsAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupSyncSettingsAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GoogleGroupSyncSettingsAllOutput => GoogleGroupSyncSettingsAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat nastavení synchronizace Google skupiny
     */
    public function GoogleGroupSyncSettingsDelete(GoogleGroupSyncSettingsDeleteInput $input = new GoogleGroupSyncSettingsDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupSyncSettingsDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail nastavení synchronizace Google skupiny
     */
    public function GoogleGroupSyncSettingsDetail(GoogleGroupSyncSettingsDetailInput $input = new GoogleGroupSyncSettingsDetailInput()): GoogleGroupSyncSettingsDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupSyncSettingsDetail', OperationRequest::from($input->toArray()));
        return GoogleGroupSyncSettingsDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit nastavení synchronizace Google skupiny
     */
    public function GoogleGroupSyncSettingsInsert(GoogleGroupSyncSettingsInsertInput $input = new GoogleGroupSyncSettingsInsertInput()): GoogleGroupSyncSettingsInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupSyncSettingsInsert', OperationRequest::from($input->toArray()));
        return GoogleGroupSyncSettingsInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit nastavení synchronizace Google skupiny
     */
    public function GoogleGroupSyncSettingsUpdate(GoogleGroupSyncSettingsUpdateInput $input = new GoogleGroupSyncSettingsUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupSyncSettingsUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit google skupinu
     */
    public function GoogleGroupUpdate(GoogleGroupUpdateInput $input = new GoogleGroupUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Uložit členy skupiny dle emailu
     */
    public function GoogleGroupUpdateMemberEmail(GoogleGroupUpdateMemberEmailInput $input = new GoogleGroupUpdateMemberEmailInput()): GoogleGroupUpdateMemberEmailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupUpdateMemberEmail', OperationRequest::from($input->toArray()));
        return GoogleGroupUpdateMemberEmailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Uložit osobu jako člena skupiny
     */
    public function GoogleGroupUpdateMemberPerson(GoogleGroupUpdateMemberPersonInput $input = new GoogleGroupUpdateMemberPersonInput()): GoogleGroupUpdateMemberPersonOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupUpdateMemberPerson', OperationRequest::from($input->toArray()));
        return GoogleGroupUpdateMemberPersonOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit roli uzivatele
     */
    public function GoogleGroupUpdateMemberRole(GoogleGroupUpdateMemberRoleInput $input = new GoogleGroupUpdateMemberRoleInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupUpdateMemberRole', OperationRequest::from($input->toArray()));
    }

    /**
     * Synchronizovat google skupinu
     */
    public function GoogleGroupUpdateSync(GoogleGroupUpdateSyncInput $input = new GoogleGroupUpdateSyncInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupUpdateSync', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit typ synchronizace google skupiny
     */
    public function GoogleGroupUpdateSyncType(GoogleGroupUpdateSyncTypeInput $input = new GoogleGroupUpdateSyncTypeInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleGroupUpdateSyncType', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam organizačních jednotek v GA
     * @return GoogleUnitAllOutput[]
     */
    public function GoogleUnitAll(GoogleUnitAllInput $input = new GoogleUnitAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'GoogleUnitAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): GoogleUnitAllOutput => GoogleUnitAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam názvů akcí pro sdílené disky jednotky
     * @return SharedDriveAllEventsOutput[]
     */
    public function SharedDriveAllEvents(SharedDriveAllEventsInput $input = new SharedDriveAllEventsInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SharedDriveAllEvents', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SharedDriveAllEventsOutput => SharedDriveAllEventsOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam sdílených disků k synchronizaci
     * @return SharedDriveAllSyncOutput[]
     */
    public function SharedDriveAllSync(SharedDriveAllSyncInput $input = new SharedDriveAllSyncInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SharedDriveAllSync', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SharedDriveAllSyncOutput => SharedDriveAllSyncOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam sdílených disků jednotky
     * @return SharedDriveAllUnitOutput[]
     */
    public function SharedDriveAllUnit(SharedDriveAllUnitInput $input = new SharedDriveAllUnitInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SharedDriveAllUnit', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SharedDriveAllUnitOutput => SharedDriveAllUnitOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam využití sdílených disků jednotky
     * @return SharedDriveAllUnitUsageOutput[]
     */
    public function SharedDriveAllUnitUsage(SharedDriveAllUnitUsageInput $input = new SharedDriveAllUnitUsageInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SharedDriveAllUnitUsage', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SharedDriveAllUnitUsageOutput => SharedDriveAllUnitUsageOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat sdílený disk
     */
    public function SharedDriveDelete(SharedDriveDeleteInput $input = new SharedDriveDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SharedDriveDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail sdíleného disku
     */
    public function SharedDriveDetail(SharedDriveDetailInput $input = new SharedDriveDetailInput()): SharedDriveDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SharedDriveDetail', OperationRequest::from($input->toArray()));
        return SharedDriveDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Shared Drive Insert.
     */
    public function SharedDriveInsert(SharedDriveInsertInput $input = new SharedDriveInsertInput()): SharedDriveInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SharedDriveInsert', OperationRequest::from($input->toArray()));
        return SharedDriveInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam typů sdíleného disku
     * @return SharedDriveTypeAllOutput[]
     */
    public function SharedDriveTypeAll(SharedDriveTypeAllInput $input = new SharedDriveTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SharedDriveTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SharedDriveTypeAllOutput => SharedDriveTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Upravit sdílený disk
     */
    public function SharedDriveUpdate(SharedDriveUpdateInput $input = new SharedDriveUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SharedDriveUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Synchronizovat sdílený disk
     */
    public function SharedDriveUpdateSync(SharedDriveUpdateSyncInput $input = new SharedDriveUpdateSyncInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SharedDriveUpdateSync', OperationRequest::from($input->toArray()));
    }

    /**
     * Zapsat chybnou synchronizaci sdíleného disku
     */
    public function SharedDriveUpdateSyncError(SharedDriveUpdateSyncErrorInput $input = new SharedDriveUpdateSyncErrorInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SharedDriveUpdateSyncError', OperationRequest::from($input->toArray()));
    }

    /**
     * Typ kontaktu pro synchronizaci
     * @return SyncContactTypeAllOutput[]
     */
    public function SyncContactTypeAll(SyncContactTypeAllInput $input = new SyncContactTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncContactTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SyncContactTypeAllOutput => SyncContactTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Sync Level Type All.
     * @return SyncLevelTypeAllOutput[]
     */
    public function SyncLevelTypeAll(SyncLevelTypeAllInput $input = new SyncLevelTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncLevelTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SyncLevelTypeAllOutput => SyncLevelTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam fixně nastavených emailových adres v Google skupině
     * @return SyncSettingsEmailAllOutput[]
     */
    public function SyncSettingsEmailAll(SyncSettingsEmailAllInput $input = new SyncSettingsEmailAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsEmailAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SyncSettingsEmailAllOutput => SyncSettingsEmailAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat fixně nastavenou emailovou adresu v Google skupině
     */
    public function SyncSettingsEmailDelete(SyncSettingsEmailDeleteInput $input = new SyncSettingsEmailDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsEmailDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit fixně nastavenou emailovou adresu v Google skupině dle emailu
     */
    public function SyncSettingsEmailInsertEmail(SyncSettingsEmailInsertEmailInput $input = new SyncSettingsEmailInsertEmailInput()): SyncSettingsEmailInsertEmailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsEmailInsertEmail', OperationRequest::from($input->toArray()));
        return SyncSettingsEmailInsertEmailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit fixně nastavenou emailovou adresu v Google skupině dle osoby
     */
    public function SyncSettingsEmailInsertPerson(SyncSettingsEmailInsertPersonInput $input = new SyncSettingsEmailInsertPersonInput()): SyncSettingsEmailInsertPersonOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsEmailInsertPerson', OperationRequest::from($input->toArray()));
        return SyncSettingsEmailInsertPersonOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam typů funkce v nastavení Google skupiny
     * @return SyncSettingsFunctionTypeAllOutput[]
     */
    public function SyncSettingsFunctionTypeAll(SyncSettingsFunctionTypeAllInput $input = new SyncSettingsFunctionTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsFunctionTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SyncSettingsFunctionTypeAllOutput => SyncSettingsFunctionTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat typ funkce v nastavení Google skupiny
     */
    public function SyncSettingsFunctionTypeDelete(SyncSettingsFunctionTypeDeleteInput $input = new SyncSettingsFunctionTypeDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsFunctionTypeDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit typ funkce v nastavení Google skupiny
     */
    public function SyncSettingsFunctionTypeInsert(SyncSettingsFunctionTypeInsertInput $input = new SyncSettingsFunctionTypeInsertInput()): SyncSettingsFunctionTypeInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsFunctionTypeInsert', OperationRequest::from($input->toArray()));
        return SyncSettingsFunctionTypeInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam kategorií členství v nastavení synchronizace Google skupiny
     * @return SyncSettingsMembershipCategoryAllOutput[]
     */
    public function SyncSettingsMembershipCategoryAll(SyncSettingsMembershipCategoryAllInput $input = new SyncSettingsMembershipCategoryAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsMembershipCategoryAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SyncSettingsMembershipCategoryAllOutput => SyncSettingsMembershipCategoryAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat kategorii členství v nastavení synchronizace Google skupiny
     */
    public function SyncSettingsMembershipCategoryDelete(SyncSettingsMembershipCategoryDeleteInput $input = new SyncSettingsMembershipCategoryDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsMembershipCategoryDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit kategorii členství v nastavení synchronizace Google skupiny
     */
    public function SyncSettingsMembershipCategoryInsert(SyncSettingsMembershipCategoryInsertInput $input = new SyncSettingsMembershipCategoryInsertInput()): SyncSettingsMembershipCategoryInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsMembershipCategoryInsert', OperationRequest::from($input->toArray()));
        return SyncSettingsMembershipCategoryInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam typů kontaktu v nastavení synchronizace Google skupiny
     * @return SyncSettingsSyncContactTypeAllOutput[]
     */
    public function SyncSettingsSyncContactTypeAll(SyncSettingsSyncContactTypeAllInput $input = new SyncSettingsSyncContactTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsSyncContactTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SyncSettingsSyncContactTypeAllOutput => SyncSettingsSyncContactTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat typ kontaktu nastavení synchronizace Google skupiny
     */
    public function SyncSettingsSyncContactTypeDelete(SyncSettingsSyncContactTypeDeleteInput $input = new SyncSettingsSyncContactTypeDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsSyncContactTypeDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit typ kontaktu nastavení synchronizace Google skupiny
     */
    public function SyncSettingsSyncContactTypeInsert(SyncSettingsSyncContactTypeInsertInput $input = new SyncSettingsSyncContactTypeInsertInput()): SyncSettingsSyncContactTypeInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsSyncContactTypeInsert', OperationRequest::from($input->toArray()));
        return SyncSettingsSyncContactTypeInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam jednotek v nastavení Google skupiny
     * @return SyncSettingsUnitAllOutput[]
     */
    public function SyncSettingsUnitAll(SyncSettingsUnitAllInput $input = new SyncSettingsUnitAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsUnitAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SyncSettingsUnitAllOutput => SyncSettingsUnitAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat jednotku v nastavení Google skupiny
     */
    public function SyncSettingsUnitDelete(SyncSettingsUnitDeleteInput $input = new SyncSettingsUnitDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsUnitDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit jednotku v nastavení Google skupiny
     */
    public function SyncSettingsUnitInsert(SyncSettingsUnitInsertInput $input = new SyncSettingsUnitInsertInput()): SyncSettingsUnitInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncSettingsUnitInsert', OperationRequest::from($input->toArray()));
        return SyncSettingsUnitInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Sync Type All.
     * @return SyncTypeAllOutput[]
     */
    public function SyncTypeAll(SyncTypeAllInput $input = new SyncTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'SyncTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): SyncTypeAllOutput => SyncTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail výchozí organizační jednotky Google pro jednotku
     */
    public function UnitDefaultOrganizationUnitDetailUnit(UnitDefaultOrganizationUnitDetailUnitInput $input = new UnitDefaultOrganizationUnitDetailUnitInput()): UnitDefaultOrganizationUnitDetailUnitOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'UnitDefaultOrganizationUnitDetailUnit', OperationRequest::from($input->toArray()));
        return UnitDefaultOrganizationUnitDetailUnitOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam Google workspace předplatných jednotky
     * @return WorkspaceUnitAllUnitOutput[]
     */
    public function WorkspaceUnitAllUnit(WorkspaceUnitAllUnitInput $input = new WorkspaceUnitAllUnitInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WorkspaceUnitAllUnit', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WorkspaceUnitAllUnitOutput => WorkspaceUnitAllUnitOutput::fromStdClass($item), $response->objects());
    }

}
