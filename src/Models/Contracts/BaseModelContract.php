<?php namespace Tukecx\Base\Core\Models\Contracts;

interface BaseModelContract
{
    /**
     * Get primary key
     * @return string
     */
    public function getPrimaryKey();

    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable();
}
