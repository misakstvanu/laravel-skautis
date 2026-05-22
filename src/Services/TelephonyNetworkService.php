<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\TelephonyNetwork\EnrollAllInput;
use Misakstvanu\LaravelSkautis\Requests\TelephonyNetwork\EnrollDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\TelephonyNetwork\EnrollDetailInput;
use Misakstvanu\LaravelSkautis\Requests\TelephonyNetwork\EnrollDetailLoginInput;
use Misakstvanu\LaravelSkautis\Requests\TelephonyNetwork\EnrollInsertPersonInput;
use Misakstvanu\LaravelSkautis\Requests\TelephonyNetwork\EnrollUpdateCancelInput;
use Misakstvanu\LaravelSkautis\Requests\TelephonyNetwork\EntryCodeAllInput;
use Misakstvanu\LaravelSkautis\Requests\TelephonyNetwork\EntryCodeDetailValidInput;
use Misakstvanu\LaravelSkautis\Requests\TelephonyNetwork\PersonNumberInfoAllInput;
use Misakstvanu\LaravelSkautis\Responses\TelephonyNetwork\EnrollAllOutput;
use Misakstvanu\LaravelSkautis\Responses\TelephonyNetwork\EnrollDetailLoginOutput;
use Misakstvanu\LaravelSkautis\Responses\TelephonyNetwork\EnrollDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\TelephonyNetwork\EnrollInsertPersonOutput;
use Misakstvanu\LaravelSkautis\Responses\TelephonyNetwork\EntryCodeAllOutput;
use Misakstvanu\LaravelSkautis\Responses\TelephonyNetwork\EntryCodeDetailValidOutput;
use Misakstvanu\LaravelSkautis\Responses\TelephonyNetwork\PersonNumberInfoAllOutput;

/**
 * Skautská telefonní síť (nová)
 */
final class TelephonyNetworkService
{
    public const SERVICE_NAME = 'TelephonyNetwork';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam přihlášek do STS
     * @return EnrollAllOutput[]
     */
    public function EnrollAll(EnrollAllInput $input = new EnrollAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EnrollAllOutput => EnrollAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat přihlášku do STS
     */
    public function EnrollDelete(EnrollDeleteInput $input = new EnrollDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail přihlášky do STS
     */
    public function EnrollDetail(EnrollDetailInput $input = new EnrollDetailInput()): EnrollDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollDetail', OperationRequest::from($input->toArray()));
        return EnrollDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst přihlášku uživatele
     */
    public function EnrollDetailLogin(EnrollDetailLoginInput $input = new EnrollDetailLoginInput()): EnrollDetailLoginOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollDetailLogin', OperationRequest::from($input->toArray()));
        return EnrollDetailLoginOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit přihlášku do STS pro osobu
     */
    public function EnrollInsertPerson(EnrollInsertPersonInput $input = new EnrollInsertPersonInput()): EnrollInsertPersonOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollInsertPerson', OperationRequest::from($input->toArray()));
        return EnrollInsertPersonOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Ukončit přihlášku do STS
     */
    public function EnrollUpdateCancel(EnrollUpdateCancelInput $input = new EnrollUpdateCancelInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EnrollUpdateCancel', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam přístupových kódu do STS
     * @return EntryCodeAllOutput[]
     */
    public function EntryCodeAll(EntryCodeAllInput $input = new EntryCodeAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EntryCodeAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): EntryCodeAllOutput => EntryCodeAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail platného přístupového kódu do STS
     */
    public function EntryCodeDetailValid(EntryCodeDetailValidInput $input = new EntryCodeDetailValidInput()): EntryCodeDetailValidOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'EntryCodeDetailValid', OperationRequest::from($input->toArray()));
        return EntryCodeDetailValidOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst informace o telefonních číslech v STS
     * @return PersonNumberInfoAllOutput[]
     */
    public function PersonNumberInfoAll(PersonNumberInfoAllInput $input = new PersonNumberInfoAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'PersonNumberInfoAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): PersonNumberInfoAllOutput => PersonNumberInfoAllOutput::fromStdClass($item), $response->objects());
    }

}
