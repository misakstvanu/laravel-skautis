<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportAllInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportAllReadyInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportFunctionEndAllInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportFunctionEndInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportFunctionProlongationAllInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportFunctionProlongationInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportGoogleInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportGooogleAllInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportJubilantInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportKamChoditInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportLogAllInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportLogDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportLogUpdateFileNameInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportLogUpdateResultInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportSendInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportSeznamAllInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportSeznamChangesAllInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportSeznamChangesInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportSeznamInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportToAllInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportToDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportToInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportToUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Exports\ExportUpdateInput;
use Misakstvanu\LaravelSkautis\Responses\Exports\ExportAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Exports\ExportAllReadyOutput;
use Misakstvanu\LaravelSkautis\Responses\Exports\ExportDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Exports\ExportFunctionEndAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Exports\ExportFunctionProlongationAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Exports\ExportGooogleAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Exports\ExportInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Exports\ExportLogAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Exports\ExportLogDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Exports\ExportSeznamAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Exports\ExportSeznamChangesAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Exports\ExportToAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Exports\ExportToInsertOutput;

/**
 * Webová služba pro export dat do jiných systémů
 */
final class ExportsService
{
    public const SERVICE_NAME = 'Exports';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam exportů dat
     * @return ExportAllOutput[]
     */
    public function ExportAll(ExportAllInput $input = new ExportAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ExportAllOutput => ExportAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam exportů dat
     * @return ExportAllReadyOutput[]
     */
    public function ExportAllReady(ExportAllReadyInput $input = new ExportAllReadyInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportAllReady', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ExportAllReadyOutput => ExportAllReadyOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat export dat
     */
    public function ExportDelete(ExportDeleteInput $input = new ExportDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail exportu dat
     */
    public function ExportDetail(ExportDetailInput $input = new ExportDetailInput()): ExportDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportDetail', OperationRequest::from($input->toArray()));
        return ExportDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * děkovných dopisů
     */
    public function ExportFunctionEnd(ExportFunctionEndInput $input = new ExportFunctionEndInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportFunctionEnd', OperationRequest::from($input->toArray()));
    }

    /**
     * Uložit tiskovou sestavu s exportovanými daty pro děkovné dopisy
     */
    public function ExportFunctionEndAll(ExportFunctionEndAllInput $input = new ExportFunctionEndAllInput()): ExportFunctionEndAllOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportFunctionEndAll', OperationRequest::from($input->toArray()));
        return ExportFunctionEndAllOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * děkovných dopisů
     */
    public function ExportFunctionProlongation(ExportFunctionProlongationInput $input = new ExportFunctionProlongationInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportFunctionProlongation', OperationRequest::from($input->toArray()));
    }

    /**
     * Uložit tiskovou sestavu s exportovanými daty pro děkovné dopisy
     * @return ExportFunctionProlongationAllOutput[]
     */
    public function ExportFunctionProlongationAll(ExportFunctionProlongationAllInput $input = new ExportFunctionProlongationAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportFunctionProlongationAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ExportFunctionProlongationAllOutput => ExportFunctionProlongationAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Uložit exportovaná data pro Google
     */
    public function ExportGoogle(ExportGoogleInput $input = new ExportGoogleInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportGoogle', OperationRequest::from($input->toArray()));
    }

    /**
     * Uložit tiskovou sestavu s exportovanými daty pro Google - změny
     */
    public function ExportGooogleAll(ExportGooogleAllInput $input = new ExportGooogleAllInput()): ExportGooogleAllOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportGooogleAll', OperationRequest::from($input->toArray()));
        return ExportGooogleAllOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit export dat
     */
    public function ExportInsert(ExportInsertInput $input = new ExportInsertInput()): ExportInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportInsert', OperationRequest::from($input->toArray()));
        return ExportInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * jubilantů
     */
    public function ExportJubilant(ExportJubilantInput $input = new ExportJubilantInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportJubilant', OperationRequest::from($input->toArray()));
    }

    /**
     * Uložit data pro export pro kamchodit.cz
     */
    public function ExportKamChodit(ExportKamChoditInput $input = new ExportKamChoditInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportKamChodit', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam spuštění exportu
     * @return ExportLogAllOutput[]
     */
    public function ExportLogAll(ExportLogAllInput $input = new ExportLogAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportLogAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ExportLogAllOutput => ExportLogAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načít detail spuštění exportu
     */
    public function ExportLogDetail(ExportLogDetailInput $input = new ExportLogDetailInput()): ExportLogDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportLogDetail', OperationRequest::from($input->toArray()));
        return ExportLogDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Zapsat jméno souboru exportu
     */
    public function ExportLogUpdateFileName(ExportLogUpdateFileNameInput $input = new ExportLogUpdateFileNameInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportLogUpdateFileName', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit export dat
     */
    public function ExportLogUpdateResult(ExportLogUpdateResultInput $input = new ExportLogUpdateResultInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportLogUpdateResult', OperationRequest::from($input->toArray()));
    }

    /**
     * Odeslat export
     */
    public function ExportSend(ExportSendInput $input = new ExportSendInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportSend', OperationRequest::from($input->toArray()));
    }

    /**
     * Uložit exportovaná data pro Seznam.cz
     */
    public function ExportSeznam(ExportSeznamInput $input = new ExportSeznamInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportSeznam', OperationRequest::from($input->toArray()));
    }

    /**
     * Uložit tiskovou sestavu s exportovanými daty pro Seznam.cz
     * @return ExportSeznamAllOutput[]
     */
    public function ExportSeznamAll(ExportSeznamAllInput $input = new ExportSeznamAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportSeznamAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ExportSeznamAllOutput => ExportSeznamAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Uložit exportovaná data pro Seznam.cz - změny
     */
    public function ExportSeznamChanges(ExportSeznamChangesInput $input = new ExportSeznamChangesInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportSeznamChanges', OperationRequest::from($input->toArray()));
    }

    /**
     * Uložit tiskovou sestavu s exportovanými daty pro Seznam.cz - změny
     * @return ExportSeznamChangesAllOutput[]
     */
    public function ExportSeznamChangesAll(ExportSeznamChangesAllInput $input = new ExportSeznamChangesAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportSeznamChangesAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ExportSeznamChangesAllOutput => ExportSeznamChangesAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam příjemců exportu
     * @return ExportToAllOutput[]
     */
    public function ExportToAll(ExportToAllInput $input = new ExportToAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportToAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ExportToAllOutput => ExportToAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat příjemce exportu
     */
    public function ExportToDelete(ExportToDeleteInput $input = new ExportToDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportToDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit příjemce exportu
     */
    public function ExportToInsert(ExportToInsertInput $input = new ExportToInsertInput()): ExportToInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportToInsert', OperationRequest::from($input->toArray()));
        return ExportToInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit příjemce exportu
     */
    public function ExportToUpdate(ExportToUpdateInput $input = new ExportToUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportToUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit export dat
     */
    public function ExportUpdate(ExportUpdateInput $input = new ExportUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ExportUpdate', OperationRequest::from($input->toArray()));
    }

}
