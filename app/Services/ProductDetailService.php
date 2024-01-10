<?php

namespace App\Services;

use App\Repositories\ProductDetail\ProductDetailRepositoryInterface;

class ProductDetailService extends BaseService
{
    protected $mainRepository;

    /**
     * Constructor
     * Before
     * @param ProductDetailRepositoryInterface $productDetailRepositoryInterface
     */

    public function __construct(ProductDetailRepositoryInterface $productDetailRepositoryInterface)
    {
        $this->mainRepository = $productDetailRepositoryInterface;
    }
}
