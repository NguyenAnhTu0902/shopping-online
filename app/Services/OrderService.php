<?php

namespace App\Services;

use App\Repositories\Order\OrderRepositoryInterface;
use App\Constants\CommonConstants;

class OrderService extends BaseService
{
    protected $mainRepository;

    public function __construct(OrderRepositoryInterface $orderRepositoryInterface)
    {
        $this->mainRepository = $orderRepositoryInterface;
    }

    public function getOrderByUserId($id)
    {
        return $this->mainRepository->findByWithRelationship(['user'], ['user_id' => $id]);
    }

    public function list($data, $paginate = false, $select = CommonConstants::SELECT_ALL)
    {
        $orders = $this->mainRepository->list($data, $paginate, $select);
        return [
            'orders' => $orders,
            'itemStart' => $orders->firstItem(),
            'itemEnd' => $orders->lastItem(),
            'total' => $orders->total(),
            'lastPage' => $orders->lastPage(),
            'limit' => CommonConstants::DEFAULT_LIMIT_PAGE,
            'page' => $data[CommonConstants::INPUT_PAGE] ?? 1,
            'sort_column' => $data[CommonConstants::KEY_SORT_COLUMN] ?? "",
            'sort_type' => $data[CommonConstants::KEY_SORT_TYPE] ?? ""
        ];
    }
}
