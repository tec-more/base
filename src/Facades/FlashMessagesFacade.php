<?php namespace Tukecx\Base\Core\Facades;

use Illuminate\Support\Facades\Facade;
use Tukecx\Base\Core\Services\FlashMessages;

class FlashMessagesFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return FlashMessages::class;
    }
}
