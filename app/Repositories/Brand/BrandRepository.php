<?php

namespace App\Repositories\Brand;

use App\Constants\CommonConstants;
use App\Models\Brand;
use App\Repositories\BaseRepository;

class BrandRepository extends BaseRepository implements BrandRepositoryInterface
{
    /**
     * @var model
     */
    protected $model;

    /**
     * @return string
     */
    public function getModel()
    {
        return Brand::class;
    }

    public function list(array $data, $paginate, $select)
    {
        $query = $this->model->select($select);
        if (isset($data[CommonConstants::KEYWORD])) {
            $keyword = $data[CommonConstants::KEYWORD];
            foreach ($keyword as $key => $value) {
                if (isset($value) && $value !== "") {
                    $query->where($key, CommonConstants::OPERATOR_LIKE, "%{$value}%");
                }
            }
        }

        if (!empty($data[CommonConstants::KEY_SORT_COLUMN]) && !empty($data[CommonConstants::KEY_SORT_TYPE])) {
            $sort = [
                $data[CommonConstants::KEY_SORT_COLUMN] => $data[CommonConstants::KEY_SORT_TYPE]
            ];
            $query = $this->sort($query, $sort);
        }

        if ($paginate) {
            $query = $this->paginate($query, $this->handlePaginate($data));
        }
        return $query;
    }
}
