<?php

namespace App\Providers;

use App\Repositories\Auth\AuthRepository;
use App\Repositories\Auth\AuthRepositoryInterface;
use App\Repositories\Brand\BrandRepository;
use App\Repositories\Brand\BrandRepositoryInterface;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\DesignatedServiceOfMedicalSession\DSMedSessionRepository;
use App\Repositories\DesignatedServiceOfMedicalSession\DSMedSessionRepositoryInterface;
use App\Repositories\DesignatedServiceType\DesignatedServiceTypeRepository;
use App\Repositories\DesignatedServiceType\DesignatedServiceTypeRepositoryInterface;
use App\Repositories\Disease\DiseaseRepository;
use App\Repositories\Disease\DiseaseRepositoryInterface;
use App\Repositories\GroupPermission\GroupPermissionRepository;
use App\Repositories\GroupPermission\GroupPermissionRepositoryInterface;
use App\Repositories\MaterialBatch\MaterialBatchRepository;
use App\Repositories\MaterialBatch\MaterialBatchRepositoryInterface;
use App\Repositories\MedicalSessionRooms\MedicalSessionRoomRepository;
use App\Repositories\MedicalSessionRooms\MedicalSessionRoomRepositoryInterface;
use App\Repositories\Permission\PermissionRepository;
use App\Repositories\Permission\PermissionRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\ProductDetail\ProductDetailRepository;
use App\Repositories\ProductDetail\ProductDetailRepositoryInterface;
use App\Repositories\ProductImage\ProductImageRepository;
use App\Repositories\ProductImage\ProductImageRepositoryInterface;
use App\Repositories\Role\RoleRepository;
use App\Repositories\Role\RoleRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\UserRoom\UserRoomRepository;
use App\Repositories\UserRoom\UserRoomRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * All the container singletons that should be registered.
     *
     * @var array
     */
    public array $singletons = [
        BrandRepositoryInterface::class => BrandRepository::class,
        ProductRepositoryInterface::class => ProductRepository::class,
        ProductImageRepositoryInterface::class => ProductImageRepository::class,
        ProductDetailRepositoryInterface::class => ProductDetailRepository::class,
        CategoryRepositoryInterface::class => CategoryRepository::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
//        $repositories = [
//            // 'News\NewsRepositoryInterface' => 'News\NewsRepository',
//        ];
//
//        foreach ($repositories as $key => $value) {
//            $this->app->bind("App\\Repositories\\$key", "App\\Repositories\\$value");
//        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
