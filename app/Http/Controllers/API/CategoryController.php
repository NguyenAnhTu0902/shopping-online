<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Services\CategoryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function list(Request $request)
    {
        $response = $this->categoryService->list($request->get('data'), true);
        return view('layouts.admin.elements.category.search-result', $response)->render();
    }
    public function detail($id)
    {
        $response['data'] = $this->categoryService->findOneOrFail($id);
        return $this->successResponse($response);
    }
    /**
     * Create Category
     * @param Request $request
     * @return JsonResponse
     */
    public function add(Request $request)
    {
        $data = $request->only(
            'id',
            'name',
        );
        try {
            $response['data'] = $this->categoryService->create($data);
            $response['message'] = __('messages.SM-001');
            return $this->successResponse($response);
        } catch (\Exception $e) {
            return $this->badRequestErrorResponse($e);
        }
    }

    /**
     * Update Category
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
            $category = $this->categoryService->findOneOrFail($id);
            $response['data'] = $category->update($data);
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
            $product = $this->categoryService->findOneOrFail($id);
            $response['data'] = $product->delete();
            return $this->deleteSuccessResponse($response);
        } catch (\Exception $e) {
            return $this->badRequestErrorResponse($e);
        }
    }
}
