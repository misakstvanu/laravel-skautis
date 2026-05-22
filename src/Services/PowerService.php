<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\Power\AdvanceTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Power\AdvanceTypeDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Power\ContractTerminationTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Power\EnergySupplierAllInput;
use Misakstvanu\LaravelSkautis\Requests\Power\EnrollEnergyAllExportInput;
use Misakstvanu\LaravelSkautis\Requests\Power\EnrollEnergyAllInput;
use Misakstvanu\LaravelSkautis\Requests\Power\EnrollEnergyCandidateInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Power\EnrollEnergyDownloadInput;
use Misakstvanu\LaravelSkautis\Requests\Power\EnrollEnergyInsertAccessKeyInput;
use Misakstvanu\LaravelSkautis\Requests\Power\EnrollEnergyInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Power\EnrollEnergyInvitationDetailAccessKeyInput;
use Misakstvanu\LaravelSkautis\Requests\Power\EnrollEnergyInvitationInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Power\EnrollEnergyInvitationUpdateExpiredInput;
use Misakstvanu\LaravelSkautis\Requests\Power\EnrollEnergyUpdateDocumentInput;
use Misakstvanu\LaravelSkautis\Responses\Power\AdvanceTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Power\AdvanceTypeDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Power\ContractTerminationTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Power\EnergySupplierAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Power\EnrollEnergyAllExportOutput;
use Misakstvanu\LaravelSkautis\Responses\Power\EnrollEnergyAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Power\EnrollEnergyCandidateInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Power\EnrollEnergyDownloadOutput;
use Misakstvanu\LaravelSkautis\Responses\Power\EnrollEnergyInsertAccessKeyOutput;
use Misakstvanu\LaravelSkautis\Responses\Power\EnrollEnergyInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Power\EnrollEnergyInvitationDetailAccessKeyOutput;
use Misakstvanu\LaravelSkautis\Responses\Power\EnrollEnergyInvitationInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Power\EnrollEnergyUpdateDocumentOutput;

/**
 * Skautská energie
 */
final class PowerService
{
    public const SERVICE_NAME = 'Power';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam způsobů platby záloh
     * @return AdvanceTypeAllOutput[]
     */
    public function AdvanceTypeAll(AdvanceTypeAllInput $input = new AdvanceTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'AdvanceTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): AdvanceTypeAllOutput => AdvanceTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail způsobu platby záloh
     */
    public function AdvanceTypeDetail(AdvanceTypeDetailInput $input = new AdvanceTypeDetailInput()): AdvanceTypeDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'AdvanceTypeDetail', OperationRequest::from($input->toArray()));
        return AdvanceTypeDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam typu ukončení smlouvy u předchozího dodavatele
     * @return ContractTerminationTypeAllOutput[]
     */
    public function ContractTerminationTypeAll(ContractTerminationTypeAllInput $input = new ContractTerminationTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ContractTerminationTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ContractTerminationTypeAllOutput => ContractTerminationTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst dodavatele energie
     */
    public function EnergySupplierAll(EnergySupplierAllInput $input = new EnergySupplierAllInput()): EnergySupplierAllOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnergySupplierAll', OperationRequest::from($input->toArray()));
        return EnergySupplierAllOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit žádost energie
     * @return EnrollEnergyAllOutput[]
     */
    public function EnrollEnergyAll(EnrollEnergyAllInput $input = new EnrollEnergyAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollEnergyAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EnrollEnergyAllOutput => EnrollEnergyAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Založit žádost energie
     */
    public function EnrollEnergyAllExport(EnrollEnergyAllExportInput $input = new EnrollEnergyAllExportInput()): EnrollEnergyAllExportOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollEnergyAllExport', OperationRequest::from($input->toArray()));
        return EnrollEnergyAllExportOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit kandidáta o vstup do energie
     */
    public function EnrollEnergyCandidateInsert(EnrollEnergyCandidateInsertInput $input = new EnrollEnergyCandidateInsertInput()): EnrollEnergyCandidateInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollEnergyCandidateInsert', OperationRequest::from($input->toArray()));
        return EnrollEnergyCandidateInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst soubor z přihlášky energie
     */
    public function EnrollEnergyDownload(EnrollEnergyDownloadInput $input = new EnrollEnergyDownloadInput()): EnrollEnergyDownloadOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollEnergyDownload', OperationRequest::from($input->toArray()));
        return EnrollEnergyDownloadOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit žádost energie
     */
    public function EnrollEnergyInsert(EnrollEnergyInsertInput $input = new EnrollEnergyInsertInput()): EnrollEnergyInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollEnergyInsert', OperationRequest::from($input->toArray()));
        return EnrollEnergyInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit žádost energie z pozvánky
     */
    public function EnrollEnergyInsertAccessKey(EnrollEnergyInsertAccessKeyInput $input = new EnrollEnergyInsertAccessKeyInput()): EnrollEnergyInsertAccessKeyOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollEnergyInsertAccessKey', OperationRequest::from($input->toArray()));
        return EnrollEnergyInsertAccessKeyOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst detail pozvánka do skautské energie
     */
    public function EnrollEnergyInvitationDetailAccessKey(EnrollEnergyInvitationDetailAccessKeyInput $input = new EnrollEnergyInvitationDetailAccessKeyInput()): EnrollEnergyInvitationDetailAccessKeyOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollEnergyInvitationDetailAccessKey', OperationRequest::from($input->toArray()));
        return EnrollEnergyInvitationDetailAccessKeyOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit pozvánku do skautské energie
     */
    public function EnrollEnergyInvitationInsert(EnrollEnergyInvitationInsertInput $input = new EnrollEnergyInvitationInsertInput()): EnrollEnergyInvitationInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollEnergyInvitationInsert', OperationRequest::from($input->toArray()));
        return EnrollEnergyInvitationInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit pozvánku do skautské energie
     */
    public function EnrollEnergyInvitationUpdateExpired(EnrollEnergyInvitationUpdateExpiredInput $input = new EnrollEnergyInvitationUpdateExpiredInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollEnergyInvitationUpdateExpired', OperationRequest::from($input->toArray()));
    }

    /**
     * Procedura pro aktualizaci dokumentů
     */
    public function EnrollEnergyUpdateDocument(EnrollEnergyUpdateDocumentInput $input = new EnrollEnergyUpdateDocumentInput()): EnrollEnergyUpdateDocumentOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollEnergyUpdateDocument', OperationRequest::from($input->toArray()));
        return EnrollEnergyUpdateDocumentOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

}
