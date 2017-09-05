<?php

if (!function_exists('seo')) {
    /**
     * @return \Tukecx\Base\Core\Support\SEO
     */
    function seo()
    {
        return \Tukecx\Base\Core\Facades\SeoFacade::getFacadeRoot();
    }
}
