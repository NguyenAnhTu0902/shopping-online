<?php

namespace App\Providers;

use App\Repositories\Auth\AuthRepository;
use App\Repositories\Auth\AuthRepositoryInterface;
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
        // UserRepositoryInterface::class => UserRepository::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $repositories = [
            // 'News\NewsRepositoryInterface' => 'News\NewsRepository',
        ];

        foreach ($repositories as $key => $value) {
            $this->app->bind("App\\Repositories\\$key", "App\\Repositories\\$value");
        }
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
