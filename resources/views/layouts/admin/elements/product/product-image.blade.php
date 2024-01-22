<div id="product-image" class="modal fade bd-example-modal-lg" tabindex="-1" aria-labelledby="myLargeModalLabel"
     aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fas fa-eye"></i>
                    Chỉnh sửa hình ảnh
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="add-image-form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="image">
            </form>
            <div class="modal-body"></div>

            <div class="modal-footer justify-content-between">
                <div class="col-md-12 no-padding text-right">
                    <button class="btn btn-success btn-sm margin-top-5 text-left btn-update-image button-success" data-dismiss="modal">
                        <i class="fas fa-times"></i> Cập nhật
                    </button>
                    <button class="btn btn-danger btn-sm margin-top-5 text-left button-cancel" data-dismiss="modal">
                        <i class="fas fa-times"></i> Đóng
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
