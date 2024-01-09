<?php

namespace App\Services;

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
}
