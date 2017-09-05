<?php namespace Tukecx\Base\Core\Support;

use Tukecx\Base\Core\Models\Contracts\BaseModelContract;
use Tukecx\Base\Core\Models\EloquentBase;
use Tukecx\Base\Core\Repositories\Contracts\ViewTrackerRepositoryContract;
use Tukecx\Base\Core\Repositories\ViewTrackerRepository;

class ViewCount
{
    /**
     * @var ViewTrackerRepositoryContract|ViewTrackerRepository
     */
    protected $repository;

    /**
     * ViewCount constructor.
     * @param ViewTrackerRepository $repository
     */
    public function __construct(ViewTrackerRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param EloquentBase|string $entity
     * @param $entityId
     */
    public function increase($entity, $entityId)
    {
        if ($entity instanceof BaseModelContract) {
            $entity = get_class($entity);
        }
        $viewTracker = $this->repository->findByFieldsOrCreate([
            'entity' => $entity,
            'entity_id' => $entityId,
        ]);
        return $this->repository->increase($viewTracker);
    }
}
