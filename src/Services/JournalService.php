<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\Journal\InvoiceAllInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\InvoiceAllInvoiceStateInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\InvoiceAllUnitInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\InvoiceAllXmlInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\InvoiceAllZipInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\InvoiceDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\InvoiceDetailPdfInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\InvoiceInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\InvoiceStateAllInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\InvoiceUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalAllInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyALLDateSentInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyAllInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyAllSummaryInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyDeleteOneInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyInsertSpecialInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyOrderAllInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyOrderDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyOrderItemAllInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyOrderItemDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyOrderUpdateDocumentInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyOrderUpdateSendMessageInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyPackAllInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopySentAllIInvoiceSummaryVatInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopySentAllInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopySentAllInvoiceInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopySentDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopySentDetailReturnedInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyUpdateCloseYearInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyUpdateGenerateInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyUpdateSendMessageInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyUpdateSentInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyVipAllInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyVipDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyVipDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyVipInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyVipUpdateDateSentIdInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyVipUpdateDateSentInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalCopyVipUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalDeliveryTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalNoviceAllInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalReturnedAllInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalReturnedInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\JournalReturnedReasonAllInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\PersonJournalAllInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\PersonJournalAllUnitInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\PersonJournalChangeFreeInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\PersonJournalDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\PersonJournalDetailExistsInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\PersonJournalDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\PersonJournalFreeAttachmentsInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\PersonJournalInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\PersonJournalInsertUnitInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\PersonJournalUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\PersonJournalWarningFreeInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\RoverJournalTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\RoverJournalUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\RoverJournalWarningInput;
use Misakstvanu\LaravelSkautis\Requests\Journal\RoverJournalYearDetailInput;
use Misakstvanu\LaravelSkautis\Responses\Journal\InvoiceAllInvoiceStateOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\InvoiceAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\InvoiceAllUnitOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\InvoiceAllXmlOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\InvoiceAllZipOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\InvoiceDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\InvoiceDetailPdfOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\InvoiceStateAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopyALLDateSentOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopyAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopyAllSummaryOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopyOrderAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopyOrderDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopyOrderItemAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopyOrderItemDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopyPackAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopySentAllIInvoiceSummaryVatOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopySentAllInvoiceOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopySentAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopySentDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopySentDetailReturnedOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopyUpdateGenerateOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopyVipAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopyVipDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopyVipInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalCopyVipUpdateDateSentOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalDeliveryTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalNoviceAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalReturnedAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalReturnedInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\JournalReturnedReasonAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\PersonJournalAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\PersonJournalAllUnitOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\PersonJournalDetailExistsOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\PersonJournalDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\PersonJournalFreeAttachmentsOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\PersonJournalInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\PersonJournalInsertUnitOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\RoverJournalTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Journal\RoverJournalYearDetailOutput;

/**
 * Webová služba pro práci s časopisy a fakturami
 */
