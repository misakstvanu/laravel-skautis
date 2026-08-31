<?php
namespace Misakstvanu\LaravelSkautis;
use Misakstvanu\LaravelSkautis\Contracts\OperationExecutorInterface;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Data\OperationResponse;
use Skautis\Skautis;
use Skautis\User;
use Skautis\Wsdl\WsdlException;
/**
 * Executes SkautIS SOAP operations via the underlying Skautis PHP library.
 */
class OperationExecutor implements OperationExecutorInterface
{
    public function __construct(private readonly Skautis $skautis) {}
    public function call(string $service, string $operation, OperationRequest $request): OperationResponse
    {
        try {
            $webService = $this->skautis->getWebService($service);
        } catch (WsdlException) {
            $options = $this->skautis->getConfig()->getSoapOptions();
            $options[User::ID_LOGIN] = $this->skautis->getUser()->getLoginId();
            $webService = $this->skautis->getWsdlManager()->createWebService($service, $options);
        }
        $result = $webService->call($operation, [$request->toArray()]);
        return OperationResponse::from($result);
    }
}
