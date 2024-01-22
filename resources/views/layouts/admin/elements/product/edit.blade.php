<div id="edit-product" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fas fa-edit"></i>
                    Cập nhật sản phẩm
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="edit-product-form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-group-sm">
                                <label for="name-edit" class="col-form-label col-form-label-sm">
                                    Tên sản phẩm <span class="text-red">(*)</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="name-edit" name="name">
                                <span id="name-edit-error" class="error validate-error"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="category_id-edit" class="col-form-label col-form-label-sm">
                                    Loại sản phẩm <span class="text-red">(*)</span>
                                </label>
                                <select class="form-control form-control-sm "
                                        id="category_id-edit" name="category_id">
                                    <option value="">--- Loại sản phẩm ---</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                <span id="category_id-edit-error" class="error validate-error"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="brand_id-edit" class="col-form-label col-form-label-sm">
                                    Hãng <span class="text-red">(*)</span>
                                </label>
                                <select class="form-control form-control-sm "
                                        id="brand_id-edit" name="brand_id">
                                    <option value="">--- Hãng ---</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                                <span id="brand_id-edit-error" class="error validate-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-sm">
                                <label for="price-edit" class="col-form-label col-form-label-sm">
                                    Giá sản phẩm <span class="text-red">(*)</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="price-edit" name="price">
                                <span id="price-edit-error" class="error validate-error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-sm">
                                <label for="discount-edit" class="col-form-label col-form-label-sm">
                                    Giá khuyến mãi
                                </label>
                                <input type="text" class="form-control form-control-sm" id="discount-edit" name="discount">
                                <span id="discount-edit-error" class="error validate-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description-edit" class="col-form-label col-form-label-sm">
                                    Mô tả sản phẩm
                                </label>
                                <textarea class="form-control form-control-sm" rows="3" id="description-edit" name="description">
                                </textarea>
                                <span id="description-edit-error" class="error validate-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group clearfix">
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="featured-edit" name="featured" value="0"
                                           class="featured_checkbox">
                                    <label for="featured-edit" style="font-size: .875rem;">
                                        Sản phẩm nổi bật
                                    </label>
                                </div>
                                <span id="featured-error" class="error validate-error"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <div class="col-md-12 no-padding text-right">
                    <button class="btn btn-primary btn-sm edit">
                        <i class="fa fa-save"></i> {{ __('label.common.button.save') }}
                    </button>
                    <button class="btn btn-danger btn-sm margin-top-5 text-left button-cancel" data-dismiss="modal">
                        <i class="fas fa-times"></i> {{ __('label.common.button.close') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
