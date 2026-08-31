<?php

namespace Misakstvanu\LaravelSkautis;

use Illuminate\Support\ServiceProvider;
use Misakstvanu\LaravelSkautis\Contracts\OperationExecutorInterface;
use Misakstvanu\LaravelSkautis\Support\LaravelSessionAdapter;
use Skautis\Config;
use Skautis\Skautis;
use Skautis\User as SkautisUser;
use Skautis\Wsdl\WebServiceFactory;
use Skautis\Wsdl\WsdlManager;
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

class LaravelSkautisServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/skautis.php', 'skautis');

        $this->app->singleton(Skautis::class, function (): Skautis {
            $appId = config('skautis.app_id') ?: 'test-placeholder';
            $config = new Config($appId, (bool) config('skautis.test_mode'));
            $webServiceFactory = new WebServiceFactory();
            $wsdlManager = new WsdlManager($webServiceFactory, $config);
            $sessionAdapter = new LaravelSessionAdapter();
            $user = new SkautisUser($wsdlManager, $sessionAdapter);
            return new Skautis($wsdlManager, $user);
        });
        $this->app->singleton(OperationExecutor::class, fn ($app) => new OperationExecutor($app->make(Skautis::class)));
        $this->app->alias(OperationExecutor::class, OperationExecutorInterface::class);
        $this->app->singleton(ApplicationManagementService::class);
        $this->app->singleton(ContentManagementService::class);
        $this->app->singleton(DocumentStorageService::class);
        $this->app->singleton(EvaluationService::class);
        $this->app->singleton(EventsService::class);
        $this->app->singleton(ExportsService::class);
        $this->app->singleton(GoogleAppsService::class);
        $this->app->singleton(GrantsService::class);
        $this->app->singleton(InsuranceService::class);
        $this->app->singleton(JournalService::class);
        $this->app->singleton(MaterialService::class);
        $this->app->singleton(MessageService::class);
        $this->app->singleton(OrganizationUnitService::class);
        $this->app->singleton(PowerService::class);
        $this->app->singleton(ReportsService::class);
        $this->app->singleton(SummaryService::class);
        $this->app->singleton(TelephonyNetworkService::class);
        $this->app->singleton(UserManagementService::class);
        $this->app->singleton(WelcomeService::class);
        $this->app->singleton(SkautisServices::class);
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/skautis.php' => config_path('skautis.php'),
        ], 'skautis-config');
    }
}
