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
}
