<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\Material\PurchaseTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Material\StockTakingAllInput;
use Misakstvanu\LaravelSkautis\Requests\Material\StockTakingDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Material\StockTakingDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Material\StockTakingInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Material\StockTakingStateAllInput;
use Misakstvanu\LaravelSkautis\Requests\Material\StockTakingTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Material\StockTakingUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Material\StockTakingUpdateStateInput;
use Misakstvanu\LaravelSkautis\Requests\Material\StockTakingWarehouseItemAllInput;
use Misakstvanu\LaravelSkautis\Requests\Material\StockTakingWarehouseItemDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Material\StockTakingWarehouseItemInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseAdminAllInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseAdminDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseAdminInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseAllBorrowableInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseAllEventInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseAllInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseAllPropertyInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseAllStockTakingInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseAllStockTakingUnitInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemAllBarcodeInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemAllBorrowableInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemAllDisplayNameInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemAllEventInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemAllInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemAllLentInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemAllStockTakingDiscardedInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemAllStockTakingInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemCategoryAllInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemCategoryAllWithIntendInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemDetailPhotoInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemInventoryAllInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemInventoryInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemRentDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemRentInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemRentTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemRentUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemTagAllInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemUpdateBatchInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemUpdateDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemUpdateMultiInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemUpdatePhotoInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseItemUpdateTransferInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseStockTakingAllInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseStockTakingDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseStockTakingInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseTagAllInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseTagAllUniversalInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseTagDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseTagDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseTagInsertEventInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseTagInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseTagUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseUpdateEnabledInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Material\WarehouseUpdateIsDefaultInput;
use Misakstvanu\LaravelSkautis\Responses\Material\PurchaseTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\StockTakingAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\StockTakingDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\StockTakingInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\StockTakingStateAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\StockTakingTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\StockTakingWarehouseItemAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\StockTakingWarehouseItemInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseAdminAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseAdminInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseAllBorrowableOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseAllEventOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseAllPropertyOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseAllStockTakingOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseAllStockTakingUnitOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemAllBarcodeOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemAllBorrowableOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemAllDisplayNameOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemAllEventOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemAllLentOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemAllStockTakingDiscardedOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemAllStockTakingOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemCategoryAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemCategoryAllWithIntendOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemDetailPhotoOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemInventoryAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemInventoryInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemRentTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemTagAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseItemUpdateTransferOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseStockTakingAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseStockTakingInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseTagAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseTagAllUniversalOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseTagDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseTagInsertEventOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseTagInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Material\WarehouseTypeAllOutput;

/**
 * Webová služba pro práci s materiálem a sklady
 */
