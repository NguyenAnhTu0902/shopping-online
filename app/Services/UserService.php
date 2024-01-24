<?php

namespace App\Services;

use App\Repositories\User\UserRepositoryInterface;

class UserService extends BaseService
{
    protected $mainRepository;

    public function __construct(UserRepositoryInterface $userRepositoryInterface)
    {
        $this->mainRepository = $userRepositoryInterface;
    }
}
