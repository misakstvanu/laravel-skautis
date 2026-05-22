<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\Welcome\StripeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\StripeAttachmentAllInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\StripeAttachmentDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\StripeAttachmentDownloadInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\StripeAttachmentInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\StripeAttachmentUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\StripeDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\StripeDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\StripeInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\StripeUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\WelcomeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\WelcomeDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\WelcomeFunctionAllInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\WelcomeFunctionDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\WelcomeFunctionInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\WelcomeInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\WelcomeMessageInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\WelcomeSentAllInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\WelcomeSentInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\WelcomeSentUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\WelcomeSentUpdateSendInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\WelcomeUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\WelcomeUpdatePrepareSendInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\WelcomeUpdateSendInput;
use Misakstvanu\LaravelSkautis\Requests\Welcome\WelcomeVariableAllInput;
use Misakstvanu\LaravelSkautis\Responses\Welcome\StripeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Welcome\StripeAttachmentAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Welcome\StripeAttachmentDownloadOutput;
use Misakstvanu\LaravelSkautis\Responses\Welcome\StripeAttachmentInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Welcome\StripeDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Welcome\StripeInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Welcome\WelcomeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Welcome\WelcomeDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Welcome\WelcomeFunctionAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Welcome\WelcomeFunctionInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Welcome\WelcomeInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Welcome\WelcomeSentAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Welcome\WelcomeVariableAllOutput;

/**
 * Uvítací balíčky
 */
final class WelcomeService
{
    public const SERVICE_NAME = 'Welcome';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam pruhů balíčku
     * @return StripeAllOutput[]
     */
    public function StripeAll(StripeAllInput $input = new StripeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StripeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): StripeAllOutput => StripeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam příloh pruhu
     * @return StripeAttachmentAllOutput[]
     */
    public function StripeAttachmentAll(StripeAttachmentAllInput $input = new StripeAttachmentAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StripeAttachmentAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): StripeAttachmentAllOutput => StripeAttachmentAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat přílohu pruhu
     */
    public function StripeAttachmentDelete(StripeAttachmentDeleteInput $input = new StripeAttachmentDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StripeAttachmentDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Stáhne přílohu pruhu
     */
    public function StripeAttachmentDownload(StripeAttachmentDownloadInput $input = new StripeAttachmentDownloadInput()): StripeAttachmentDownloadOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StripeAttachmentDownload', OperationRequest::from($input->toArray()));
        return StripeAttachmentDownloadOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit přílohu pruhu
     */
    public function StripeAttachmentInsert(StripeAttachmentInsertInput $input = new StripeAttachmentInsertInput()): StripeAttachmentInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StripeAttachmentInsert', OperationRequest::from($input->toArray()));
        return StripeAttachmentInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit přílohu pruhu
     */
    public function StripeAttachmentUpdate(StripeAttachmentUpdateInput $input = new StripeAttachmentUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StripeAttachmentUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Smazat pruh balíčku
     */
    public function StripeDelete(StripeDeleteInput $input = new StripeDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StripeDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail pruhu balíčku
     */
    public function StripeDetail(StripeDetailInput $input = new StripeDetailInput()): StripeDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StripeDetail', OperationRequest::from($input->toArray()));
        return StripeDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit pruh balíčku
     */
    public function StripeInsert(StripeInsertInput $input = new StripeInsertInput()): StripeInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StripeInsert', OperationRequest::from($input->toArray()));
        return StripeInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit pruh balíčku
     */
    public function StripeUpdate(StripeUpdateInput $input = new StripeUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'StripeUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam uvítacích balíčků
     * @return WelcomeAllOutput[]
     */
    public function WelcomeAll(WelcomeAllInput $input = new WelcomeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WelcomeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WelcomeAllOutput => WelcomeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail uvítacího balíčku
     */
    public function WelcomeDetail(WelcomeDetailInput $input = new WelcomeDetailInput()): WelcomeDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WelcomeDetail', OperationRequest::from($input->toArray()));
        return WelcomeDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam vazeb funkcí a uvítacího balíčku
     * @return WelcomeFunctionAllOutput[]
     */
    public function WelcomeFunctionAll(WelcomeFunctionAllInput $input = new WelcomeFunctionAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WelcomeFunctionAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WelcomeFunctionAllOutput => WelcomeFunctionAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat vazbu funkce a uvítacího balíčku
     */
    public function WelcomeFunctionDelete(WelcomeFunctionDeleteInput $input = new WelcomeFunctionDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WelcomeFunctionDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit vazbu funkce a uvítacího balíčku
     */
    public function WelcomeFunctionInsert(WelcomeFunctionInsertInput $input = new WelcomeFunctionInsertInput()): WelcomeFunctionInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WelcomeFunctionInsert', OperationRequest::from($input->toArray()));
        return WelcomeFunctionInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit uvítací balíček
     */
    public function WelcomeInsert(WelcomeInsertInput $input = new WelcomeInsertInput()): WelcomeInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WelcomeInsert', OperationRequest::from($input->toArray()));
        return WelcomeInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Odeslat balíček k otestování
     */
    public function WelcomeMessage(WelcomeMessageInput $input = new WelcomeMessageInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WelcomeMessage', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam odeslání balíčků
     * @return WelcomeSentAllOutput[]
     */
    public function WelcomeSentAll(WelcomeSentAllInput $input = new WelcomeSentAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WelcomeSentAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WelcomeSentAllOutput => WelcomeSentAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Odeslat balíček
     */
    public function WelcomeSentInsert(WelcomeSentInsertInput $input = new WelcomeSentInsertInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WelcomeSentInsert', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit odeslání balíčku
     */
    public function WelcomeSentUpdate(WelcomeSentUpdateInput $input = new WelcomeSentUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WelcomeSentUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Odeslání balíčků
     */
    public function WelcomeSentUpdateSend(WelcomeSentUpdateSendInput $input = new WelcomeSentUpdateSendInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WelcomeSentUpdateSend', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit uvítací balíček
     */
    public function WelcomeUpdate(WelcomeUpdateInput $input = new WelcomeUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WelcomeUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Připravit balíček k odeslání všem v dané funkci
     */
    public function WelcomeUpdatePrepareSend(WelcomeUpdatePrepareSendInput $input = new WelcomeUpdatePrepareSendInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WelcomeUpdatePrepareSend', OperationRequest::from($input->toArray()));
    }

    /**
     * Odeslat balíček všem v dané funkci
     */
    public function WelcomeUpdateSend(WelcomeUpdateSendInput $input = new WelcomeUpdateSendInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WelcomeUpdateSend', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam proměnných balíčku
     * @return WelcomeVariableAllOutput[]
     */
    public function WelcomeVariableAll(WelcomeVariableAllInput $input = new WelcomeVariableAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'WelcomeVariableAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): WelcomeVariableAllOutput => WelcomeVariableAllOutput::fromStdClass($item), $response->objects());
    }

}
