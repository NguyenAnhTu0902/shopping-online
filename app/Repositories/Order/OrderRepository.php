<?php

namespace App\Repositories\Order;

use App\Constants\CommonConstants;
use App\Models\Order;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    protected $model;
    public function getModel()
    {
        return Order::class;
    }
    public function list(array $data, $paginate, $select)
    {
        $query = $this->model
            ->with('orderDetails')
            ->select($select);
        if (isset($data[CommonConstants::KEYWORD])) {
            $keyword = $data[CommonConstants::KEYWORD];
            foreach ($keyword as $key => $value) {
                if (isset($value) && $value !== "") {
                    $query->where($key, CommonConstants::OPERATOR_LIKE, "%{$value}%");
                }
            }
        }

        if (!empty($data[CommonConstants::KEY_SORT_COLUMN]) && !empty($data[CommonConstants::KEY_SORT_TYPE])) {
            $sort = [
                $data[CommonConstants::KEY_SORT_COLUMN] => $data[CommonConstants::KEY_SORT_TYPE]
            ];
            $query = $this->sort($query, $sort);
        }

        if ($paginate) {
            $query = $this->paginate($query, $this->handlePaginate($data));
        }
        return $query;
    }

    public function totalOrder()
    {
        // Get the current year and month
        $currentYear = date('Y');
        $currentMonth = date('m');

        return $this->model
            ->select('id')
            ->whereYear('created_at', $currentYear)
            ->whereMonth('created_at', $currentMonth)
            ->count('id');
    }
    public function totalLastMonthOrder()
    {
        // Get the current year and month
        $currentYear = date('Y');
        $previousMonth = date('m', strtotime('-1 month'));

        return $this->model
            ->select('id')
            ->whereYear('created_at', $currentYear)
            ->whereMonth('created_at', $previousMonth)
            ->count('id');
    }
    public function totalOrderReceive()
    {
        return $this->model->select('id')->where('status', '=' ,CommonConstants::order_status_ReceiveOrders)->count('id');
    }
    public function totalOrderFinish()
    {
        return $this->model->select('id')->where('status', '=' ,CommonConstants::order_status_Finish)->count('id');
    }

}
