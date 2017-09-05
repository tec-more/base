<?php namespace Tukecx\Base\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Tukecx\Base\Core\Models\ViewTracker;
use Tukecx\Base\Core\Repositories\Contracts\ViewTrackerRepositoryContract;
use Tukecx\Base\Core\Repositories\ViewTrackerRepository;
use Tukecx\Base\Core\Repositories\ViewTrackerRepositoryCacheDecorator;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ViewTrackerRepositoryContract::class, function () {
            $repository = new ViewTrackerRepository(new ViewTracker());

            if (config('tukecx-caching.repository.enabled')) {
                return new ViewTrackerRepositoryCacheDecorator($repository);
            }

            return $repository;
        });
    }
}
