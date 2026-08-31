<?php
namespace Misakstvanu\LaravelSkautis\Tests;
use JsonException;
use Misakstvanu\LaravelSkautis\OperationExecutor;
use Misakstvanu\LaravelSkautis\Requests\OrganizationUnit\PersonAllInput;
use Misakstvanu\LaravelSkautis\Requests\OrganizationUnit\UnitDetailInput;
use Misakstvanu\LaravelSkautis\Responses\OrganizationUnit\PersonAllOutput;
use Misakstvanu\LaravelSkautis\Services\EventsService;
use Misakstvanu\LaravelSkautis\Services\OrganizationUnitService;
use Misakstvanu\LaravelSkautis\Services\UserManagementService;
use Misakstvanu\LaravelSkautis\Testing\FakeOperationExecutor;
class FixtureSetTest extends TestCase
{
    private const EXPECTED_FIXTURES = [
        'Events/EventAll.json',
        'Events/EventCampAll.json',
        'Events/EventEducationAll.json',
        'OrganizationUnit/PersonAll.json',
        'OrganizationUnit/PersonContactAll.json',
        'OrganizationUnit/UnitAll.json',
        'OrganizationUnit/UnitDetail.json',
        'UserManagement/LoginUpdate.json',
        'UserManagement/UserDetail.json',
        'UserManagement/UserRoleAll.json',
    ];
    public function test_every_expected_fixture_file_exists(): void
    {
        foreach (self::EXPECTED_FIXTURES as $relative) {
            $this->assertFileExists($this->fixtureRoot().'/'.$relative);
        }
        $this->assertSame(self::EXPECTED_FIXTURES, $this->fixtureFiles());
    }
    public function test_every_fixture_is_decodable_utf8_without_a_bom(): void
    {
        foreach ($this->fixtureFiles() as $relative) {
            $contents = (string) file_get_contents($this->fixtureRoot().'/'.$relative);
            $this->assertStringStartsNotWith("\xEF\xBB\xBF", $contents, "{$relative} starts with a UTF-8 BOM");
            $this->assertTrue(mb_check_encoding($contents, 'UTF-8'), "{$relative} is not valid UTF-8");
            try {
                json_decode($contents, false, 512, JSON_THROW_ON_ERROR);
            } catch (JsonException $e) {
                $this->fail("{$relative} is not valid JSON: {$e->getMessage()}");
            }
        }
        $this->addToAssertionCount(1);
    }
    public function test_the_user_detail_fixture_maps_to_the_prototype_profile(): void
    {
        $user = $this->fakeDriver(UserManagementService::class)->UserDetail();
        $this->assertSame('Jan Novák', $user->person);
        $this->assertSame('jan.novak', $user->userName);
        $this->assertTrue($user->isActive);
        $this->assertSame(700123, $user->idPerson);
    }
    public function test_the_user_role_fixture_reproduces_the_three_prototype_organisations(): void
    {
        $roles = $this->fakeDriver(UserManagementService::class)->UserRoleAll();
        $this->assertCount(3, $roles);
        $this->assertSame(
            [[60001, '12. oddíl Střelka', 'Hospodář'], [60002, '3. oddíl Vlčata', 'Hospodář'], [60000, 'Středisko Modrá kotva Brno', 'Člen']],
            array_map(static fn ($role): array => [$role->idUnit, $role->unit, $role->displayName], $roles)
        );
    }
    public function test_the_login_update_fixture_returns_the_active_unit(): void
    {
        $this->assertSame(60001, $this->fakeDriver(UserManagementService::class)->LoginUpdate()->idUnit);
    }
    public function test_the_person_all_fixture_returns_the_nine_prototype_members(): void
    {
        $people = $this->fakeDriver(OrganizationUnitService::class)->PersonAll(new PersonAllInput(idUnit: 60001));
        $this->assertCount(9, $people);
        $this->assertContainsOnlyInstancesOf(PersonAllOutput::class, $people);
        $this->assertSame('Anna Nováková', $people[0]->displayName);
        $this->assertSame(
            ['Anna Nováková', 'Martin Dvořák', 'Jakub Kučera', 'Eliška Kučerová', 'Tereza Malá', 'Petr Horák', 'Tomáš Svoboda ml.', 'Petra Nováková', 'Jan Novák'],
            array_map(static fn (PersonAllOutput $person): ?string => $person->displayName, $people)
        );
    }
    public function test_the_unit_detail_fixture_walks_up_to_the_stredisko(): void
    {
        $service = $this->fakeDriver(OrganizationUnitService::class);
        $oddil = $service->UnitDetail(new UnitDetailInput(id: 60001));
        $this->assertSame(60001, $oddil->id);
        $this->assertSame('12. oddíl Střelka', $oddil->displayName);
        $this->assertSame('614.02.12', $oddil->registrationNumber);
        $this->assertSame(60000, $oddil->idUnitParent);
        /*
         * One fixture file answers every `UnitDetail` call, so the second hop of
         * the recursive parent walk in the app's `SkautisSyncService` has to be
         * stubbed — the středisko is the row that terminates it.
         */
        $executor = $this->app->make(OperationExecutor::class);
        $this->assertInstanceOf(FakeOperationExecutor::class, $executor);
        $executor->stub('OrganizationUnit', 'UnitDetail', ['ID' => 60000, 'DisplayName' => 'Středisko Modrá kotva Brno', 'RegistrationNumber' => '614.02', 'ID_UnitParent' => null]);
        $stredisko = $service->UnitDetail(new UnitDetailInput(id: 60000));
        $this->assertSame(60000, $stredisko->id);
        $this->assertNull($stredisko->idUnitParent);
    }
    public function test_the_unit_all_fixture_lists_the_stredisko_and_both_oddils(): void
    {
        $units = $this->fakeDriver(OrganizationUnitService::class)->UnitAll();
        $this->assertSame(
            ['Středisko Modrá kotva Brno', '12. oddíl Střelka', '3. oddíl Vlčata'],
            array_map(static fn ($unit): ?string => $unit->displayName, $units)
        );
    }
    public function test_the_person_contact_fixture_carries_a_matchable_mail_address(): void
    {
        $contacts = $this->fakeDriver(OrganizationUnitService::class)->PersonContactAll();
        $mails = array_values(array_filter($contacts, static fn ($contact): bool => str_contains(strtolower((string) $contact->idContactType), 'mail')));
        $this->assertNotEmpty($mails);
        $this->assertNotFalse(filter_var($mails[0]->value, FILTER_VALIDATE_EMAIL));
        $this->assertSame('jan.novak@skaut.cz', $mails[0]->displayValue);
    }
    public function test_the_event_fixtures_carry_czech_names_and_parsable_dates(): void
    {
        $events = $this->fakeDriver(EventsService::class)->EventAll();
        $this->assertCount(4, $events);
        $this->assertSame('Podzimní výprava Rokytná', $events[0]->displayName);
        $this->assertSame('2026-10-03T00:00:00', $events[0]->startDate);
        $this->assertSame(60001, $events[0]->idUnit);
        $this->assertSame('draft', $events[0]->idEventState);
        $camps = $this->fakeDriver(EventsService::class)->EventCampAll();
        $this->assertCount(2, $camps);
        $this->assertSame('Letní tábor Jestřebí', $camps[0]->displayName);
        $this->assertSame('closed', $camps[0]->idEventCampState);
        $educations = $this->fakeDriver(EventsService::class)->EventEducationAll();
        $this->assertCount(2, $educations);
        $this->assertSame('Čekatelský kurz – jarní část', $educations[0]->displayName);
        $this->assertSame('closed', $educations[0]->idEventEducationState);
    }
    /**
     * @template T of object
     *
     * @param  class-string<T>  $service
     * @return T
     */
    private function fakeDriver(string $service): object
    {
        config(['skautis.driver' => 'fake', 'skautis.fixture_path' => null]);
        $this->app->forgetInstance(OperationExecutor::class);
        $this->app->forgetInstance($service);
        return $this->app->make($service);
    }
    private function fixtureRoot(): string
    {
        return __DIR__.'/fixtures';
    }
    /** @return list<string> */
    private function fixtureFiles(): array
    {
        $files = [];
        foreach (glob($this->fixtureRoot().'/*/*.json') ?: [] as $path) {
            $files[] = str_replace($this->fixtureRoot().'/', '', str_replace(DIRECTORY_SEPARATOR, '/', $path));
        }
        sort($files);
        return $files;
    }
}
