<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Services\BrandService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $brandService;

    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }

    public function list(Request $request)
    {
        $response = $this->brandService->list($request->get('data'), true);
        return view('layouts.admin.elements.brand.search-result', $response)->render();
    }
    public function detail($id)
    {
        $response['data'] = $this->brandService->findOneOrFail($id);
        return $this->successResponse($response);
    }
    /**
     * Create Brand
     * @param ProductRequest $request
     * @return JsonResponse
     */
    public function add(ProductRequest $request)
    {
        $data = $request->only(
            'id',
            'name',
        );
        try {
            $response['data'] = $this->brandService->create($data);
            $response['message'] = __('messages.SM-001');
            return $this->successResponse($response);
        } catch (\Exception $e) {
            return $this->badRequestErrorResponse($e);
        }
    }
    /**
     * Update Brand
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Request $request)
    {
        $data = $request->only(
            'id',
            'name',
        );
        try {
            $id = $data['id'];
            $brand = $this->brandService->findOneOrFail($id);
            $response['data'] = $brand->update($data);
            $response['message'] = __('messages.SM-002');
            return $this->successResponse($response);
        } catch (\Exception $e) {
            return $this->badRequestErrorResponse($e);
        }
    }

    public function delete(Request $request)
    {
        try {
            $id = $request->input('id');
            $product = $this->brandService->findOneOrFail($id);
            $response['data'] = $product->delete();
            return $this->deleteSuccessResponse($response);
        } catch (\Exception $e) {
            return $this->badRequestErrorResponse($e);
        }
    }
}
