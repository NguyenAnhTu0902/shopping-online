@php
    use App\Constants\CommonConstants;
@endphp

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
                                            Giá
                                        </th>
                                        <th class="dt-center w-15">
                                            Số lượng
                                        </th>
                                        <th class="dt-center w-15">
                                            Đơn giá
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($orderDetails as $orderDetail)
                                        <tr class="odd">
                                            <td class="dt-center">{{ $loop->index + 1 }}</td>
                                            <td class="word-break text-right">
                                                {{ $orderDetail->product->name }}</td>
                                            <td class="word-break text-right">
                                                {{ $orderDetail->size }}
                                            </td>
                                            <td class="word-break text-right">
                                                ${{ $orderDetail->product->discount }}</td>
                                            <td class="word-break text-right">
                                                {{ $orderDetail->qty}}
                                            </td>
                                            <td class="word-break text-right">
                                                ${{$orderDetail->total }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    <div style="float: right; font-weight: bold;">Tổng: ${{$sum}}</div>
                    <div class="col-md-5">
                        <div class="input-group input-group-sm">
                            <select class="form-control form-control-sm select2"
                                    style="width: 100%;" id="input-status">
                                <option value="{{ $order->status }}">{!! $order->status !!}</option>
                                @foreach(CommonConstants::$order_status as $key => $value)
                                    <option value="{{ $key }}">
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="id_order" id="id_order" value="{{$order->id}}">
                </div>
            </div>
        </div>
    </div>
</div>
