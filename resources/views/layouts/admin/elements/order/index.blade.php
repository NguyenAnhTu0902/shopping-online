@section('title', 'Đơn hàng'))
@extends('layouts.admin.layout.master')

@section('content-header')
    @include('layouts.admin.elements.order.search')
@endsection
@section('content')
    <div id="content-list">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-sm-12 col-md-6"></div>
                            </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="th-center table table-striped table-hover dtr-inline dataTable"
                                               aria-describedby="example2_info">
                                            <thead>
                                            <tr>
                                                <th class="dt-center ordinal-number u-width10"
                                                    data-column-name="id" >
                                                    STT
                                                </th>
                                                <th class=" u-width200" tabindex="200"
                                                    aria-controls="example2" rowspan="1" colspan="1"
                                                    aria-label="Browser: activate to sort column ascending">
                                                    Tên người đặt
                                                </th>
                                                <th class=" u-width150" tabindex="0"
                                                    aria-controls="example2" rowspan="1"
                                                    colspan="1" aria-label="Engine version: activate to sort column ascending">
                                                    Địa chỉ
                                                </th>
                                                <th class=" u-width150" tabindex="0"
                                                    aria-controls="example2" rowspan="1"
                                                    colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                    Số lượng
                                                </th>
                                                <th class=" u-width400" tabindex="0"
                                                    aria-controls="example2" rowspan="1"
                                                    colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                    Trạng thái
                                                </th>
                                                <th class=" u-width100" tabindex="0"
                                                    aria-controls="example2" rowspan="1" colspan="1"
                                                    aria-label="CSS grade: activate to sort column ascending">
                                                    Hành động
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="odd">
                                                <td class="dt-center">1</td>
                                                <td class="word-break" tabindex="0">Nguyễn Anh Tú</td>
                                                <td class="word-break text-right">124 Nguyễn Xiển, Hạ Đình</td>
                                                <td class="word-break">10</td>
                                                <td class="word-break">Đang chờ ship</td>
                                                <td class="dt-center">
                                                    <button class="btn btn-info btn-sm open-edit-modal"
                                                            data-form-id="form" data-toggle="modal"
                                                            title="Xóa">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm delete-btn"
                                                            title="Xóa"><i
                                                            class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

