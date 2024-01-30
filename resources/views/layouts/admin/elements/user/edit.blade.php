@php
    use App\Constants\CommonConstants;
@endphp
<div id="edit-user" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fas fa-edit"></i>
                    Cập nhật người dùng
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="edit-user-form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-sm">
                                <label for="name-edit" class="col-form-label col-form-label-sm">
                                    Tên người dùng <span class="text-red">(*)</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="name-edit" name="name" value="{{old('name')}}">
                                <span id="name-edit-error" class="error validate-error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-sm">
                                <label for="email-edit" class="col-form-label col-form-label-sm">
                                    Email <span class="text-red">(*)</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="email-edit" name="email" disabled>
                                <span id="email-edit-error" class="error validate-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-sm">
                                <label for="phone-edit" class="col-form-label col-form-label-sm">
                                    Số điện thoại<span class="text-red">(*)</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="phone-edit" name="phone" value="{{old('phone')}}">
                                <span id="phone-edit-error" class="error validate-error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="role-edit" class="col-form-label col-form-label-sm">
                                    Cấp độ <span class="text-red">(*)</span>
                                </label>
                                <select class="form-control form-control-sm "
                                        id="role-edit" name="role">
                                    <option value="">--- Cấp độ ---</option>
                                    @foreach(CommonConstants::$user_level as $key => $value)
                                        <option value="{{ $key }}">
                                            {{ $value }}
                                        </option>
                                    @endforeach
                                </select>
                                <span id="role-edit-error" class="error validate-error"></span>
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
