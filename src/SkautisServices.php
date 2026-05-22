<?php

namespace Misakstvanu\LaravelSkautis;

use Misakstvanu\LaravelSkautis\Services\ApplicationManagementService;
use Misakstvanu\LaravelSkautis\Services\ContentManagementService;
use Misakstvanu\LaravelSkautis\Services\DocumentStorageService;
use Misakstvanu\LaravelSkautis\Services\EvaluationService;
use Misakstvanu\LaravelSkautis\Services\EventsService;
use Misakstvanu\LaravelSkautis\Services\ExportsService;
use Misakstvanu\LaravelSkautis\Services\GoogleAppsService;
use Misakstvanu\LaravelSkautis\Services\GrantsService;
use Misakstvanu\LaravelSkautis\Services\InsuranceService;
use Misakstvanu\LaravelSkautis\Services\JournalService;
use Misakstvanu\LaravelSkautis\Services\MaterialService;
use Misakstvanu\LaravelSkautis\Services\MessageService;
use Misakstvanu\LaravelSkautis\Services\OrganizationUnitService;
use Misakstvanu\LaravelSkautis\Services\PowerService;
use Misakstvanu\LaravelSkautis\Services\ReportsService;
use Misakstvanu\LaravelSkautis\Services\SummaryService;
use Misakstvanu\LaravelSkautis\Services\TelephonyNetworkService;
use Misakstvanu\LaravelSkautis\Services\UserManagementService;
use Misakstvanu\LaravelSkautis\Services\WelcomeService;

/** Central access point for all SkautIS webservice operations. */
final class SkautisServices
{
    public function __construct(
        private readonly ApplicationManagementService $applicationManagementService,
        private readonly ContentManagementService $contentManagementService,
        private readonly DocumentStorageService $documentStorageService,
        private readonly EvaluationService $evaluationService,
        private readonly EventsService $eventsService,
        private readonly ExportsService $exportsService,
        private readonly GoogleAppsService $googleAppsService,
        private readonly GrantsService $grantsService,
        private readonly InsuranceService $insuranceService,
        private readonly JournalService $journalService,
        private readonly MaterialService $materialService,
        private readonly MessageService $messageService,
        private readonly OrganizationUnitService $organizationUnitService,
        private readonly PowerService $powerService,
        private readonly ReportsService $reportsService,
        private readonly SummaryService $summaryService,
        private readonly TelephonyNetworkService $telephonyNetworkService,
        private readonly UserManagementService $userManagementService,
        private readonly WelcomeService $welcomeService,
    ) {}

    public function applicationManagement(): ApplicationManagementService
    {
        return $this->applicationManagementService;
    }

    public function contentManagement(): ContentManagementService
    {
        return $this->contentManagementService;
    }

    public function documentStorage(): DocumentStorageService
    {
        return $this->documentStorageService;
    }

    public function evaluation(): EvaluationService
    {
        return $this->evaluationService;
    }

    public function events(): EventsService
    {
        return $this->eventsService;
    }

    public function exports(): ExportsService
    {
        return $this->exportsService;
    }

    public function googleApps(): GoogleAppsService
    {
        return $this->googleAppsService;
    }

    public function grants(): GrantsService
    {
        return $this->grantsService;
    }

    public function insurance(): InsuranceService
    {
        return $this->insuranceService;
    }

    public function journal(): JournalService
    {
        return $this->journalService;
    }

    public function material(): MaterialService
    {
        return $this->materialService;
    }

    public function message(): MessageService
    {
        return $this->messageService;
    }

    public function organizationUnit(): OrganizationUnitService
    {
        return $this->organizationUnitService;
    }

    public function power(): PowerService
    {
        return $this->powerService;
    }

    public function reports(): ReportsService
    {
        return $this->reportsService;
    }

    public function summary(): SummaryService
    {
        return $this->summaryService;
    }

    public function telephonyNetwork(): TelephonyNetworkService
    {
        return $this->telephonyNetworkService;
    }

    public function userManagement(): UserManagementService
    {
        return $this->userManagementService;
    }

    public function welcome(): WelcomeService
    {
        return $this->welcomeService;
    }

}
