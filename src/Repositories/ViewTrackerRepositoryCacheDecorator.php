<?php namespace Tukecx\Base\Core\Repositories;

use Tukecx\Base\Caching\Repositories\Eloquent\EloquentBaseRepositoryCacheDecorator;

use Tukecx\Base\Core\Models\Contracts\ViewTrackerModelContract;
use Tukecx\Base\Core\Repositories\Contracts\ViewTrackerRepositoryContract;

class ViewTrackerRepositoryCacheDecorator extends EloquentBaseRepositoryCacheDecorator  implements ViewTrackerRepositoryContract
{
    /**
     * @param ViewTrackerModelContract $viewTracker
     * @return array
     */
    public function increase(ViewTrackerModelContract $viewTracker)
    {
        return $this->afterUpdate(__FUNCTION__, func_get_args());
    }
}
