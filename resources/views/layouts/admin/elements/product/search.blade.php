@php
    use App\Constants\CommonConstants;
@endphp
<div class="card-header">
    <div class="row">
        <div class="col-sm-6">
            <h3 class="card-title">Quản lý đơn hàng</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                        title="Tìm kiếm">
                    <i class="fa fa-filter active"></i>
                </button>
            </div>
        </div>
        <div class="col-sm-6 block-button-add">
            <button type="button" class="btn btn-success open-add-modal"
                    data-toggle="modal" data-target="#add-product">
                <i class="fas fa-plus mr-2"></i>Tạo mới
            </button>
        </div>
    </div>
</div>
<div class="card-body" style="display: none;">
    <form id="input-search-product">
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="col-md-6 row justify-content-center">
                    <label class="col-md-4 col-lg-4 col-xl-3 col-xxl-2 control-label">
                        Tên SP</label>
                    <div class="col-md-7">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-sm" id="input-search-name"
                                   placeholder="Nhập tên sản phầm">
                            <input type="hidden" id="input-search-name-hidden" value="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 row justify-content-center">
                    <label class="col-md-4 col-lg-4 col-xl-3 col-xxl-2 control-label">
                        Hãng</label>
                    <div class="col-md-7">
                        <div class="input-group input-group-sm">
                            <select class="form-control form-control-sm select2"
                                    style="width: 100%;" id="input-search-brand_id">
                                <option value="">
                                    --- Hãng ---</option>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}">
                                        {{ $brand->name }}
                                    </option>
                                @endforeach
                            </select>
                            <input type="hidden" id="input-search-brand_id-hidden" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row mt-3">
        <div class="col-md-10 offset-md-1 block-button-card-outline">
            <div class="btn-group pull-left">
                <button class="btn btn-info submit" id="search-product">
                    <i class="fa fa-search"></i>
                    Tìm kiếm
                </button>
            </div>
            <div class="btn-group pull-left undo-card-outline">
                <button class="btn btn-default" onclick="resetForm('#input-search-product')">
                    <i class="fa fa-undo"></i>
                    Nhập lại
                </button>
            </div>
        </div>
    </div>
</div>
