<?php

namespace App\Services;

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
}
