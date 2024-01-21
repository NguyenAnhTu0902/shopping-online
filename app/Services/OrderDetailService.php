<?php

namespace App\Services;

use App\Repositories\OrderDetail\OrderDetailRepositoryInterface;

class OrderDetailService extends BaseService
{
    protected $mainRepository;

    public function __construct(OrderDetailRepositoryInterface $orderDetailRepositoryInterface)
    {
        $this->mainRepository = $orderDetailRepositoryInterface;
    }
    public function getOrderDetail($id)
    {
        return $this->mainRepository->findByWithRelationship(['order'], ['order_id' => $id]);
    }
}
