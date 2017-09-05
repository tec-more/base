<?php namespace Tukecx\Base\Core\Criterias\Filter;

use Illuminate\Database\Eloquent\Builder;
use Tukecx\Base\Core\Models\EloquentBase;
use Tukecx\Base\Core\Repositories\Contracts\AbstractRepositoryContract;
use Tukecx\Base\Core\Criterias\AbstractCriteria;

class WithViewTracker extends AbstractCriteria
{
     /**
      * @param EloquentBase|Builder $model
      * @param AbstractRepositoryContract $repository
      * @param array $crossData
      * @return mixed
      */
    public function apply($model, AbstractRepositoryContract $repository, array $crossData = [])
    {
        $tableName = $crossData['table'];
        $primaryKey = $crossData['primaryKey'];

        return $model
            ->join('view_trackers', $tableName . '.' . $primaryKey, '=', 'view_trackers.entity_id')
            ->where('view_trackers.entity', '=', $crossData['modelClass']);
    }
}
