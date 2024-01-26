<?php

namespace App\Services;

use App\Constants\CommonConstants;
use App\Repositories\User\UserRepositoryInterface;

class UserService extends BaseService
{
    protected $mainRepository;

    public function __construct(UserRepositoryInterface $userRepositoryInterface)
    {
        $this->mainRepository = $userRepositoryInterface;
    }
    public function list($data, $paginate = false, $select = CommonConstants::SELECT_ALL)
    {
        $users = $this->mainRepository->list($data, $paginate, $select);
        return [
            'users' => $users,
            'itemStart' => $users->firstItem(),
            'itemEnd' => $users->lastItem(),
            'total' => $users->total(),
            'lastPage' => $users->lastPage(),
            'limit' => CommonConstants::DEFAULT_LIMIT_PAGE,
            'page' => $data[CommonConstants::INPUT_PAGE] ?? 1,
            'sort_column' => $data[CommonConstants::KEY_SORT_COLUMN] ?? "",
            'sort_type' => $data[CommonConstants::KEY_SORT_TYPE] ?? ""
        ];
    }
}
