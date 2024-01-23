<?php

namespace App\Services;

use App\Constants\CommonConstants;
use App\Models\ProductImage;
use App\Repositories\ProductImage\ProductImageRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class ProductImageService extends BaseService
{
    protected $mainRepository;

    /**
     * Constructor
     * Before
     * @param ProductImageRepositoryInterface $productImageRepositoryInterface
     */
    public function __construct(ProductImageRepositoryInterface $productImageRepositoryInterface)
    {
        $this->mainRepository = $productImageRepositoryInterface;
    }
    public function getProductImages($id)
    {
        return $this->mainRepository->findByWithRelationship(['product'], ['product_id' => $id]);
    }

    /**
     * save thumbnail of products and return file name
     * @param $file
     * @return string
     */
    public function saveImage($file): string
    {
        $fileName = rand(1111, 9999) . time() . $file->getClientOriginalName();
//        $thumbnailPath = CommonConstants::PRODUCT_IMAGE . DIRECTORY_SEPARATOR . $fileName;
//
//        Storage::disk('public')->put($thumbnailPath, file_get_contents($file));
        $file->move('front/img/products',$fileName);
        return $fileName;
    }

    /**
     * delete images of products
     * @return void
     */
    public function deleteImage($image)
    {
        if (Storage::disk('public')->exists($image)) {
            Storage::disk('public')->delete($image);
        }
    }

    public function createProductImage($request)
    {
        $data = $request->input();
        if ($request->hasFile('image')) {
            $fileName = $this->saveImage($request->file('image'));
        }
        $dataInsert = [
            'product_id' => $data['product_id'],
            'path' => $fileName,
        ];

        return $this->create($dataInsert);
    }

}
