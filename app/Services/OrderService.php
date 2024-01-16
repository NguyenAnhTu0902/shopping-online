<?php

namespace App\Services;

use App\Repositories\Order\OrderRepositoryInterface;

class OrderService extends BaseService
{
    protected $mainRepository;

    public function __construct(OrderRepositoryInterface $orderRepositoryInterface)
    {
        $this->mainRepository = $orderRepositoryInterface;
    }
}
