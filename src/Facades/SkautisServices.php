<?php
namespace Misakstvanu\LaravelSkautis\Facades;
use Illuminate\Support\Facades\Facade;
/**
 * Facade for accessing all SkautIS webservice operations.
 */
class SkautisServices extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Misakstvanu\LaravelSkautis\SkautisServices::class;
    }
}
