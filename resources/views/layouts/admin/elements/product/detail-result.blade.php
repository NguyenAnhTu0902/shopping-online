<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2"
                                   class="th-center table table-striped table-hover dataTable dtr-inline"
                                   aria-describedby="example2_info">
                                <thead>
                                <tr>
                                    <th class="dt-center w-5 ordinal-number" data-column-name="id"
                                        id="ordinal-number-order">
                                        STT
                                    </th>
                                    <th class="dt-center w-20">
                                        Tên sản phầm
                                    </th>
                                    <th class="dt-center w-15">
                                        Size
                                    </th>
                                    <th class="dt-center w-15">
                                        Số lượng
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($productDetails as $productDetail)
                                    <tr class="odd">
                                        <td class="dt-center">{{ $loop->index + 1 }}</td>
                                        <td class="word-break text-right">
                                            {{ $productDetail->product->name }}</td>
                                        <td class="word-break text-right">
                                            {{ $productDetail->size }}
                                        </td>
                                        <td class="word-break text-right">
                                            {{ $productDetail->qty}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
