<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    @if($total > 0)
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
                                            Tên người dùng
                                        </th>
                                        <th class=" u-width150" tabindex="0"
                                            aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Số điện thoại
                                        </th>
                                        <th class=" u-width150" tabindex="0"
                                            aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Email
                                        </th>
                                        <th class=" u-width400" tabindex="0"
                                            aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Cấp độ
                                        </th>
                                        <th class=" u-width100" tabindex="0"
                                            aria-controls="example2" rowspan="1" colspan="1"
                                            aria-label="CSS grade: activate to sort column ascending">
                                            Hành động
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $key => $user)
                                        <tr class="odd">
                                            <td class="dt-center">{{ $itemStart + $key }}</td>
                                            <td class="word-break" tabindex="0">{{$user->name }}</td>
                                            <td class="word-break text-center">{{$user->phone}}</td>
                                            <td class="word-break text-center">{{$user->email}}</td>
                                            <td class="no-wrap text-center">
                                                @if($user->role == 0) Chưa kích hoạt
                                                @elseif($user->role == 1) Host
                                                @elseif($user->role == 2) Admin
                                                @elseif($user->role == 3) Client
                                                @endif
                                            </td>
                                            <td class="dt-center">
                                                <button class="btn btn-info btn-sm open-edit-modal"
                                                        data-form-id="form" data-toggle="modal"
                                                        data-id="{{ $user->id }}"
                                                        title="Chỉnh sửa">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm delete-btn"
                                                        data-id="{{ $user->id }}"
                                                        data-name="{{ $user->name }}"
                                                        title="Xóa"><i
                                                        class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            @include('layouts.admin.elements.pagination')
                        </div>
                    @else
                        <div class="text-center">
                            <p>Không có người dùng nào</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
