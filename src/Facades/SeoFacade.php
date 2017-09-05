<?php namespace Tukecx\Base\Core\Facades;

use Illuminate\Support\Facades\Facade;
use Tukecx\Base\Core\Support\SEO;
use Tukecx\Base\Core\Support\ViewCount;

class SeoFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return SEO::class;
    }
}
