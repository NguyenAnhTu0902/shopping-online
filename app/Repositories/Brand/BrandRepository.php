<?php

namespace App\Repositories\Brand;

use App\Models\Brand;
use App\Repositories\BaseRepository;
use Database\Seeders\BrandSeeder;

class BrandRepository extends BaseRepository implements BrandRepositoryInterface
{
    /**
     * @var model
     */
    protected $model;

    /**
     * @return void
     */
    public function getModel()
    {
        return Brand::class;
    }
}