final class JournalService
{
    public const SERVICE_NAME = 'Journal';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam faktur
     * @return InvoiceAllOutput[]
     */
    public function InvoiceAll(InvoiceAllInput $input = new InvoiceAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'InvoiceAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): InvoiceAllOutput => InvoiceAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam faktur podle stavu
     * @return InvoiceAllInvoiceStateOutput[]
     */
    public function InvoiceAllInvoiceState(InvoiceAllInvoiceStateInput $input = new InvoiceAllInvoiceStateInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'InvoiceAllInvoiceState', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): InvoiceAllInvoiceStateOutput => InvoiceAllInvoiceStateOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam faktur jednotky
     * @return InvoiceAllUnitOutput[]
     */
    public function InvoiceAllUnit(InvoiceAllUnitInput $input = new InvoiceAllUnitInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'InvoiceAllUnit', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): InvoiceAllUnitOutput => InvoiceAllUnitOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam faktur v xml
     */
    public function InvoiceAllXml(InvoiceAllXmlInput $input = new InvoiceAllXmlInput()): InvoiceAllXmlOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'InvoiceAllXml', OperationRequest::from($input->toArray()));
        return InvoiceAllXmlOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam faktur v xml zabalenych do zipu
     */
    public function InvoiceAllZip(InvoiceAllZipInput $input = new InvoiceAllZipInput()): InvoiceAllZipOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'InvoiceAllZip', OperationRequest::from($input->toArray()));
        return InvoiceAllZipOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst detail faktury
     */
    public function InvoiceDetail(InvoiceDetailInput $input = new InvoiceDetailInput()): InvoiceDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'InvoiceDetail', OperationRequest::from($input->toArray()));
        return InvoiceDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst fakturu v pdf
     */
    public function InvoiceDetailPdf(InvoiceDetailPdfInput $input = new InvoiceDetailPdfInput()): InvoiceDetailPdfOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'InvoiceDetailPdf', OperationRequest::from($input->toArray()));
        return InvoiceDetailPdfOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Vygenerovat faktury za rozeslané a dosud neuhrazené časopisy
     */
    public function InvoiceInsert(InvoiceInsertInput $input = new InvoiceInsertInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'InvoiceInsert', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam Stavů faktury
     * @return InvoiceStateAllOutput[]
     */
    public function InvoiceStateAll(InvoiceStateAllInput $input = new InvoiceStateAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'InvoiceStateAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): InvoiceStateAllOutput => InvoiceStateAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Upravit fakturu
     */
    public function InvoiceUpdate(InvoiceUpdateInput $input = new InvoiceUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'InvoiceUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam titulů časopisů
     * @return JournalAllOutput[]
     */
    public function JournalAll(JournalAllInput $input = new JournalAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalAllOutput => JournalAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Číselník datumů odeslání připravených zásilek
     * @return JournalCopyALLDateSentOutput[]
     */
    public function JournalCopyALLDateSent(JournalCopyALLDateSentInput $input = new JournalCopyALLDateSentInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyALLDateSent', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalCopyALLDateSentOutput => JournalCopyALLDateSentOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam výtisků časopisů
     * @return JournalCopyAllOutput[]
     */
    public function JournalCopyAll(JournalCopyAllInput $input = new JournalCopyAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalCopyAllOutput => JournalCopyAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Přehled titulů připravených k rozesílce
     * @return JournalCopyAllSummaryOutput[]
     */
    public function JournalCopyAllSummary(JournalCopyAllSummaryInput $input = new JournalCopyAllSummaryInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyAllSummary', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalCopyAllSummaryOutput => JournalCopyAllSummaryOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat připravenou rozesílku
     */
    public function JournalCopyDelete(JournalCopyDeleteInput $input = new JournalCopyDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Smazat připravenou rozesílku
     */
    public function JournalCopyDeleteOne(JournalCopyDeleteOneInput $input = new JournalCopyDeleteOneInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyDeleteOne', OperationRequest::from($input->toArray()));
    }

    /**
     * Přidat časopis do rozesílky
     */
    public function JournalCopyInsert(JournalCopyInsertInput $input = new JournalCopyInsertInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyInsert', OperationRequest::from($input->toArray()));
    }

    /**
     * Přidat speciální zásilku
     */
    public function JournalCopyInsertSpecial(JournalCopyInsertSpecialInput $input = new JournalCopyInsertSpecialInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyInsertSpecial', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam objednávek časopisu
     * @return JournalCopyOrderAllOutput[]
     */
    public function JournalCopyOrderAll(JournalCopyOrderAllInput $input = new JournalCopyOrderAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyOrderAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalCopyOrderAllOutput => JournalCopyOrderAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail objednávky časopisu
     */
    public function JournalCopyOrderDetail(JournalCopyOrderDetailInput $input = new JournalCopyOrderDetailInput()): JournalCopyOrderDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyOrderDetail', OperationRequest::from($input->toArray()));
        return JournalCopyOrderDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Journal Copy Order Item All.
     * @return JournalCopyOrderItemAllOutput[]
     */
    public function JournalCopyOrderItemAll(JournalCopyOrderItemAllInput $input = new JournalCopyOrderItemAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyOrderItemAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalCopyOrderItemAllOutput => JournalCopyOrderItemAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail položky objednávky časopisů
     */
    public function JournalCopyOrderItemDetail(JournalCopyOrderItemDetailInput $input = new JournalCopyOrderItemDetailInput()): JournalCopyOrderItemDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyOrderItemDetail', OperationRequest::from($input->toArray()));
        return JournalCopyOrderItemDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Nastavit ID_Document se zipem
     */
    public function JournalCopyOrderUpdateDocument(JournalCopyOrderUpdateDocumentInput $input = new JournalCopyOrderUpdateDocumentInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyOrderUpdateDocument', OperationRequest::from($input->toArray()));
    }

    /**
     * Odeslat připravené zprávy
     */
    public function JournalCopyOrderUpdateSendMessage(JournalCopyOrderUpdateSendMessageInput $input = new JournalCopyOrderUpdateSendMessageInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyOrderUpdateSendMessage', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam výtisků časopisu v balíku
     * @return JournalCopyPackAllOutput[]
     */
    public function JournalCopyPackAll(JournalCopyPackAllInput $input = new JournalCopyPackAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyPackAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalCopyPackAllOutput => JournalCopyPackAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam odeslaných výtisků časopisů
     * @return JournalCopySentAllOutput[]
     */
    public function JournalCopySentAll(JournalCopySentAllInput $input = new JournalCopySentAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopySentAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalCopySentAllOutput => JournalCopySentAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam fakturovaných časopisů
     */
    public function JournalCopySentAllIInvoiceSummaryVat(JournalCopySentAllIInvoiceSummaryVatInput $input = new JournalCopySentAllIInvoiceSummaryVatInput()): JournalCopySentAllIInvoiceSummaryVatOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopySentAllIInvoiceSummaryVat', OperationRequest::from($input->toArray()));
        return JournalCopySentAllIInvoiceSummaryVatOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam fakturovaných časopisů
     * @return JournalCopySentAllInvoiceOutput[]
     */
    public function JournalCopySentAllInvoice(JournalCopySentAllInvoiceInput $input = new JournalCopySentAllInvoiceInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopySentAllInvoice', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalCopySentAllInvoiceOutput => JournalCopySentAllInvoiceOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail odeslaného výtisku časopisu
     */
    public function JournalCopySentDetail(JournalCopySentDetailInput $input = new JournalCopySentDetailInput()): JournalCopySentDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopySentDetail', OperationRequest::from($input->toArray()));
        return JournalCopySentDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst detail výtisku časopisu pro vrácený časopis
     */
    public function JournalCopySentDetailReturned(JournalCopySentDetailReturnedInput $input = new JournalCopySentDetailReturnedInput()): JournalCopySentDetailReturnedOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopySentDetailReturned', OperationRequest::from($input->toArray()));
        return JournalCopySentDetailReturnedOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Ukončit ročník
     */
    public function JournalCopyUpdateCloseYear(JournalCopyUpdateCloseYearInput $input = new JournalCopyUpdateCloseYearInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyUpdateCloseYear', OperationRequest::from($input->toArray()));
    }

    /**
     * Generovat seznam adres k rozesílce
     * @return JournalCopyUpdateGenerateOutput[]
     */
    public function JournalCopyUpdateGenerate(JournalCopyUpdateGenerateInput $input = new JournalCopyUpdateGenerateInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyUpdateGenerate', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalCopyUpdateGenerateOutput => JournalCopyUpdateGenerateOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Vygenerovat soubory s rozesílkou a odeslat IZS
     */
    public function JournalCopyUpdateSendMessage(JournalCopyUpdateSendMessageInput $input = new JournalCopyUpdateSendMessageInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyUpdateSendMessage', OperationRequest::from($input->toArray()));
    }

    /**
     * Nastavit připravenou zásilku jako odeslanou
     */
    public function JournalCopyUpdateSent(JournalCopyUpdateSentInput $input = new JournalCopyUpdateSentInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyUpdateSent', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam VIP časopisů
     * @return JournalCopyVipAllOutput[]
     */
    public function JournalCopyVipAll(JournalCopyVipAllInput $input = new JournalCopyVipAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyVipAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalCopyVipAllOutput => JournalCopyVipAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat VIP časopis
     */
    public function JournalCopyVipDelete(JournalCopyVipDeleteInput $input = new JournalCopyVipDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyVipDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail VIP časopisu
     */
    public function JournalCopyVipDetail(JournalCopyVipDetailInput $input = new JournalCopyVipDetailInput()): JournalCopyVipDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyVipDetail', OperationRequest::from($input->toArray()));
        return JournalCopyVipDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit VIP časopis
     */
    public function JournalCopyVipInsert(JournalCopyVipInsertInput $input = new JournalCopyVipInsertInput()): JournalCopyVipInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyVipInsert', OperationRequest::from($input->toArray()));
        return JournalCopyVipInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit VIP časopis
     */
    public function JournalCopyVipUpdate(JournalCopyVipUpdateInput $input = new JournalCopyVipUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyVipUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit VIP časopis
     */
    public function JournalCopyVipUpdateDateSent(JournalCopyVipUpdateDateSentInput $input = new JournalCopyVipUpdateDateSentInput()): JournalCopyVipUpdateDateSentOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyVipUpdateDateSent', OperationRequest::from($input->toArray()));
        return JournalCopyVipUpdateDateSentOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Změnit data odeslání u vybraných záznamů
     */
    public function JournalCopyVipUpdateDateSentId(JournalCopyVipUpdateDateSentIdInput $input = new JournalCopyVipUpdateDateSentIdInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalCopyVipUpdateDateSentId', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam typů doručení
     * @return JournalDeliveryTypeAllOutput[]
     */
    public function JournalDeliveryTypeAll(JournalDeliveryTypeAllInput $input = new JournalDeliveryTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalDeliveryTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalDeliveryTypeAllOutput => JournalDeliveryTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail titulu časopisu
     */
    public function JournalDetail(JournalDetailInput $input = new JournalDetailInput()): JournalDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalDetail', OperationRequest::from($input->toArray()));
        return JournalDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam způsobů odběru balíčků pro nováčky
     * @return JournalNoviceAllOutput[]
     */
    public function JournalNoviceAll(JournalNoviceAllInput $input = new JournalNoviceAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalNoviceAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalNoviceAllOutput => JournalNoviceAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam vrácených časopisů jednotky
     * @return JournalReturnedAllOutput[]
     */
    public function JournalReturnedAll(JournalReturnedAllInput $input = new JournalReturnedAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalReturnedAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalReturnedAllOutput => JournalReturnedAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Založit vrácený časopis
     * @return JournalReturnedInsertOutput[]
     */
    public function JournalReturnedInsert(JournalReturnedInsertInput $input = new JournalReturnedInsertInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalReturnedInsert', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalReturnedInsertOutput => JournalReturnedInsertOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam důvodů nedoručitelnosti
     * @return JournalReturnedReasonAllOutput[]
     */
    public function JournalReturnedReasonAll(JournalReturnedReasonAllInput $input = new JournalReturnedReasonAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'JournalReturnedReasonAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): JournalReturnedReasonAllOutput => JournalReturnedReasonAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam objednaných časopisů
     * @return PersonJournalAllOutput[]
     */
    public function PersonJournalAll(PersonJournalAllInput $input = new PersonJournalAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonJournalAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): PersonJournalAllOutput => PersonJournalAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam objednaných časopisů
     * @return PersonJournalAllUnitOutput[]
     */
    public function PersonJournalAllUnit(PersonJournalAllUnitInput $input = new PersonJournalAllUnitInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonJournalAllUnit', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): PersonJournalAllUnitOutput => PersonJournalAllUnitOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Změnit časopisy Zdarma dle věkové kategorie
     */
    public function PersonJournalChangeFree(PersonJournalChangeFreeInput $input = new PersonJournalChangeFreeInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonJournalChangeFree', OperationRequest::from($input->toArray()));
    }

    /**
     * Smazat objednaný časopis
     */
    public function PersonJournalDelete(PersonJournalDeleteInput $input = new PersonJournalDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonJournalDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail objednaného časopisu
     */
    public function PersonJournalDetail(PersonJournalDetailInput $input = new PersonJournalDetailInput()): PersonJournalDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonJournalDetail', OperationRequest::from($input->toArray()));
        return PersonJournalDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Zjistit zda osoba odebírá časopis
     */
    public function PersonJournalDetailExists(PersonJournalDetailExistsInput $input = new PersonJournalDetailExistsInput()): PersonJournalDetailExistsOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonJournalDetailExists', OperationRequest::from($input->toArray()));
        return PersonJournalDetailExistsOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načte počet zbývajících příloh zdarma
     */
    public function PersonJournalFreeAttachments(PersonJournalFreeAttachmentsInput $input = new PersonJournalFreeAttachmentsInput()): PersonJournalFreeAttachmentsOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonJournalFreeAttachments', OperationRequest::from($input->toArray()));
        return PersonJournalFreeAttachmentsOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit objednaný časopis
     */
    public function PersonJournalInsert(PersonJournalInsertInput $input = new PersonJournalInsertInput()): PersonJournalInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonJournalInsert', OperationRequest::from($input->toArray()));
        return PersonJournalInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Objednat přílohu zdarma
     */
    public function PersonJournalInsertUnit(PersonJournalInsertUnitInput $input = new PersonJournalInsertUnitInput()): PersonJournalInsertUnitOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonJournalInsertUnit', OperationRequest::from($input->toArray()));
        return PersonJournalInsertUnitOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit objednaný časopis
     */
    public function PersonJournalUpdate(PersonJournalUpdateInput $input = new PersonJournalUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonJournalUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upozornění na změnu časopisů zdarma
     */
    public function PersonJournalWarningFree(PersonJournalWarningFreeInput $input = new PersonJournalWarningFreeInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonJournalWarningFree', OperationRequest::from($input->toArray()));
    }

    /**
     * Typ odpovědi
     * @return RoverJournalTypeAllOutput[]
     */
    public function RoverJournalTypeAll(RoverJournalTypeAllInput $input = new RoverJournalTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RoverJournalTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): RoverJournalTypeAllOutput => RoverJournalTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Upravi/vlozi odpoved na rovera
     */
    public function RoverJournalUpdate(RoverJournalUpdateInput $input = new RoverJournalUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RoverJournalUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upozornění na osoby v roverském věku
     */
    public function RoverJournalWarning(RoverJournalWarningInput $input = new RoverJournalWarningInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RoverJournalWarning', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst aktuální rok pro rovera
     */
    public function RoverJournalYearDetail(RoverJournalYearDetailInput $input = new RoverJournalYearDetailInput()): RoverJournalYearDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RoverJournalYearDetail', OperationRequest::from($input->toArray()));
        return RoverJournalYearDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

}
