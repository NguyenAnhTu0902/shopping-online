<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\OrderDetailService;
use App\Services\OrderService;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    protected $orderService;


    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }
    public function dashboard()
    {
        $orderDashboard = $this->orderService->getDashboardData();
        $result = array_merge($orderDashboard);
        return $result;
    }
}
