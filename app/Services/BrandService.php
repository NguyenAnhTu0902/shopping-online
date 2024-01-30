<?php

namespace App\Services;

use App\Constants\CommonConstants;
use App\Repositories\Brand\BrandRepositoryInterface;

class BrandService extends BaseService
{
    protected $mainRepository;

    /**
     * Constructor
     * Before
     * @param BrandRepositoryInterface $brandRepositoryInterface
     */
    public function __construct(BrandRepositoryInterface $brandRepositoryInterface)
    {
        $this->mainRepository = $brandRepositoryInterface;
    }

    public function list($data, $paginate = false, $select = CommonConstants::SELECT_ALL)
    {
        $brands = $this->mainRepository->list($data, $paginate, $select);
        return [
            'brands' => $brands,
            'itemStart' => $brands->firstItem(),
            'itemEnd' => $brands->lastItem(),
            'total' => $brands->total(),
            'lastPage' => $brands->lastPage(),
            'limit' => CommonConstants::DEFAULT_LIMIT_PAGE,
            'page' => $data[CommonConstants::INPUT_PAGE] ?? 1,
            'sort_column' => $data[CommonConstants::KEY_SORT_COLUMN] ?? "",
            'sort_type' => $data[CommonConstants::KEY_SORT_TYPE] ?? ""
        ];
    }
}
