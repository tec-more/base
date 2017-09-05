<?php namespace Tukecx\Base\Core\Criterias\Contracts;

use Tukecx\Base\Core\Models\Contracts\BaseModelContract;
use Tukecx\Base\Core\Repositories\AbstractBaseRepository;
use Tukecx\Base\Core\Repositories\Contracts\AbstractRepositoryContract;

interface CriteriaContract
{
    /**
     * @param $model
     * @param AbstractRepositoryContract $repository
     * @param array $crossData
     * @return mixed
     */
    public function apply($model, AbstractRepositoryContract $repository, array $crossData = []);
}
