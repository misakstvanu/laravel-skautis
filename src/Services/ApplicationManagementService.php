<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\ApplicationOperationAllInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\ApplicationOperationDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\ApplicationOperationInsertInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\PackageActionAllInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\PackageActionDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\PackageActionInsertInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\PackageAllInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\PackageApplicationAllInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\PackageApplicationDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\PackageApplicationInsertInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\PackageDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\PackageDetailInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\PackageInsertInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\PackageOperationAllInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\PackageOperationDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\PackageOperationInsertInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\PackageUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\PackageUpdateSyncPermissionInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\RemoteApplicationAllInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\RemoteApplicationDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\RemoteApplicationDetailInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\RemoteApplicationInsertInput;
use Misakstvanu\LaravelSkautis\Requests\ApplicationManagement\RemoteApplicationUpdateInput;
use Misakstvanu\LaravelSkautis\Responses\ApplicationManagement\ApplicationOperationAllOutput;
use Misakstvanu\LaravelSkautis\Responses\ApplicationManagement\ApplicationOperationInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\ApplicationManagement\PackageActionAllOutput;
use Misakstvanu\LaravelSkautis\Responses\ApplicationManagement\PackageActionInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\ApplicationManagement\PackageAllOutput;
use Misakstvanu\LaravelSkautis\Responses\ApplicationManagement\PackageApplicationAllOutput;
use Misakstvanu\LaravelSkautis\Responses\ApplicationManagement\PackageApplicationInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\ApplicationManagement\PackageDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\ApplicationManagement\PackageInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\ApplicationManagement\PackageOperationAllOutput;
use Misakstvanu\LaravelSkautis\Responses\ApplicationManagement\PackageOperationInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\ApplicationManagement\RemoteApplicationAllOutput;
use Misakstvanu\LaravelSkautis\Responses\ApplicationManagement\RemoteApplicationDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\ApplicationManagement\RemoteApplicationInsertOutput;

/**
 * Správa externích aplikací přistupujících ke skautISu
 */
final class ApplicationManagementService
{
    public const SERVICE_NAME = 'ApplicationManagement';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam oprávnění aplikace
     * @return ApplicationOperationAllOutput[]
     */
    public function ApplicationOperationAll(ApplicationOperationAllInput $input = new ApplicationOperationAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ApplicationOperationAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ApplicationOperationAllOutput => ApplicationOperationAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat oprávnění aplikace
     */
    public function ApplicationOperationDelete(ApplicationOperationDeleteInput $input = new ApplicationOperationDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ApplicationOperationDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit oprávnění aplikace
     */
    public function ApplicationOperationInsert(ApplicationOperationInsertInput $input = new ApplicationOperationInsertInput()): ApplicationOperationInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ApplicationOperationInsert', OperationRequest::from($input->toArray()));
        return ApplicationOperationInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam akcí balíčku práv
     * @return PackageActionAllOutput[]
     */
    public function PackageActionAll(PackageActionAllInput $input = new PackageActionAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PackageActionAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): PackageActionAllOutput => PackageActionAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat akci balíčku práv
     */
    public function PackageActionDelete(PackageActionDeleteInput $input = new PackageActionDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PackageActionDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit akci balíčku práv
     */
    public function PackageActionInsert(PackageActionInsertInput $input = new PackageActionInsertInput()): PackageActionInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PackageActionInsert', OperationRequest::from($input->toArray()));
        return PackageActionInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam balíčků práv
     * @return PackageAllOutput[]
     */
    public function PackageAll(PackageAllInput $input = new PackageAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PackageAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): PackageAllOutput => PackageAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam balíčků v externí aplikace
     * @return PackageApplicationAllOutput[]
     */
    public function PackageApplicationAll(PackageApplicationAllInput $input = new PackageApplicationAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PackageApplicationAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): PackageApplicationAllOutput => PackageApplicationAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat balíček v externí aplikace
     */
    public function PackageApplicationDelete(PackageApplicationDeleteInput $input = new PackageApplicationDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PackageApplicationDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit balíček v externí aplikace
     */
    public function PackageApplicationInsert(PackageApplicationInsertInput $input = new PackageApplicationInsertInput()): PackageApplicationInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PackageApplicationInsert', OperationRequest::from($input->toArray()));
        return PackageApplicationInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Smazat balíček práv
     */
    public function PackageDelete(PackageDeleteInput $input = new PackageDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PackageDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail balíčku práv
     */
    public function PackageDetail(PackageDetailInput $input = new PackageDetailInput()): PackageDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PackageDetail', OperationRequest::from($input->toArray()));
        return PackageDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit balíček práv
     */
    public function PackageInsert(PackageInsertInput $input = new PackageInsertInput()): PackageInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PackageInsert', OperationRequest::from($input->toArray()));
        return PackageInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam operací balíčku práv
     * @return PackageOperationAllOutput[]
     */
    public function PackageOperationAll(PackageOperationAllInput $input = new PackageOperationAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PackageOperationAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): PackageOperationAllOutput => PackageOperationAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat operaci balíčku práv
     */
    public function PackageOperationDelete(PackageOperationDeleteInput $input = new PackageOperationDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PackageOperationDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit operaci balíčku práv
     */
    public function PackageOperationInsert(PackageOperationInsertInput $input = new PackageOperationInsertInput()): PackageOperationInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PackageOperationInsert', OperationRequest::from($input->toArray()));
        return PackageOperationInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit balíček práv
     */
    public function PackageUpdate(PackageUpdateInput $input = new PackageUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PackageUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Aktualizovat aplikace
     */
    public function PackageUpdateSyncPermission(PackageUpdateSyncPermissionInput $input = new PackageUpdateSyncPermissionInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PackageUpdateSyncPermission', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam externích aplikací
     */
    public function RemoteApplicationAll(RemoteApplicationAllInput $input = new RemoteApplicationAllInput()): RemoteApplicationAllOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RemoteApplicationAll', OperationRequest::from($input->toArray()));
        return RemoteApplicationAllOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načtení informací o externí aplikaci
     */
    public function RemoteApplicationDelete(RemoteApplicationDeleteInput $input = new RemoteApplicationDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RemoteApplicationDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načtení informací o externí aplikaci
     */
    public function RemoteApplicationDetail(RemoteApplicationDetailInput $input = new RemoteApplicationDetailInput()): RemoteApplicationDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RemoteApplicationDetail', OperationRequest::from($input->toArray()));
        return RemoteApplicationDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založení nové externí aplikace
     */
    public function RemoteApplicationInsert(RemoteApplicationInsertInput $input = new RemoteApplicationInsertInput()): RemoteApplicationInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RemoteApplicationInsert', OperationRequest::from($input->toArray()));
        return RemoteApplicationInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Editace externí aplikace
     */
    public function RemoteApplicationUpdate(RemoteApplicationUpdateInput $input = new RemoteApplicationUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RemoteApplicationUpdate', OperationRequest::from($input->toArray()));
    }

}
