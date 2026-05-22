<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageAllInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageAllWebInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageAttachmentAllInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageAttachmentTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageAttachmentTypeAllMultipleInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageGroupAllInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageGroupDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageGroupDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageGroupInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageGroupPersonAllInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageGroupUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageMediumPersonAllInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageMediumPersonUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageTemplateAllInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageTemplateDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageTemplateUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageToAllInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageToSentInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageTypeAllInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageTypeDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageTypeUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageUpdateDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageUpdateReadInput;
use Misakstvanu\LaravelSkautis\Requests\Message\MessageVariableAllInput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageAllWebOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageAttachmentAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageAttachmentTypeAllMultipleOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageAttachmentTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageGroupAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageGroupDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageGroupInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageGroupPersonAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageMediumPersonAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageTemplateAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageTemplateDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageToAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageTypeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageTypeDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Message\MessageVariableAllOutput;

/**
 * Interní zpravodajský systém
 */
final class MessageService
{
    public const SERVICE_NAME = 'Message';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam e-mailů k odeslání
     * @return MessageAllOutput[]
     */
    public function MessageAll(MessageAllInput $input = new MessageAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): MessageAllOutput => MessageAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam webových zpráv přihlášeného uživatele
     * @return MessageAllWebOutput[]
     */
    public function MessageAllWeb(MessageAllWebInput $input = new MessageAllWebInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageAllWeb', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): MessageAllWebOutput => MessageAllWebOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam příloh zprávy
     * @return MessageAttachmentAllOutput[]
     */
    public function MessageAttachmentAll(MessageAttachmentAllInput $input = new MessageAttachmentAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageAttachmentAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): MessageAttachmentAllOutput => MessageAttachmentAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam typů příloh zpráv
     * @return MessageAttachmentTypeAllOutput[]
     */
    public function MessageAttachmentTypeAll(MessageAttachmentTypeAllInput $input = new MessageAttachmentTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageAttachmentTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): MessageAttachmentTypeAllOutput => MessageAttachmentTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam typů příloh zpráv pro editaci šablony zprávy
     * @return MessageAttachmentTypeAllMultipleOutput[]
     */
    public function MessageAttachmentTypeAllMultiple(MessageAttachmentTypeAllMultipleInput $input = new MessageAttachmentTypeAllMultipleInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageAttachmentTypeAllMultiple', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): MessageAttachmentTypeAllMultipleOutput => MessageAttachmentTypeAllMultipleOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail zprávy (zpráva se zavoláním této funkce automaticky nastaví jako přečtená)
     */
    public function MessageDetail(MessageDetailInput $input = new MessageDetailInput()): MessageDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageDetail', OperationRequest::from($input->toArray()));
        return MessageDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam skupin zpráv
     * @return MessageGroupAllOutput[]
     */
    public function MessageGroupAll(MessageGroupAllInput $input = new MessageGroupAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageGroupAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): MessageGroupAllOutput => MessageGroupAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat skupinu zpráv
     */
    public function MessageGroupDelete(MessageGroupDeleteInput $input = new MessageGroupDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageGroupDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail skupiny zpráv
     */
    public function MessageGroupDetail(MessageGroupDetailInput $input = new MessageGroupDetailInput()): MessageGroupDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageGroupDetail', OperationRequest::from($input->toArray()));
        return MessageGroupDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit skupinu zpráv
     */
    public function MessageGroupInsert(MessageGroupInsertInput $input = new MessageGroupInsertInput()): MessageGroupInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageGroupInsert', OperationRequest::from($input->toArray()));
        return MessageGroupInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam zasílaných skupin zpráv osobě
     * @return MessageGroupPersonAllOutput[]
     */
    public function MessageGroupPersonAll(MessageGroupPersonAllInput $input = new MessageGroupPersonAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageGroupPersonAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): MessageGroupPersonAllOutput => MessageGroupPersonAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Upravit skupinu zpráv
     */
    public function MessageGroupUpdate(MessageGroupUpdateInput $input = new MessageGroupUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageGroupUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst nastavení zpráv přihlášené osoby
     * @return MessageMediumPersonAllOutput[]
     */
    public function MessageMediumPersonAll(MessageMediumPersonAllInput $input = new MessageMediumPersonAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageMediumPersonAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): MessageMediumPersonAllOutput => MessageMediumPersonAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Upravit nastavení zpráv
     */
    public function MessageMediumPersonUpdate(MessageMediumPersonUpdateInput $input = new MessageMediumPersonUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageMediumPersonUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam šablon zpráv
     * @return MessageTemplateAllOutput[]
     */
    public function MessageTemplateAll(MessageTemplateAllInput $input = new MessageTemplateAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageTemplateAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): MessageTemplateAllOutput => MessageTemplateAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail šablony zprávy
     */
    public function MessageTemplateDetail(MessageTemplateDetailInput $input = new MessageTemplateDetailInput()): MessageTemplateDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageTemplateDetail', OperationRequest::from($input->toArray()));
        return MessageTemplateDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit šablonu zprávy
     */
    public function MessageTemplateUpdate(MessageTemplateUpdateInput $input = new MessageTemplateUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageTemplateUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam příjemců zprávy
     * @return MessageToAllOutput[]
     */
    public function MessageToAll(MessageToAllInput $input = new MessageToAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageToAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): MessageToAllOutput => MessageToAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Nastavit příjemci, že byl odeslaný
     */
    public function MessageToSent(MessageToSentInput $input = new MessageToSentInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageToSent', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam typů zpráv
     * @return MessageTypeAllOutput[]
     */
    public function MessageTypeAll(MessageTypeAllInput $input = new MessageTypeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageTypeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): MessageTypeAllOutput => MessageTypeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail typu zprávy
     */
    public function MessageTypeDetail(MessageTypeDetailInput $input = new MessageTypeDetailInput()): MessageTypeDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageTypeDetail', OperationRequest::from($input->toArray()));
        return MessageTypeDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit typ zprávy
     */
    public function MessageTypeUpdate(MessageTypeUpdateInput $input = new MessageTypeUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageTypeUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit zprávu
     */
    public function MessageUpdate(MessageUpdateInput $input = new MessageUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Smazat či obnovit zprávu
     */
    public function MessageUpdateDelete(MessageUpdateDeleteInput $input = new MessageUpdateDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageUpdateDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Ozančit zprávu jako přečtenou či nepřečtenou
     */
    public function MessageUpdateRead(MessageUpdateReadInput $input = new MessageUpdateReadInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageUpdateRead', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam proměnných v šablonách zpráv
     * @return MessageVariableAllOutput[]
     */
    public function MessageVariableAll(MessageVariableAllInput $input = new MessageVariableAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'MessageVariableAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): MessageVariableAllOutput => MessageVariableAllOutput::fromStdClass($item), $response->objects());
    }

}
