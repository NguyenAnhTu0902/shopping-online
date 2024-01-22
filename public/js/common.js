$(document).on("click", ".open-add-modal", function (e) {
    resetForm($(this).data('target'));
    hideMessageValidate($(this).data('target'))
});
$('.number-validate').keypress(function(event) {
    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
});

$('.daterangepicker-input').daterangepicker({
    locale: {
        format: 'DD/MM/YYYY'
    }
});

// DateTimePicker
$(".datetimepicker-div").datetimepicker({
    format: "DD/MM/YYYY",
    locale: 'vi',
    language: 'vi',
    useCurrent: false,
});

$(document).on('keypress', '.number-integer-validate', function (e) {
    if(!(/[0-9]/.test(String.fromCharCode(e.which)))){
        e.preventDefault();
    }
});

$('.string-validate').keypress(function(e) {
    if (!(/[0-9a-zA-Z]/.test(String.fromCharCode(e.which)))) {
        e.preventDefault();
    }
});

//Hide div datetimepicker-widget when click outside
$(document).mouseup(function(e) {
    let containerDatetimepicker = $(`.bootstrap-datetimepicker-widget`);
    let buttonClickDatetimepicker = containerDatetimepicker.next('.input-group-append');
    // if the target of the click isn't the container nor a descendant of the container
    if (!containerDatetimepicker.is(e.target) && containerDatetimepicker.has(e.target).length === 0 && buttonClickDatetimepicker.has(e.target).length === 0) {
        containerDatetimepicker.hide();
        buttonClickDatetimepicker.click();
    }
});

$(document).ready(function () {
    $('.select2').select2();
    $(window).resize(function() {
        $('.select2').select2();
    });
});

$('input.datetimepicker-input').on('change', function() {
    resetDateTimePicker($(this).parent());
});

function errorFunction(request) {
    let message = request?.responseJSON?.message ?? '';
    switch (request.status) {
        case 403:
            message = message ?? "Bạn không có quyền thực hiện hành động này.";
            break;
        case 404:
            message = "Không tìm thấy dữ liệu.";
            break;
        case 400:
            if (request.responseJSON.message !== undefined) {
                message = request.responseJSON.message;
            } else message = "Có lỗi xảy ra. Vui lòng thử lại sau ít phút";
            break;
        case HTTP_NOT_IMPLEMENTED:
            message = message ?? "Không thể thực hiện yêu cầu này";
            break;
        default:
            message = "Có lỗi xảy ra. Vui lòng thử lại sau ít phút";
    }
    toastAlert(message, "", "error");
}

/**
 *  action for call api with GET method like list, search, detail,...
 * @param api
 * @param data
 * @param nextAction
 */
function getData(api, data, nextAction) {
    $.ajax({
        url: api,
        type: 'GET',
        data: {
            data
        },
        beforeSend: function() {
            $('.loading').show();
        },
        complete: function(){
            $('.loading').hide();
        },
        success: function (response) {
            nextAction(response);
        },
        error: function (request, error) {
            errorFunction(request);
        }
    });
}

/**
 * action for call api with POST method like create, update, delete,...
 * @param api
 * @param data
 * @param nextAction
 */
function createOrUpdate(api, data, nextAction) {
    $.ajax({
        url: api,
        type: 'POST',
        data: data,
        beforeSend: function() {
            $('.loading').show();
        },
        complete: function(){
            $('.loading').hide();
        },
        success: function (response) {
            nextAction(response);
        },
        error: function (request, error) {
            errorFunction(request)
        }
    });
}


/**
 * action for call api with POST method like create, update, delete,...with file
 * @param api
 * @param data
 * @param nextAction
 */
function createOrUpdateWithFile(api, data, nextAction) {
    $.ajax({
        url: api,
        type: 'POST',
        data: data,
        cache: false,
        processData: false,
        contentType: false,
        beforeSend: function() {
            $('.loading').show();
        },
        complete: function(){
            $('.loading').hide();
        },
        success: function (response) {
            nextAction(response);
        },
        error: function (request, error) {
            errorFunction(request)
        }
    });
}
/**
 * action for call api with POST method like create, update, delete,...with file
 * @param api
 * @param data
 * @param nextAction
 */
function createOrUpdateWithFile(api, data, nextAction) {
    $.ajax({
        url: api,
        type: 'POST',
        data: data,
        cache: false,
        processData: false,
        contentType: false,
        beforeSend: function() {
            $('.loading').show();
        },
        complete: function(){
            $('.loading').hide();
        },
        success: function (response) {
            nextAction(response);
        },
        error: function (request, error) {
            errorFunction(request)
        }
    });
}

function resetForm(form = '', option = '') {
    $("#input-search-order").val('').trigger('change');
    $(form).find(':input').each(function () {
        if ($(this).hasClass('select2')) {
            $(this).val('').trigger('change');
        }

        if ($(this).is('select')) {
            $(this).prop("selectedIndex", 0);
        } else {
            switch (this.type) {
                case 'password':
                case 'text':
                case 'textarea':
                case 'file':
                case 'select-one':
                case 'select-multiple':
                case 'date':
                case 'number':
                case 'tel':
                case 'email':
                    $(this).val('');
                    break;
                case 'checkbox':
                case 'radio':
                    this.checked = false;
                    break;
            }
        }
    });
    hideMessageValidate(form);
}

function showMessageValidate(type, errors) {
    for (let key in errors){
        if(errors.hasOwnProperty(key)){
            $(`#${key}-${type}-error`).text(errors[key]);
        }
    }
}
function hideMessageValidate(form) {
    $(form).find('.validate-error').text('');
}

function sort (element) {
    let sortType = '';
    if (element.hasClass('sorting_asc')) {
        element.removeClass('sorting_asc');
        element.addClass('sorting_desc');
        sortType = 'desc';
    } else if (element.hasClass('sorting_desc')) {
        element.removeClass('sorting_desc');
        element.addClass('sorting_asc');
        sortType = 'asc';
    } else {
        element.addClass('sorting_asc');
        sortType = 'asc';
    }
    return sortType;
}


function developing() {
    swal("Hiện tại hệ thống đang phát triển. Quý khách vui lòng thử lại sau", "", "warning");
}


// Toast popup alert
function toastAlert(title, body, type)
{
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr[type](title)
}


