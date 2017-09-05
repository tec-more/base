<?php

if (!function_exists('breadcrumbs')) {
    /**
     * @return \Tukecx\Base\Core\Support\Breadcrumbs
     */
    function breadcrumbs()
    {
        return \Tukecx\Base\Core\Facades\BreadcrumbsFacade::getFacadeRoot();
    }
}