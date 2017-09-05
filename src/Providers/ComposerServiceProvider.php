<?php namespace Tukecx\Base\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Tukecx\Base\Core\Http\ViewComposers\AdminBreadcrumbsViewComposer;
use Tukecx\Base\Core\Http\ViewComposers\BasePartialsViewComposer;

class ComposerServiceProvider extends ServiceProvider
{
    protected $module = 'Tukecx\Base\Core';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            'tukecx-core::admin._partials.breadcrumbs',
        ], AdminBreadcrumbsViewComposer::class);
        view()->composer([
            'tukecx-core::front._admin-bar',
            'tukecx-core::admin._partials.header',
            'tukecx-core::admin._partials.sidebar',
        ], BasePartialsViewComposer::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
