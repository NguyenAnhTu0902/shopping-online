<?php

namespace App\Services;

use App\Constants\CommonConstants;
use App\Repositories\Category\CategoryRepositoryInterface;

class CategoryService extends BaseService
{
    protected $mainRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepositoryInterface)
    {
        $this->mainRepository = $categoryRepositoryInterface;
    }

    public function list($data, $paginate = false, $select = CommonConstants::SELECT_ALL)
    {
        $categories = $this->mainRepository->list($data, $paginate, $select);
        return [
            'categories' => $categories,
            'itemStart' => $categories->firstItem(),
            'itemEnd' => $categories->lastItem(),
            'total' => $categories->total(),
            'lastPage' => $categories->lastPage(),
            'limit' => CommonConstants::DEFAULT_LIMIT_PAGE,
            'page' => $data[CommonConstants::INPUT_PAGE] ?? 1,
            'sort_column' => $data[CommonConstants::KEY_SORT_COLUMN] ?? "",
            'sort_type' => $data[CommonConstants::KEY_SORT_TYPE] ?? ""
        ];
    }
}
