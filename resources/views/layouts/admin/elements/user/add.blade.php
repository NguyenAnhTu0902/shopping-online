@php
    use App\Constants\CommonConstants;
@endphp
<div id="add-user" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fas fa-edit"></i>
                    Thêm mới người dùng
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="add-user-form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-sm">
                                <label for="name-add" class="col-form-label col-form-label-sm">
                                    Tên người dùng <span class="text-red">(*)</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="name-add" name="name">
                                <span id="name-add-error" class="error validate-error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-sm">
                                <label for="email-add" class="col-form-label col-form-label-sm">
                                    Email <span class="text-red">(*)</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="email-add" name="email">
                                <span id="email-add-error" class="error validate-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-sm">
                                <label for="password-add" class="col-form-label col-form-label-sm">
                                    Mật khẩu <span class="text-red">(*)</span>
                                </label>
                                <input type="password" class="form-control form-control-sm" id="password-add" name="password">
                                <span id="password-add-error" class="error validate-error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-sm">
                                <label for="password-add" class="col-form-label col-form-label-sm">
                                    Xác nhận mật khẩu <span class="text-red">(*)</span>
                                </label>
                                <input type="password" class="form-control form-control-sm" id="password_confirm-add" name="password_confirm">
                                <span id="password_confirm-add-error" class="error validate-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-sm">
                                <label for="password-add" class="col-form-label col-form-label-sm">
                                    Số điện thoại
                                </label>
                                <input type="text" class="form-control form-control-sm" id="phone-add" name="phone">
                                <span id="phone-add-error" class="error validate-error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="role-add" class="col-form-label col-form-label-sm">
                                    Cấp độ <span class="text-red">(*)</span>
                                </label>
                                <select class="form-control form-control-sm "
                                        id="role-add" name="role">
                                    <option value="">--- Cấp độ ---</option>
                                    @foreach(CommonConstants::$user_level as $key => $value)
                                        <option value="{{ $key }}">
                                            {{ $value }}
                                        </option>
                                    @endforeach
                                </select>
                                <span id="role-add-error" class="error validate-error"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <div class="col-md-12 no-padding text-right">
                    <button class="btn btn-primary btn-sm add">
                        <i class="fa fa-save"></i> {{ __('label.common.button.save') }}
                    </button>
                    <button class="btn btn-default margin-left-5 reset" onclick="resetForm('#add-user')">
                        <i class="fas fa-sync-alt"></i> {{ __('label.common.button.reset') }}
                    </button>
                    <button class="btn btn-danger btn-sm margin-top-5 text-left button-cancel" data-dismiss="modal">
                        <i class="fas fa-times"></i> {{ __('label.common.button.close') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