final class MaterialService
{
    public const SERVICE_NAME = 'Material';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam typu pořízení
     * @return PurchaseTypeAllOutput[]
     */
    public function PurchaseTypeAll(PurchaseTypeAllInput $input = new PurchaseTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PurchaseTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): PurchaseTypeAllOutput => PurchaseTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam inventur
     * @return StockTakingAllOutput[]
     */
    public function StockTakingAll(StockTakingAllInput $input = new StockTakingAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StockTakingAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): StockTakingAllOutput => StockTakingAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat inventuru
     */
    public function StockTakingDelete(StockTakingDeleteInput $input = new StockTakingDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StockTakingDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail inventury
     */
    public function StockTakingDetail(StockTakingDetailInput $input = new StockTakingDetailInput()): StockTakingDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StockTakingDetail', OperationRequest::from($input->toArray()));
        return StockTakingDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit inventuru
     */
    public function StockTakingInsert(StockTakingInsertInput $input = new StockTakingInsertInput()): StockTakingInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StockTakingInsert', OperationRequest::from($input->toArray()));
        return StockTakingInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam stavů inventury
     * @return StockTakingStateAllOutput[]
     */
    public function StockTakingStateAll(StockTakingStateAllInput $input = new StockTakingStateAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StockTakingStateAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): StockTakingStateAllOutput => StockTakingStateAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam typů inventarizace
     * @return StockTakingTypeAllOutput[]
     */
    public function StockTakingTypeAll(StockTakingTypeAllInput $input = new StockTakingTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StockTakingTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): StockTakingTypeAllOutput => StockTakingTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Upravit inventuru
     */
    public function StockTakingUpdate(StockTakingUpdateInput $input = new StockTakingUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StockTakingUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit stav inventury
     */
    public function StockTakingUpdateState(StockTakingUpdateStateInput $input = new StockTakingUpdateStateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StockTakingUpdateState', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam inventarizovaných položek skladu
     * @return StockTakingWarehouseItemAllOutput[]
     */
    public function StockTakingWarehouseItemAll(StockTakingWarehouseItemAllInput $input = new StockTakingWarehouseItemAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StockTakingWarehouseItemAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): StockTakingWarehouseItemAllOutput => StockTakingWarehouseItemAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat inventarizovanou položku skladu
     */
    public function StockTakingWarehouseItemDelete(StockTakingWarehouseItemDeleteInput $input = new StockTakingWarehouseItemDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StockTakingWarehouseItemDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit inventarizovanou položku skladu
     */
    public function StockTakingWarehouseItemInsert(StockTakingWarehouseItemInsertInput $input = new StockTakingWarehouseItemInsertInput()): StockTakingWarehouseItemInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StockTakingWarehouseItemInsert', OperationRequest::from($input->toArray()));
        return StockTakingWarehouseItemInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam správců skladu
     * @return WarehouseAdminAllOutput[]
     */
    public function WarehouseAdminAll(WarehouseAdminAllInput $input = new WarehouseAdminAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseAdminAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseAdminAllOutput => WarehouseAdminAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat správce skladu
     */
    public function WarehouseAdminDelete(WarehouseAdminDeleteInput $input = new WarehouseAdminDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseAdminDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit správce skladu
     */
    public function WarehouseAdminInsert(WarehouseAdminInsertInput $input = new WarehouseAdminInsertInput()): WarehouseAdminInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseAdminInsert', OperationRequest::from($input->toArray()));
        return WarehouseAdminInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam skladů
     * @return WarehouseAllOutput[]
     */
    public function WarehouseAll(WarehouseAllInput $input = new WarehouseAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseAllOutput => WarehouseAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam skladů, ze kterých si můžu půjčovat
     * @return WarehouseAllBorrowableOutput[]
     */
    public function WarehouseAllBorrowable(WarehouseAllBorrowableInput $input = new WarehouseAllBorrowableInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseAllBorrowable', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseAllBorrowableOutput => WarehouseAllBorrowableOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam skladů
     * @return WarehouseAllEventOutput[]
     */
    public function WarehouseAllEvent(WarehouseAllEventInput $input = new WarehouseAllEventInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseAllEvent', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseAllEventOutput => WarehouseAllEventOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam skladů
     * @return WarehouseAllPropertyOutput[]
     */
    public function WarehouseAllProperty(WarehouseAllPropertyInput $input = new WarehouseAllPropertyInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseAllProperty', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseAllPropertyOutput => WarehouseAllPropertyOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam skladů k inventuře jednotky
     * @return WarehouseAllStockTakingOutput[]
     */
    public function WarehouseAllStockTaking(WarehouseAllStockTakingInput $input = new WarehouseAllStockTakingInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseAllStockTaking', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseAllStockTakingOutput => WarehouseAllStockTakingOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam skladů inventury jednotky
     * @return WarehouseAllStockTakingUnitOutput[]
     */
    public function WarehouseAllStockTakingUnit(WarehouseAllStockTakingUnitInput $input = new WarehouseAllStockTakingUnitInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseAllStockTakingUnit', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseAllStockTakingUnitOutput => WarehouseAllStockTakingUnitOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat sklad
     */
    public function WarehouseDelete(WarehouseDeleteInput $input = new WarehouseDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail skladu
     */
    public function WarehouseDetail(WarehouseDetailInput $input = new WarehouseDetailInput()): WarehouseDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseDetail', OperationRequest::from($input->toArray()));
        return WarehouseDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit sklad
     */
    public function WarehouseInsert(WarehouseInsertInput $input = new WarehouseInsertInput()): WarehouseInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseInsert', OperationRequest::from($input->toArray()));
        return WarehouseInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam položek jednotky
     * @return WarehouseItemAllOutput[]
     */
    public function WarehouseItemAll(WarehouseItemAllInput $input = new WarehouseItemAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseItemAllOutput => WarehouseItemAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam štítků položek
     * @return WarehouseItemAllBarcodeOutput[]
     */
    public function WarehouseItemAllBarcode(WarehouseItemAllBarcodeInput $input = new WarehouseItemAllBarcodeInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemAllBarcode', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseItemAllBarcodeOutput => WarehouseItemAllBarcodeOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam všech položek skladu, které si lze zapůjčit
     * @return WarehouseItemAllBorrowableOutput[]
     */
    public function WarehouseItemAllBorrowable(WarehouseItemAllBorrowableInput $input = new WarehouseItemAllBorrowableInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemAllBorrowable', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseItemAllBorrowableOutput => WarehouseItemAllBorrowableOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst názvy položek
     * @return WarehouseItemAllDisplayNameOutput[]
     */
    public function WarehouseItemAllDisplayName(WarehouseItemAllDisplayNameInput $input = new WarehouseItemAllDisplayNameInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemAllDisplayName', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseItemAllDisplayNameOutput => WarehouseItemAllDisplayNameOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam položek jednotky
     * @return WarehouseItemAllEventOutput[]
     */
    public function WarehouseItemAllEvent(WarehouseItemAllEventInput $input = new WarehouseItemAllEventInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemAllEvent', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseItemAllEventOutput => WarehouseItemAllEventOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst vypůjčené položky a rezervace
     * @return WarehouseItemAllLentOutput[]
     */
    public function WarehouseItemAllLent(WarehouseItemAllLentInput $input = new WarehouseItemAllLentInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemAllLent', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseItemAllLentOutput => WarehouseItemAllLentOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam položek inventurizace jednotky
     * @return WarehouseItemAllStockTakingOutput[]
     */
    public function WarehouseItemAllStockTaking(WarehouseItemAllStockTakingInput $input = new WarehouseItemAllStockTakingInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemAllStockTaking', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseItemAllStockTakingOutput => WarehouseItemAllStockTakingOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam položek k likvidaci inventurizace jednotky
     * @return WarehouseItemAllStockTakingDiscardedOutput[]
     */
    public function WarehouseItemAllStockTakingDiscarded(WarehouseItemAllStockTakingDiscardedInput $input = new WarehouseItemAllStockTakingDiscardedInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemAllStockTakingDiscarded', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseItemAllStockTakingDiscardedOutput => WarehouseItemAllStockTakingDiscardedOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam kategorií
     * @return WarehouseItemCategoryAllOutput[]
     */
    public function WarehouseItemCategoryAll(WarehouseItemCategoryAllInput $input = new WarehouseItemCategoryAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemCategoryAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseItemCategoryAllOutput => WarehouseItemCategoryAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam kategorií
     * @return WarehouseItemCategoryAllWithIntendOutput[]
     */
    public function WarehouseItemCategoryAllWithIntend(WarehouseItemCategoryAllWithIntendInput $input = new WarehouseItemCategoryAllWithIntendInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemCategoryAllWithIntend', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseItemCategoryAllWithIntendOutput => WarehouseItemCategoryAllWithIntendOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Warehouse Item Delete.
     */
    public function WarehouseItemDelete(WarehouseItemDeleteInput $input = new WarehouseItemDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail položky
     */
    public function WarehouseItemDetail(WarehouseItemDetailInput $input = new WarehouseItemDetailInput()): WarehouseItemDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemDetail', OperationRequest::from($input->toArray()));
        return WarehouseItemDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst detail položky
     */
    public function WarehouseItemDetailPhoto(WarehouseItemDetailPhotoInput $input = new WarehouseItemDetailPhotoInput()): WarehouseItemDetailPhotoOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemDetailPhoto', OperationRequest::from($input->toArray()));
        return WarehouseItemDetailPhotoOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit položku
     */
    public function WarehouseItemInsert(WarehouseItemInsertInput $input = new WarehouseItemInsertInput()): WarehouseItemInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemInsert', OperationRequest::from($input->toArray()));
        return WarehouseItemInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam inventur
     * @return WarehouseItemInventoryAllOutput[]
     */
    public function WarehouseItemInventoryAll(WarehouseItemInventoryAllInput $input = new WarehouseItemInventoryAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemInventoryAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseItemInventoryAllOutput => WarehouseItemInventoryAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Založit inventuru
     */
    public function WarehouseItemInventoryInsert(WarehouseItemInventoryInsertInput $input = new WarehouseItemInventoryInsertInput()): WarehouseItemInventoryInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemInventoryInsert', OperationRequest::from($input->toArray()));
        return WarehouseItemInventoryInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Smazat výpůjčku
     */
    public function WarehouseItemRentDelete(WarehouseItemRentDeleteInput $input = new WarehouseItemRentDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemRentDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit výpůjčku
     */
    public function WarehouseItemRentInsert(WarehouseItemRentInsertInput $input = new WarehouseItemRentInsertInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemRentInsert', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam typů půjčení
     * @return WarehouseItemRentTypeAllOutput[]
     */
    public function WarehouseItemRentTypeAll(WarehouseItemRentTypeAllInput $input = new WarehouseItemRentTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemRentTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseItemRentTypeAllOutput => WarehouseItemRentTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Upravit výpůjčku
     */
    public function WarehouseItemRentUpdate(WarehouseItemRentUpdateInput $input = new WarehouseItemRentUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemRentUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam tagů položek
     * @return WarehouseItemTagAllOutput[]
     */
    public function WarehouseItemTagAll(WarehouseItemTagAllInput $input = new WarehouseItemTagAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemTagAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseItemTagAllOutput => WarehouseItemTagAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Upravit položku
     */
    public function WarehouseItemUpdate(WarehouseItemUpdateInput $input = new WarehouseItemUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit položku
     */
    public function WarehouseItemUpdateBatch(WarehouseItemUpdateBatchInput $input = new WarehouseItemUpdateBatchInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemUpdateBatch', OperationRequest::from($input->toArray()));
    }

    /**
     * Vyřadit položku
     */
    public function WarehouseItemUpdateDelete(WarehouseItemUpdateDeleteInput $input = new WarehouseItemUpdateDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemUpdateDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit více položek
     */
    public function WarehouseItemUpdateMulti(WarehouseItemUpdateMultiInput $input = new WarehouseItemUpdateMultiInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemUpdateMulti', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit fotografii u položky
     */
    public function WarehouseItemUpdatePhoto(WarehouseItemUpdatePhotoInput $input = new WarehouseItemUpdatePhotoInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemUpdatePhoto', OperationRequest::from($input->toArray()));
    }

    /**
     * Převod položek do skladu
     */
    public function WarehouseItemUpdateTransfer(WarehouseItemUpdateTransferInput $input = new WarehouseItemUpdateTransferInput()): WarehouseItemUpdateTransferOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseItemUpdateTransfer', OperationRequest::from($input->toArray()));
        return WarehouseItemUpdateTransferOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam inventarizovaných skladu
     * @return WarehouseStockTakingAllOutput[]
     */
    public function WarehouseStockTakingAll(WarehouseStockTakingAllInput $input = new WarehouseStockTakingAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseStockTakingAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseStockTakingAllOutput => WarehouseStockTakingAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat inventarizovaný skladu
     */
    public function WarehouseStockTakingDelete(WarehouseStockTakingDeleteInput $input = new WarehouseStockTakingDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseStockTakingDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit inventarizovaný skladu
     */
    public function WarehouseStockTakingInsert(WarehouseStockTakingInsertInput $input = new WarehouseStockTakingInsertInput()): WarehouseStockTakingInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseStockTakingInsert', OperationRequest::from($input->toArray()));
        return WarehouseStockTakingInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam tagů
     * @return WarehouseTagAllOutput[]
     */
    public function WarehouseTagAll(WarehouseTagAllInput $input = new WarehouseTagAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseTagAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseTagAllOutput => WarehouseTagAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam tagů
     * @return WarehouseTagAllUniversalOutput[]
     */
    public function WarehouseTagAllUniversal(WarehouseTagAllUniversalInput $input = new WarehouseTagAllUniversalInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseTagAllUniversal', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseTagAllUniversalOutput => WarehouseTagAllUniversalOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat tag
     */
    public function WarehouseTagDelete(WarehouseTagDeleteInput $input = new WarehouseTagDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseTagDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail tagu
     */
    public function WarehouseTagDetail(WarehouseTagDetailInput $input = new WarehouseTagDetailInput()): WarehouseTagDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseTagDetail', OperationRequest::from($input->toArray()));
        return WarehouseTagDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit tag
     */
    public function WarehouseTagInsert(WarehouseTagInsertInput $input = new WarehouseTagInsertInput()): WarehouseTagInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseTagInsert', OperationRequest::from($input->toArray()));
        return WarehouseTagInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit tag
     */
    public function WarehouseTagInsertEvent(WarehouseTagInsertEventInput $input = new WarehouseTagInsertEventInput()): WarehouseTagInsertEventOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseTagInsertEvent', OperationRequest::from($input->toArray()));
        return WarehouseTagInsertEventOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit tag
     */
    public function WarehouseTagUpdate(WarehouseTagUpdateInput $input = new WarehouseTagUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseTagUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam typů skladů
     * @return WarehouseTypeAllOutput[]
     */
    public function WarehouseTypeAll(WarehouseTypeAllInput $input = new WarehouseTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WarehouseTypeAllOutput => WarehouseTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Upravit sklad
     */
    public function WarehouseUpdate(WarehouseUpdateInput $input = new WarehouseUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit platnost skladu
     */
    public function WarehouseUpdateEnabled(WarehouseUpdateEnabledInput $input = new WarehouseUpdateEnabledInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseUpdateEnabled', OperationRequest::from($input->toArray()));
    }

    /**
     * Nastavit sklad jako výchozí
     */
    public function WarehouseUpdateIsDefault(WarehouseUpdateIsDefaultInput $input = new WarehouseUpdateIsDefaultInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WarehouseUpdateIsDefault', OperationRequest::from($input->toArray()));
    }

}
