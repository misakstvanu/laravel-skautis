<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\ContentManagement\FavoriteAllInput;
use Misakstvanu\LaravelSkautis\Requests\ContentManagement\FavoriteDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\ContentManagement\FavoriteDetailInput;
use Misakstvanu\LaravelSkautis\Requests\ContentManagement\FavoriteInsertInput;
use Misakstvanu\LaravelSkautis\Requests\ContentManagement\FavoriteUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\ContentManagement\MenuAllRootHtmlInput;
use Misakstvanu\LaravelSkautis\Requests\ContentManagement\MenuAllSubmenuHtmlInput;
use Misakstvanu\LaravelSkautis\Requests\ContentManagement\PageDetailInput;
use Misakstvanu\LaravelSkautis\Requests\ContentManagement\PageStateDetailInput;
use Misakstvanu\LaravelSkautis\Requests\ContentManagement\PageStateItemAllInput;
use Misakstvanu\LaravelSkautis\Requests\ContentManagement\PageStateItemDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\ContentManagement\PageStateUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\ContentManagement\TabAllInput;
use Misakstvanu\LaravelSkautis\Requests\ContentManagement\TabUpdateResetInput;
use Misakstvanu\LaravelSkautis\Requests\ContentManagement\ValidateAllInput;
use Misakstvanu\LaravelSkautis\Responses\ContentManagement\FavoriteAllOutput;
use Misakstvanu\LaravelSkautis\Responses\ContentManagement\FavoriteDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\ContentManagement\FavoriteInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\ContentManagement\PageDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\ContentManagement\PageStateDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\ContentManagement\PageStateItemAllOutput;
use Misakstvanu\LaravelSkautis\Responses\ContentManagement\PageStateUpdateOutput;
use Misakstvanu\LaravelSkautis\Responses\ContentManagement\TabAllOutput;
use Misakstvanu\LaravelSkautis\Responses\ContentManagement\ValidateAllOutput;

/**
 * Webová služba pro správu obsahu (redakční systém)
 */
final class ContentManagementService
{
    public const SERVICE_NAME = 'ContentManagement';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam oblíbených stránek
     * @return FavoriteAllOutput[]
     */
    public function FavoriteAll(FavoriteAllInput $input = new FavoriteAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'FavoriteAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): FavoriteAllOutput => FavoriteAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat oblíbenou stránku
     */
    public function FavoriteDelete(FavoriteDeleteInput $input = new FavoriteDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'FavoriteDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail oblíbené stránky
     */
    public function FavoriteDetail(FavoriteDetailInput $input = new FavoriteDetailInput()): FavoriteDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'FavoriteDetail', OperationRequest::from($input->toArray()));
        return FavoriteDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit oblíbenou stránku
     */
    public function FavoriteInsert(FavoriteInsertInput $input = new FavoriteInsertInput()): FavoriteInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'FavoriteInsert', OperationRequest::from($input->toArray()));
        return FavoriteInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit oblíbenou stránku
     */
    public function FavoriteUpdate(FavoriteUpdateInput $input = new FavoriteUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'FavoriteUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načte položky hlavního menu jako HTML
     */
    public function MenuAllRootHtml(MenuAllRootHtmlInput $input = new MenuAllRootHtmlInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MenuAllRootHtml', OperationRequest::from($input->toArray()));
    }

    /**
     * Načte podřízené položky hlavního menu jako HTML
     */
    public function MenuAllSubmenuHtml(MenuAllSubmenuHtmlInput $input = new MenuAllSubmenuHtmlInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MenuAllSubmenuHtml', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail stránky
     */
    public function PageDetail(PageDetailInput $input = new PageDetailInput()): PageDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PageDetail', OperationRequest::from($input->toArray()));
        return PageDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst detail pohledu
     */
    public function PageStateDetail(PageStateDetailInput $input = new PageStateDetailInput()): PageStateDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PageStateDetail', OperationRequest::from($input->toArray()));
        return PageStateDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam položek pohledu
     * @return PageStateItemAllOutput[]
     */
    public function PageStateItemAll(PageStateItemAllInput $input = new PageStateItemAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PageStateItemAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): PageStateItemAllOutput => PageStateItemAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat
     */
    public function PageStateItemDelete(PageStateItemDeleteInput $input = new PageStateItemDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PageStateItemDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit pohled
     */
    public function PageStateUpdate(PageStateUpdateInput $input = new PageStateUpdateInput()): PageStateUpdateOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PageStateUpdate', OperationRequest::from($input->toArray()));
        return PageStateUpdateOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam záložek
     * @return TabAllOutput[]
     */
    public function TabAll(TabAllInput $input = new TabAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'TabAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): TabAllOutput => TabAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Vyresetovat pořadí záložek
     */
    public function TabUpdateReset(TabUpdateResetInput $input = new TabUpdateResetInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'TabUpdateReset', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst validační hlášky
     * @return ValidateAllOutput[]
     */
    public function ValidateAll(ValidateAllInput $input = new ValidateAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'ValidateAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): ValidateAllOutput => ValidateAllOutput::fromStdClass($item), $response->objects());
    }

}
