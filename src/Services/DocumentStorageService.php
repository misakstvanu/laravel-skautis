<?php

namespace Misakstvanu\LaravelSkautis\Services;

use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Data\OperationRequest;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\CloudAllInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\CloudDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\CloudDetailInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\CloudFolderCacheAllInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\CloudFolderCacheInsertInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\CloudInsertInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\CloudRequestAllInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\CloudRequestDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\CloudRequestDetailInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\CloudRequestInsertInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\CloudRequestUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\CloudStateAllInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\CloudStateDetailInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\CloudUpdateDocumentVersionInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\CloudUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentAllInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentAllUnusedInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentClassAllInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentClassDetailInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentDeleteDocumentInTableInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentDetailDataInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentDetailInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentInsertInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentUpdateDocumentInTableInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentUpdateInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentVersionAllInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentVersionAllToBackupInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentVersionDeleteInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentVersionDetailInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentVersionInsertInput;
use Misakstvanu\LaravelSkautis\Requests\DocumentStorage\DocumentVersionUpdateInput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\CloudAllOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\CloudDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\CloudFolderCacheAllOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\CloudFolderCacheInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\CloudInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\CloudRequestAllOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\CloudRequestDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\CloudRequestInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\CloudStateAllOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\CloudStateDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\DocumentAllOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\DocumentAllUnusedOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\DocumentClassAllOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\DocumentClassDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\DocumentDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\DocumentInsertOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\DocumentUpdateDocumentInTableOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\DocumentVersionAllOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\DocumentVersionAllToBackupOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\DocumentVersionDetailOutput;
use Misakstvanu\LaravelSkautis\Responses\DocumentStorage\DocumentVersionInsertOutput;

/**
 * Webová služba pro práci s dokumentovým úložištěm
 */
final class DocumentStorageService
{
    public const SERVICE_NAME = 'DocumentStorage';

    public function __construct(private readonly OperationExecutor $executor)
    {
    }

