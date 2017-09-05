<?php namespace Tukecx\Base\Core\Facades;

use Illuminate\Support\Facades\Facade;

class BreadcrumbsFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Tukecx\Base\Core\Support\Breadcrumbs::class;
    }
}
