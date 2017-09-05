<?php namespace Tukecx\Base\Core\Repositories;

use Tukecx\Base\Caching\Services\Traits\Cacheable;
use Tukecx\Base\Core\Models\Contracts\ViewTrackerModelContract;
use Tukecx\Base\Caching\Services\Contracts\CacheableContract;
use Tukecx\Base\Core\Models\ViewTracker;
use Tukecx\Base\Core\Repositories\Contracts\ViewTrackerRepositoryContract;
use Tukecx\Base\Core\Repositories\Eloquent\EloquentBaseRepository;

class ViewTrackerRepository extends EloquentBaseRepository implements ViewTrackerRepositoryContract, CacheableContract
{
    use Cacheable;

    protected $rules = [

    ];

    protected $editableFields = [
        '*',
    ];

    /**
     * @param ViewTracker $viewTracker
     * @return array
     */
    public function increase(ViewTrackerModelContract $viewTracker)
    {
        return $this->editWithValidate($viewTracker, [
            'count' => $viewTracker->count + 1
        ]);
    }
}
