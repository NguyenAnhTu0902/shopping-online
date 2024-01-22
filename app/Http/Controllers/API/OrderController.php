<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\OrderDetailService;
use App\Services\OrderService;
use Illuminate\Http\JsonResponse;
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
    /**
     * List Orders
     * @param Request $request
     */
    public function list(Request $request)
    {
        $response = $this->orderService->list($request->get('data'), true);
        return view('layouts.admin.elements.order.search-result', $response)->render();
    }

    /**
     * detail order
     * @param $id
     * @return string
     */
    public function detail($id)
    {
        $orderDetails = $this->orderDetailService->getOrderDetail($id);
        $order = $this->orderService->find($id);
        $sum = 0;
        foreach ($orderDetails as $orderDetail){
            $sum = $sum + $orderDetail->total;
        }
        return view('layouts.admin.elements.order.detail-result', compact('orderDetails', 'sum', 'order'))->render();
    }
    /**
     * update order
     * @param $id
     * @return string
     */
    public function update(Request $request)
    {
        $data = $request->all();
        try {
            $id = $data['id'];
            $order = $this->orderService->findOneOrFail($id);
            $response['data'] = $order->update($data);
            return $this->updateSuccessResponse($response);
        } catch (\Exception $e) {
            return $this->badRequestErrorResponse($e);
        }
    }
    /**
     * delete order
     * @param $id
     * @return string
     */
    public function delete(Request $request)
    {
        try {
            $id = $request->input('id');
            $order = $this->orderService->findOneOrFail($id);
            $response['data'] = $order->delete();
            return $this->deleteSuccessResponse($response);
        } catch (\Exception $e) {
            return $this->badRequestErrorResponse($e);
        }
    }
}
