<?php

namespace App\Services;

use App\Helpers\CommonHelper;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Constants\CommonConstants;
use Throwable;

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

    public function getDashboardData()
    {
        try {
            $totalOrder = $this->mainRepository->totalOrder();
            $totalOrderReceive= $this->mainRepository->totalOrderReceive();
            $totalOrderFinish = $this->mainRepository->totalOrderFinish();
            $totalOrderLastMonth = $this->mainRepository->totalLastMonthOrder();
            return [
                'totalOrder' => $totalOrder,
                'totalOrderReceive' => $totalOrderReceive,
                'totalOrderFinish' => $totalOrderFinish,
                'totalOrderLastMonth' => $totalOrderLastMonth,
            ];
        } catch (Throwable $e) {
            report($e);
        }
        return [
            'totalOrder' => null,
            'totalOrderReceive' => null,
            'totalOrderFinish' => null,
            'totalOrderLastMonth' => null,
            'revenueOrder' => CommonHelper::sortValueByMonth([]),
        ];
    }
}
