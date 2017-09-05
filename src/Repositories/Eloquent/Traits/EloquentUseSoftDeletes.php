<?php namespace Tukecx\Base\Core\Repositories\Eloquent\Traits;

use Illuminate\Database\Eloquent\SoftDeletes;
use Tukecx\Base\Core\Models\EloquentBase;

/**
 * @property SoftDeletes|EloquentBase $model
 */
trait EloquentUseSoftDeletes
{
    /**
     * @return $this
     */
    public function withTrashed()
    {
        $this->model = $this->model->withTrashed();
        return $this;
    }

    /**
     * @return $this
     */
    public function withoutTrashed()
    {
        $this->model = $this->model->withoutTrashed();
        return $this;
    }

    /**
     * @param bool $bool
     * @return $this
     */
    public function onlyTrashed($bool = true)
    {
        $this->model = $this->model->onlyTrashed();
        return $this;
    }

    /**
     * @param \Tukecx\Base\Core\Models\Contracts\BaseModelContract|int|array|null $id
     * @return array
     */
    public function restore($id = null)
    {
        if ($id) {
            if (is_array($id)) {
                $this->model = $this->model->withTrashed()->whereIn('id', $id);
            } elseif ($id instanceof \Illuminate\Database\Eloquent\SoftDeletes) {
                $this->model = $id;
            } else {
                $this->model = $this->model->withTrashed()->where('id', '=', $id);
            }
        } else {
            $this->applyCriteria();
        }

        try {
            $this->model->restore();
        } catch (\Exception $exception) {
            $this->resetModel();
            return response_with_messages([$exception->getMessage()], true, \Constants::ERROR_CODE);
        }
        $this->resetModel();
        return response_with_messages(['Request completed'], false, \Constants::SUCCESS_NO_CONTENT_CODE);
    }

    /**
     * Delete items by id
     * @param \Tukecx\Base\Core\Models\Contracts\BaseModelContract|int|array|null $id
     * @return array
     */
    public function forceDelete($id = null)
    {
        if ($id) {
            if (is_array($id)) {
                $this->model = $this->model->withTrashed()->whereIn('id', $id);
            } elseif ($id instanceof \Illuminate\Database\Eloquent\SoftDeletes) {
                $this->model = $id;
            } else {
                $this->model = $this->model->withTrashed()->where('id', '=', $id);
            }
        } else {
            $this->applyCriteria();
        }

        try {
            $this->model->forceDelete();
        } catch (\Exception $exception) {
            $this->resetModel();
            return response_with_messages([$exception->getMessage()], true, \Constants::ERROR_CODE);
        }
        $this->resetModel();
        return response_with_messages(['Request completed'], false, \Constants::SUCCESS_NO_CONTENT_CODE);
    }
}
