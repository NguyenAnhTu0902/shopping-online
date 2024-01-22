
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" value="{{$id}}" name="product_id" id="id-hidden">
                            @foreach($images as $image)
                                <img style="width: 30%;" src="../front/img/products/{{$image->path}}" alt="">
                                <button style="margin-bottom: 300px;" class="btn btn-danger btn-sm delete-image-btn"
                                        data-id="{{ $image->id }}"
                                        title="Xóa"><i
                                        class="fa fa-trash"></i>
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
