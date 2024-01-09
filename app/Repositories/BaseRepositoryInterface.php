<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface BaseRepositoryInterface
{
    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * @param $id
     * @param array $attributes
     * @param array $options
     *
     * @return mixed
     */
    public function update($id, array $attributes, array $options = []);

    /**
     * @param array $columns
     * @param $orderBy
     * @param $sortBy
     * @return mixed
     */
    public function all($columns, $orderBy, $sortBy);

    /**
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * @param $id
     * @return mixed
     */
    public function findOneOrFail($id);

    /**
     * @param array $data
     * @return mixed
     */
    public function findBy(array $data, $columns);

    /**
     * @param array $data
     * @return mixed
     */
    public function findOneBy(array $data);

    /**
     * @param array $data
     * @return mixed
     */
    public function findOneByOrFail(array $data);

    /**
     * @return bool
     */
    public function deleteAll();

    public function findByAttrFirst($attr, $value);

    public function pluckAttrId($attr);

    public function deleteByAttr($attr, $value);

    public function findByAttrInArray($attr, $array);

    public function updateOrCreateModel($data);

    public function findByWithRelationship(
        array $relations,
        array $data,
        $columns,
        $orderBy,
        $sortBy
    );

    public function getAllWithRelationship(
        $relations = [''],
        $columns = ['*'],
        $orderBy = 'id',
        $sortBy = 'asc'
    );

    public function whereIn($column, array $data, $relations);

}
