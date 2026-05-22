<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\Insurance\AmountPersonAllInput;
use Misakstvanu\LaravelSkautis\Requests\Insurance\AmountPersonDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Insurance\AmountPersonDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Insurance\AmountPersonInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Insurance\AmountPersonUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Insurance\PersonAllInput;
use Misakstvanu\LaravelSkautis\Requests\Insurance\PersonAllRegistrationInput;
use Misakstvanu\LaravelSkautis\Requests\Insurance\PersonAllUnitInput;
use Misakstvanu\LaravelSkautis\Requests\Insurance\PersonDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\Insurance\PersonDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Insurance\PersonUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\Insurance\RegistrationAllPostFailedInput;
use Misakstvanu\LaravelSkautis\Requests\Insurance\RegistrationDetailInput;
use Misakstvanu\LaravelSkautis\Requests\Insurance\RegistrationInsertInput;
use Misakstvanu\LaravelSkautis\Requests\Insurance\RegistrationUpdateInput;
use Misakstvanu\LaravelSkautis\Responses\Insurance\AmountPersonAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Insurance\AmountPersonDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Insurance\AmountPersonInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\Insurance\PersonAllOutput;
use Misakstvanu\LaravelSkautis\Responses\Insurance\PersonAllRegistrationOutput;
use Misakstvanu\LaravelSkautis\Responses\Insurance\PersonAllUnitOutput;
use Misakstvanu\LaravelSkautis\Responses\Insurance\PersonDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Insurance\RegistrationAllPostFailedOutput;
use Misakstvanu\LaravelSkautis\Responses\Insurance\RegistrationDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\Insurance\RegistrationInsertOutput;

/**
 * Webová služba pro práci s pojištěním osoby
 */
final class InsuranceService
{
    public const SERVICE_NAME = 'Insurance';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam Částek za rok
     * @return AmountPersonAllOutput[]
     */
    public function AmountPersonAll(AmountPersonAllInput $input = new AmountPersonAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'AmountPersonAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): AmountPersonAllOutput => AmountPersonAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat Částku za rok
     */
    public function AmountPersonDelete(AmountPersonDeleteInput $input = new AmountPersonDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'AmountPersonDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail Částky za rok
     */
    public function AmountPersonDetail(AmountPersonDetailInput $input = new AmountPersonDetailInput()): AmountPersonDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'AmountPersonDetail', OperationRequest::from($input->toArray()));
        return AmountPersonDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit Částku za rok
     */
    public function AmountPersonInsert(AmountPersonInsertInput $input = new AmountPersonInsertInput()): AmountPersonInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'AmountPersonInsert', OperationRequest::from($input->toArray()));
        return AmountPersonInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit Částku za rok
     */
    public function AmountPersonUpdate(AmountPersonUpdateInput $input = new AmountPersonUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'AmountPersonUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam pojištění osob
     * @return PersonAllOutput[]
     */
    public function PersonAll(PersonAllInput $input = new PersonAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): PersonAllOutput => PersonAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam pojištěných osob
     * @return PersonAllRegistrationOutput[]
     */
    public function PersonAllRegistration(PersonAllRegistrationInput $input = new PersonAllRegistrationInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonAllRegistration', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): PersonAllRegistrationOutput => PersonAllRegistrationOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam osob pro pojištění
     * @return PersonAllUnitOutput[]
     */
    public function PersonAllUnit(PersonAllUnitInput $input = new PersonAllUnitInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonAllUnit', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): PersonAllUnitOutput => PersonAllUnitOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat pojištění osoby
     */
    public function PersonDelete(PersonDeleteInput $input = new PersonDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail pojištění osoby
     */
    public function PersonDetail(PersonDetailInput $input = new PersonDetailInput()): PersonDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonDetail', OperationRequest::from($input->toArray()));
        return PersonDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit pojištění osoby
     */
    public function PersonUpdate(PersonUpdateInput $input = new PersonUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam registrací, u kterých selhalo odeslání
     * @return RegistrationAllPostFailedOutput[]
     */
    public function RegistrationAllPostFailed(RegistrationAllPostFailedInput $input = new RegistrationAllPostFailedInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RegistrationAllPostFailed', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): RegistrationAllPostFailedOutput => RegistrationAllPostFailedOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail registrace
     */
    public function RegistrationDetail(RegistrationDetailInput $input = new RegistrationDetailInput()): RegistrationDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RegistrationDetail', OperationRequest::from($input->toArray()));
        return RegistrationDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit registraci
     */
    public function RegistrationInsert(RegistrationInsertInput $input = new RegistrationInsertInput()): RegistrationInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RegistrationInsert', OperationRequest::from($input->toArray()));
        return RegistrationInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit registraci
     */
    public function RegistrationUpdate(RegistrationUpdateInput $input = new RegistrationUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'RegistrationUpdate', OperationRequest::from($input->toArray()));
    }

}
