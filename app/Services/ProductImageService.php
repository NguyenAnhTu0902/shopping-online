<?php

namespace App\Services;

use App\Models\ProductImage;
use App\Repositories\ProductImage\ProductImageRepositoryInterface;

class ProductImageService extends BaseService
{
    protected $mainRepository;

    /**
     * Constructor
     * Before
     * @param ProductImageRepositoryInterface $productImageRepositoryInterface
     */
    public function __construct(ProductImageRepositoryInterface $productImageRepositoryInterface)
    {
        $this->mainRepository = $productImageRepositoryInterface;
    }
}
