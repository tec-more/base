<?php namespace Tukecx\Base\Core\Http\Controllers;

class DashboardController extends BaseAdminController
{
    protected $module = 'tukecx-core';

    public function __construct()
    {
        parent::__construct();

        $this->getDashboardMenu('tukecx-dashboard');
    }

    public function getIndex()
    {
        return do_filter('dashboard.index.get', $this)->viewAdmin('dashboard');
    }
}
