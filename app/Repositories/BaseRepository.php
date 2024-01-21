<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Constants\CommonConstants;

abstract class BaseRepository
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct()
    {
        $this->setModel();
    }

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    abstract public function getModel();

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * @param [type] $id
     * @param array $attributes
     * @param array $options
     * @return void
     */
    public function update($id, array $attributes, array $options = [])
    {
        $result = $this->find($id);
        if (!$result) {
            return false;
        }
        $result->update($attributes, $options);
        return $result;
    }

    /**
     * @param array $columns
     * @param $orderBy
     * @param $sortBy
     * @return mixed
     */
    public function all($columns = ['*'], $orderBy = 'id', $sortBy = 'asc')
    {
        return $this->model->orderBy($orderBy, $sortBy)->get($columns);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param  $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findOneOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * @param array $data
     * @return Collection
     */
    public function findBy(array $data, $columns)
    {
        return $this->model->where($data)->get($columns);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function findOneBy(array $data)
    {
        return $this->model->where($data)->first();
    }

    /**
     * @param array $data
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findOneByOrFail(array $data)
    {
        return $this->model->where($data)->firstOrFail();
    }

    /**
     * @return bool
     * @throws \Exception
     */
    public function deleteAll(): bool
    {
        return $this->model->delete();
    }

    public function findByAttrFirst($attr, $value)
    {
        return !is_null($attr) ? $this->model::where($attr, $value)->first() : null;
    }

    public function pluckAttrId($attr)
    {
        return !is_null($attr) ? $this->model::pluck($attr, 'id')->all() : collect([]);
    }

    public function deleteByAttr($attr, $value)
    {
        return !is_null($attr) ? $this->model::where($attr, $value)->delete() : false;
    }

    public function findByAttrInArray($attr, $array)
    {
        return !is_null($attr) ? $this->model::whereIn($attr, $array)->get() : collect([]);
    }

    public function updateOrCreateModel($data)
    {
        return !is_null($data) ? $this->model::updateOrCreate($data) : false;
    }

    public function arrayAttrId($attr)
    {
        return !is_null($attr) ? $this->model::pluck($attr, 'id')->toArray() : [];
    }

    public function getAllWithRelationship(
        $relations = [''],
        $columns = ['*'],
        $orderBy = 'id',
        $sortBy = 'asc'
    ) {
        return $this->model->with($relations)->orderBy($orderBy, $sortBy)->get($columns);
    }

    public function orderBy($orderBy, $sortBy, $data)
    {
        return $this->model->where($data)->orderBy($orderBy, $sortBy)->get();
    }

    public function findByWithRelationship(
        array $relations,
        array $data,
    ) {
        return $this->model->with($relations)->where($data)->get();
    }

    public function whereIn($column, array $data, $relations)
    {
        return $this->model->with($relations)->whereIn($column, $data);
    }


    /**
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    protected function paginate(Builder $query, array $pagination)
    {
        return $query->paginate(
            $pagination[CommonConstants::INPUT_PAGE_SIZE],
            CommonConstants::SELECT_ALL,
            CommonConstants::INPUT_PAGE,
            $pagination[CommonConstants::INPUT_PAGE]
        );
    }

    /**
     * Handle data paginate
     *
     * @param array $data
     *
     * @return array
     */
    public function handlePaginate($data)
    {
        $page[CommonConstants::INPUT_PAGE_SIZE] = CommonConstants::DEFAULT_LIMIT_PAGE;
        $page[CommonConstants::INPUT_PAGE] = CommonConstants::PAGE_DEFAULT;
        if (!empty($data[CommonConstants::KEY_LIMIT])) {
            $page[CommonConstants::INPUT_PAGE_SIZE] = $data[CommonConstants::KEY_LIMIT];
        }
        if (isset($data[CommonConstants::INPUT_PAGE])) {
            $pageNumber = (int)$data[CommonConstants::INPUT_PAGE];
            $page[CommonConstants::INPUT_PAGE] = $pageNumber;
        }
        return $page;
    }

    /**
     * Select column
     *
     * @param array $select
     *
     * @return Builder
     */
    public function select(array $select): Builder
    {
        return $this->model->select($select);
    }

    public function saveMultipleData(array $data)
    {
        return $this->model->insert($data);
    }

}
