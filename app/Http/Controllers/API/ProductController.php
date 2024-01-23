<?php

namespace App\Http\Controllers\API;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Services\ProductDetailService;
use App\Services\ProductImageService;
use App\Services\ProductService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    protected $productImageService;

    protected $productDetailService;

    public function __construct
    (ProductService $productService,
     ProductImageService $productImageService,
     ProductDetailService $productDetailService)
    {
        $this->productService = $productService;
        $this->productImageService = $productImageService;
        $this->productDetailService = $productDetailService;
    }

    /**
     * List Products
     * @param Request $request
     */
    public function list(Request $request)
    {
        $response = $this->productService->list($request->get('data'), true);
        return view('layouts.admin.elements.product.search-result', $response)->render();
    }

    /**
     * Create Product
     * @param ProductRequest $request
     * @return JsonResponse
     */
    public function add(ProductRequest $request)
    {
        $data = $request->all();
        $data['qty'] = 0;
        try {
            $response['data'] = $this->productService->create($data);
            $response['message'] = __('messages.SM-001');
            return $this->successResponse($response);
        } catch (\Exception $e) {
            return $this->badRequestErrorResponse($e);
        }
    }
    /**
     * detail product
     * @param $id
     * @return JsonResponse
     */
    public function detail($id)
    {
        $response['data'] = $this->productService->findOneOrFail($id);
        return $this->successResponse($response);
    }

    /**
     * update product
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Request $request)
    {
        $data = $request->all();
        try {
            $id = $data['id'];
            $product = $this->productService->findOneOrFail($id);
            $response['data'] = $product->update($data);
            $response['message'] = __('messages.SM-002');
            return $this->successResponse($response);
        } catch (\Exception $e) {
            return $this->badRequestErrorResponse($e);
        }
    }
    public function showImage($id)
    {
        $images = $this->productImageService->getProductImages($id);
        session()->put('productId', $id);
        return view('layouts.admin.elements.product.product-image-result', compact('images', 'id'))->render();
    }
    public function uploadImage(Request $request)
    {
        try {
            $result['data'] = $this->productImageService->createProductImage($request);
            return $this->createSuccessResponse($result);
        } catch (\Exception $e) {
            return $this->badRequestErrorResponse($e);
        }
    }

    public function deleteImage(Request $request)
    {
        try {
            $id = $request->input('id');
            $image = $this->productImageService->findOneOrFail($id);
            $response['data'] = $image->delete();
            $response['product_id'] = $request->product_id;
            return $this->deleteSuccessResponse($response);
        } catch (\Exception $e) {
            return $this->badRequestErrorResponse($e);
        }
    }

    public function showDetail($id)
    {
        $productDetails = $this->productDetailService->getProductDetails($id);
        return view('layouts.admin.elements.product.detail-result',
            compact('productDetails', 'id'))->render();
    }
    public function delete(Request $request)
    {
        try {
            $id = $request->input('id');
            $product = $this->productService->findOneOrFail($id);
            $response['data'] = $product->delete();
            return $this->deleteSuccessResponse($response);
        } catch (\Exception $e) {
            return $this->badRequestErrorResponse($e);
        }
    }
}
