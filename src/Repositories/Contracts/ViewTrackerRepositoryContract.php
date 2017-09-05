<?php namespace Tukecx\Base\Core\Repositories\Contracts;

use Tukecx\Base\Core\Models\Contracts\ViewTrackerModelContract;

interface ViewTrackerRepositoryContract
{
    /**
     * @param ViewTrackerModelContract $viewTracker
     * @return array
     */
    public function increase(ViewTrackerModelContract $viewTracker);
}