    /**
     * Načíst seznam cloudových záznamů
     * @return CloudAllOutput[]
     */
    public function CloudAll(CloudAllInput $input = new CloudAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CloudAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): CloudAllOutput => CloudAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat cloudový záznam
     */
    public function CloudDelete(CloudDeleteInput $input = new CloudDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CloudDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail cloudového záznamu
     */
    public function CloudDetail(CloudDetailInput $input = new CloudDetailInput()): CloudDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CloudDetail', OperationRequest::from($input->toArray()));
        return CloudDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam cache cloudového záznamu
     * @return CloudFolderCacheAllOutput[]
     */
    public function CloudFolderCacheAll(CloudFolderCacheAllInput $input = new CloudFolderCacheAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CloudFolderCacheAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): CloudFolderCacheAllOutput => CloudFolderCacheAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Založit cache cloudového záznamu
     */
    public function CloudFolderCacheInsert(CloudFolderCacheInsertInput $input = new CloudFolderCacheInsertInput()): CloudFolderCacheInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CloudFolderCacheInsert', OperationRequest::from($input->toArray()));
        return CloudFolderCacheInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit cloudový záznam
     */
    public function CloudInsert(CloudInsertInput $input = new CloudInsertInput()): CloudInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CloudInsert', OperationRequest::from($input->toArray()));
        return CloudInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam požadavků na dokument
     * @return CloudRequestAllOutput[]
     */
    public function CloudRequestAll(CloudRequestAllInput $input = new CloudRequestAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CloudRequestAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): CloudRequestAllOutput => CloudRequestAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat požadavek na dokument
     */
    public function CloudRequestDelete(CloudRequestDeleteInput $input = new CloudRequestDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CloudRequestDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail požadavku na dokument
     */
    public function CloudRequestDetail(CloudRequestDetailInput $input = new CloudRequestDetailInput()): CloudRequestDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CloudRequestDetail', OperationRequest::from($input->toArray()));
        return CloudRequestDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit požadavek na dokument
     */
    public function CloudRequestInsert(CloudRequestInsertInput $input = new CloudRequestInsertInput()): CloudRequestInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CloudRequestInsert', OperationRequest::from($input->toArray()));
        return CloudRequestInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit požadavek na dokument
     */
    public function CloudRequestUpdate(CloudRequestUpdateInput $input = new CloudRequestUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CloudRequestUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam stavů záznamu (v Cloudu)
     * @return CloudStateAllOutput[]
     */
    public function CloudStateAll(CloudStateAllInput $input = new CloudStateAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CloudStateAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): CloudStateAllOutput => CloudStateAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail stavu záznamu (v Cloudu)
     */
    public function CloudStateDetail(CloudStateDetailInput $input = new CloudStateDetailInput()): CloudStateDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CloudStateDetail', OperationRequest::from($input->toArray()));
        return CloudStateDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit cloudový záznam
     */
    public function CloudUpdate(CloudUpdateInput $input = new CloudUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CloudUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit cloudový záznam
     */
    public function CloudUpdateDocumentVersion(CloudUpdateDocumentVersionInput $input = new CloudUpdateDocumentVersionInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'CloudUpdateDocumentVersion', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst seznam dokumentů
     * @return DocumentAllOutput[]
     */
    public function DocumentAll(DocumentAllInput $input = new DocumentAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): DocumentAllOutput => DocumentAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam dokumentů
     * @return DocumentAllUnusedOutput[]
     */
    public function DocumentAllUnused(DocumentAllUnusedInput $input = new DocumentAllUnusedInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentAllUnused', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): DocumentAllUnusedOutput => DocumentAllUnusedOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam tříd dokumentu
     * @return DocumentClassAllOutput[]
     */
    public function DocumentClassAll(DocumentClassAllInput $input = new DocumentClassAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentClassAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): DocumentClassAllOutput => DocumentClassAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst detail třídy dokumentu
     */
    public function DocumentClassDetail(DocumentClassDetailInput $input = new DocumentClassDetailInput()): DocumentClassDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentClassDetail', OperationRequest::from($input->toArray()));
        return DocumentClassDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Smazat dokument
     */
    public function DocumentDelete(DocumentDeleteInput $input = new DocumentDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Smazat dokument v tabulce
     */
    public function DocumentDeleteDocumentInTable(DocumentDeleteDocumentInTableInput $input = new DocumentDeleteDocumentInTableInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentDeleteDocumentInTable', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail dokumentu
     */
    public function DocumentDetail(DocumentDetailInput $input = new DocumentDetailInput()): DocumentDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentDetail', OperationRequest::from($input->toArray()));
        return DocumentDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst data dokumentu
     */
    public function DocumentDetailData(DocumentDetailDataInput $input = new DocumentDetailDataInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentDetailData', OperationRequest::from($input->toArray()));
    }

    /**
     * Založit dokument
     */
    public function DocumentInsert(DocumentInsertInput $input = new DocumentInsertInput()): DocumentInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentInsert', OperationRequest::from($input->toArray()));
        return DocumentInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit dokument
     */
    public function DocumentUpdate(DocumentUpdateInput $input = new DocumentUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentUpdate', OperationRequest::from($input->toArray()));
    }

    /**
     * Upravit dokument v tabulce
     */
    public function DocumentUpdateDocumentInTable(DocumentUpdateDocumentInTableInput $input = new DocumentUpdateDocumentInTableInput()): DocumentUpdateDocumentInTableOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentUpdateDocumentInTable', OperationRequest::from($input->toArray()));
        return DocumentUpdateDocumentInTableOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Načíst seznam verzí dokumentu
     * @return DocumentVersionAllOutput[]
     */
    public function DocumentVersionAll(DocumentVersionAllInput $input = new DocumentVersionAllInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentVersionAll', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): DocumentVersionAllOutput => DocumentVersionAllOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Načíst seznam verzí dokumentu
     * @return DocumentVersionAllToBackupOutput[]
     */
    public function DocumentVersionAllToBackup(DocumentVersionAllToBackupInput $input = new DocumentVersionAllToBackupInput()): array
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentVersionAllToBackup', OperationRequest::from($input->toArray()));
        return array_map(fn (\stdClass $item): DocumentVersionAllToBackupOutput => DocumentVersionAllToBackupOutput::fromStdClass($item), $response->objects());
    }

    /**
     * Smazat verzi dokumentu
     */
    public function DocumentVersionDelete(DocumentVersionDeleteInput $input = new DocumentVersionDeleteInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentVersionDelete', OperationRequest::from($input->toArray()));
    }

    /**
     * Načíst detail verze dokumentu
     */
    public function DocumentVersionDetail(DocumentVersionDetailInput $input = new DocumentVersionDetailInput()): DocumentVersionDetailOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentVersionDetail', OperationRequest::from($input->toArray()));
        return DocumentVersionDetailOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Založit verzi dokumentu
     */
    public function DocumentVersionInsert(DocumentVersionInsertInput $input = new DocumentVersionInsertInput()): DocumentVersionInsertOutput
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentVersionInsert', OperationRequest::from($input->toArray()));
        return DocumentVersionInsertOutput::fromStdClass($response->firstObject() ?? new \stdClass());
    }

    /**
     * Upravit verzi dokumentu
     */
    public function DocumentVersionUpdate(DocumentVersionUpdateInput $input = new DocumentVersionUpdateInput()): void
    {
        $response = $this->executor->call(self::SERVICE_NAME, 'DocumentVersionUpdate', OperationRequest::from($input->toArray()));
    }

}
