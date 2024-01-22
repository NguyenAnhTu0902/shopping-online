<?php

namespace App\Services;

use App\Constants\CommonConstants;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductService extends BaseService
{
    protected $mainRepository;

    /**
     * Constructor
     * Before
     * @param ProductRepositoryInterface $productRepositoryInterface
     */
    public function __construct(ProductRepositoryInterface $productRepositoryInterface)
    {
        $this->mainRepository = $productRepositoryInterface;
    }

    public function getFeaturedProduct()
    {
        return [
            "loafer" => $this->mainRepository->findByWithRelationship(
                ['category'],
                ['category_id' => 1, 'featured' => true]),
            "boot" => $this->mainRepository->findByWithRelationship(
                ['category'],
                ['category_id' => 2, 'featured' => true]),
        ];
    }
    public function getProductOnIndex($request)
    {
        return $this->mainRepository->getProductOnIndex($request);
    }

    public function list($data, $paginate = false, $select = CommonConstants::SELECT_ALL)
    {
        $products = $this->mainRepository->list($data, $paginate, $select);
        return [
            'products' => $products,
            'itemStart' => $products->firstItem(),
            'itemEnd' => $products->lastItem(),
            'total' => $products->total(),
            'lastPage' => $products->lastPage(),
            'limit' => CommonConstants::DEFAULT_LIMIT_PAGE,
            'page' => $data[CommonConstants::INPUT_PAGE] ?? 1,
            'sort_column' => $data[CommonConstants::KEY_SORT_COLUMN] ?? "",
            'sort_type' => $data[CommonConstants::KEY_SORT_TYPE] ?? ""
        ];
    }
}
