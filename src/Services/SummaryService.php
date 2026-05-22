<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\Summary\ExportPersonAllInput;
use Misakstvanu\LaravelSkautis\Requests\Summary\ExportPersonCloneInput;
use Misakstvanu\LaravelSkautis\Requests\Summary\ExportPersonDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Summary\ExportPersonDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Summary\ExportPersonInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Summary\ExportPersonUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Summary\ExportPersonViewInput;
use Misakstvanu\LaravelSkautis\Requests\Summary\ExportUnitAllInput;
use Misakstvanu\LaravelSkautis\Requests\Summary\ExportUnitCloneInput;
use Misakstvanu\LaravelSkautis\Requests\Summary\ExportUnitDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Summary\ExportUnitDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Summary\ExportUnitInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Summary\ExportUnitUnitTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Summary\ExportUnitUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Summary\ExportUnitViewInput;
use Misakstvanu\LaravelSkautis\Responses\Summary\ExportPersonAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Summary\ExportPersonCloneOutput;
use Misakstvanu\LaravelSkautis\Responses\Summary\ExportPersonDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Summary\ExportPersonInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Summary\ExportPersonViewOutput;
use Misakstvanu\LaravelSkautis\Responses\Summary\ExportUnitAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Summary\ExportUnitCloneOutput;
use Misakstvanu\LaravelSkautis\Responses\Summary\ExportUnitDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Summary\ExportUnitInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Summary\ExportUnitUnitTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Summary\ExportUnitViewOutput;

/**
 * Exporty/přehledy
 */
final class SummaryService
{
    public const SERVICE_NAME = 'Summary';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam šablon exportu osob
     * @return ExportPersonAllOutput[]
     */
    public function ExportPersonAll(ExportPersonAllInput $input = new ExportPersonAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportPersonAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ExportPersonAllOutput => ExportPersonAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Kopie šablony exportu osob
     */
    public function ExportPersonClone(ExportPersonCloneInput $input = new ExportPersonCloneInput()): ExportPersonCloneOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportPersonClone', OperationRequest::from($input->toArray()));
        return ExportPersonCloneOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Smazat šablonu exportu osob
     */
    public function ExportPersonDelete(ExportPersonDeleteInput $input = new ExportPersonDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportPersonDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail šablony exportu osob
     */
    public function ExportPersonDetail(ExportPersonDetailInput $input = new ExportPersonDetailInput()): ExportPersonDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportPersonDetail', OperationRequest::from($input->toArray()));
        return ExportPersonDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit šablonu exportu osob
     */
    public function ExportPersonInsert(ExportPersonInsertInput $input = new ExportPersonInsertInput()): ExportPersonInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportPersonInsert', OperationRequest::from($input->toArray()));
        return ExportPersonInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit šablonu exportu osob
     */
    public function ExportPersonUpdate(ExportPersonUpdateInput $input = new ExportPersonUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportPersonUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Zobrazit export osob
     */
    public function ExportPersonView(ExportPersonViewInput $input = new ExportPersonViewInput()): ExportPersonViewOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportPersonView', OperationRequest::from($input->toArray()));
        return ExportPersonViewOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam šablon exportu jednotek
     * @return ExportUnitAllOutput[]
     */
    public function ExportUnitAll(ExportUnitAllInput $input = new ExportUnitAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportUnitAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ExportUnitAllOutput => ExportUnitAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Kopie šablonu exportu jednotek
     */
    public function ExportUnitClone(ExportUnitCloneInput $input = new ExportUnitCloneInput()): ExportUnitCloneOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportUnitClone', OperationRequest::from($input->toArray()));
        return ExportUnitCloneOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Smazat šablonu exportu jednotek
     */
    public function ExportUnitDelete(ExportUnitDeleteInput $input = new ExportUnitDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportUnitDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail šablony exportu jednotek
     */
    public function ExportUnitDetail(ExportUnitDetailInput $input = new ExportUnitDetailInput()): ExportUnitDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportUnitDetail', OperationRequest::from($input->toArray()));
        return ExportUnitDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit šablonu exportu jednotek
     */
    public function ExportUnitInsert(ExportUnitInsertInput $input = new ExportUnitInsertInput()): ExportUnitInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportUnitInsert', OperationRequest::from($input->toArray()));
        return ExportUnitInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam typů jednotky pro export osob
     * @return ExportUnitUnitTypeAllOutput[]
     */
    public function ExportUnitUnitTypeAll(ExportUnitUnitTypeAllInput $input = new ExportUnitUnitTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportUnitUnitTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ExportUnitUnitTypeAllOutput => ExportUnitUnitTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Upravit šablonu exportu jednotek
     */
    public function ExportUnitUpdate(ExportUnitUpdateInput $input = new ExportUnitUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportUnitUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Zobrazit export jednotek
     */
    public function ExportUnitView(ExportUnitViewInput $input = new ExportUnitViewInput()): ExportUnitViewOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportUnitView', OperationRequest::from($input->toArray()));
        return ExportUnitViewOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

}
