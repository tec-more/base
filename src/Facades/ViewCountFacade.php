<?php namespace Tukecx\Base\Core\Facades;

use Illuminate\Support\Facades\Facade;
use Tukecx\Base\Core\Support\ViewCount;

class ViewCountFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ViewCount::class;
    }
}
