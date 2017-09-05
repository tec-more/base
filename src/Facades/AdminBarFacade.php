<?php namespace Tukecx\Base\Core\Facades;

use Illuminate\Support\Facades\Facade;
use Tukecx\Base\Core\Support\AdminBar;

class AdminBarFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return AdminBar::class;
    }
}
