<?php namespace Tukecx\Base\Core\Facades;

use Illuminate\Support\Facades\Facade;
use Tukecx\Base\Core\Support\DataTable\DataTables;

class DataTablesFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DataTables::class;
    }
}
