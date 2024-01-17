<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\OrderDetailService;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderService;

    protected $orderDetailService;

    public function __construct(OrderService $orderService, OrderDetailService $orderDetailService)
    {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
    }

    public function index()
    {
        return view('layouts.admin.elements.order.index');
    }
}
