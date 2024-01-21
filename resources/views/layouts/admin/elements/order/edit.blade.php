<div id="edit-order" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fas fa-edit"></i>
                    Thông tin đặt hàng
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="edit-order-form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-group-sm">
                                <label for="name-edit" class="col-form-label col-form-label-sm">
                                    Sản phẩm
                                </label>
                                <input type="text" class="form-control form-control-sm" id="product_id-edit" name="product_id">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-group-sm">
                                <label for="size-edit" class="col-form-label col-form-label-sm">
                                    Size
                                </label>
                                <input type="text" class="form-control form-control-sm" id="size-edit" name="size">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-group-sm">
                                <label for="qty-edit" class="col-form-label col-form-label-sm">
                                    Số lượng
                                </label>
                                <input type="text" class="form-control form-control-sm" id="qty-edit" name="qty">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="status-edit" class="col-form-label col-form-label-sm">
                                    Trạng thái
                                </label>
                                <select class="form-control form-control-sm"
                                        id="status-edit" name="status">
                                    <option value="">--- Trạng thái ---</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <div class="col-md-12 no-padding text-right">
                    <button class="btn btn-primary btn-sm edit">
                        <i class="fa fa-save"></i> Lưu
                    </button>
                    <button class="btn btn-danger btn-sm margin-top-5 text-left button-cancel" data-dismiss="modal">
                        <i class="fas fa-times"></i> Đóng
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


