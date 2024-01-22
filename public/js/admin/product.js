
$(document).ready(function () {
    getProduct();

    $(document).on("click", "#search-product", function () {
        appendKeyWordSearch();
        let sortColumn = $("span#hidden-sort-column").text();
        let sortType = $("span#hidden-sort-type").text();
        let keyword = getKeyWordSearch();
        let page = 1;
        getProduct(keyword, page, sortColumn, sortType);
    });

    $(document).on("click", ".page-link", function () {
        let page = $(this).data('id');
        let keyword = getKeyWordSearch();
        let sortColumn = $("span#hidden-sort-column").text();
        let sortType = $("span#hidden-sort-type").text();
        getProduct(keyword, page, sortColumn, sortType);
    });

    $(document).on("click", ".add", function () {
        let api = API_CREATE;
        let data = $("#add-product-form").serialize();
        hideMessageValidate('#add-product-form');
        createOrUpdate(api, data, nextAddProduct);
    });
    $(document).on("click", ".btn-update-image", function () {
        let api = API_ADD_IMAGE;
        var data = new FormData($("#add-news-form")[0]);
        hideMessageValidate('#add-image-form');
        createOrUpdateWithFile(api, data, nextAddProduct);
    });

    $(document).on("click", ".open-edit-modal", function () {
        let id = $(this).data('id');
        var api = API_DETAIL;
        api = api.replace(":id", id);
        $('.edit').data('id', id);
        hideMessageValidate('#edit-product-form');
        getData(api, id, appendDataEdit);
    });

    $(document).on("click", ".edit", function () {
        let id = $(this).data('id');
        let data = {
            id: id,
            name: $('#name-edit').val(),
            category_id: $('#category_id-edit').val(),
            brand_id: $('#brand_id-edit').val(),
            price: $('#price-edit').val(),
            discount: $('#discount-edit').val(),
            description: $('#description-edit').val(),
            featured: $('#featured-edit').val()
        };
        var api = API_UPDATE;
        hideMessageValidate('#edit-product-form');
        createOrUpdate(api, data, nextEditProduct);
    });

    $(document).on("click", ".image-btn", function () {
        let id = $(this).data('id');
        let api = API_IMAGE;
        api = api.replace(":id", id);
        getData(api, id, appendDataImage);
    });
    $(document).on("click", ".detail-btn", function () {
        let id = $(this).data('id');
        let api = API_DETAIL_PRODUCT;
        api = api.replace(":id", id);
        getData(api, id, appendDataDetail);
    });

    $(document).on("click", ".delete-btn", function () {
        swal({
            title: `Bạn có chắc chắn muốn xóa sản phẩm này ?`,
            icon: "warning",
            buttons: true,
            dangerMode: true,
            buttons: ["Hủy", "OK"],
        })
            .then((willDelete) => {
                if (willDelete) {
                    let api = API_DELETE;
                    let id = $(this).data('id');
                    let data = {id: id};
                    createOrUpdate(api, data, nextDeleteProduct);
                }
            });
    });
})
$(document).on("click", ".delete-image-btn", function () {
    swal({
        title: `Bạn có chắc chắn muốn xóa hình ảnh này ?`,
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Hủy", "OK"],
    })
        .then((willDelete) => {
            if (willDelete) {
                let api = API_DELETE_IMAGE;
                let id = $(this).data('id');
                let product_id = $("#id-hidden").val();
                let data = {id: id, product_id: product_id};
                createOrUpdate(api, data, nextDeleteImage);
            }
        });
});

$(document).on("click", ".sorting", function () {
    let sortColumn = $(this).data('column-name');
    let sortType = sort($(this));
    let keyword = getKeyWordSearch();
    let page = $("li.page-item.active ").find("a.page-link").data('id');
    getProduct(keyword, page, sortColumn, sortType);
});

function getProduct(keyword = "", page = 1, sortColumn = "", sortType = "") {
    let api = API_LIST;
    let dataSearch = {
        keyword: keyword,
        page: page,
        sort_column: sortColumn,
        sort_type: sortType
    };
    getData(api, dataSearch, nextGetProduct);
}

function searchProduct() {
    let sortColumn = $("span#hidden-sort-column").text();
    let sortType = $("span#hidden-sort-type").text();
    let keyword = getKeyWordSearch();
    let page = $("li.page-item.active ").find("a.page-link").data('id');
    getProduct(keyword, page, sortColumn, sortType);
}


function nextGetProduct(data) {
    $('#content-list').html(data);
}

function appendDataEdit(data) {
    $('#edit-product').modal('show');
    let item = data.data;
    let type = 'edit';
    for (let key in item) {
        if (item.hasOwnProperty(key)) {
            if (key === 'featured' && item[key] == 1) {
                $(`#${key}-${type}`).prop('checked', true);
            }else{
                $(`#${key}-${type}`).val(item[key])
            }
        }
    }
}


function nextAddProduct(data) {
        if (data.code == HTTP_UNPROCESSABLE_ENTITY) {
        showMessageValidate('add', data.errors);
    } else {
        $('#add-product').modal('hide');
        $('#add-product-form')[0].reset();
        hideMessageValidate('#add-product-form');
        toastAlert(data.message, "", "success");
        searchProduct();
    }
}

function nextEditProduct(data) {
    if (data.code == HTTP_UNPROCESSABLE_ENTITY) {
        showMessageValidate('edit', data.errors);
    } else {
        $('#edit-product').modal('hide');
        hideMessageValidate('#edit-product-form');
        toastAlert(data.message, "", "success");
        searchProduct();
    }
}
function appendDataImage(data) {
    $('#product-image').find('.modal-body').html(data);
    $('#product-image').modal("show")
}
function appendDataDetail(data) {
    $('#detail-product').find('.modal-body').html(data);
    $('#detail-product').modal("show")
}
function nextDeleteProduct(data) {
    toastAlert(data.message, "", "success");
    searchProduct();
}
function nextDeleteImage(data) {
    toastAlert(data.message, "", "success");
    setTimeout(() => {
        let id = data.product_id;
        let api = API_IMAGE;
        api = api.replace(":id", id);
        getData(api, id, appendDataImage);
    }, 500)
}

function getKeyWordSearch () {
    let keywordSearchBrand = $("#input-search-brand_id-hidden").val();
    let keywordSearchName = $("#input-search-name-hidden").val();
    return {
        brand_id: keywordSearchBrand,
        name: keywordSearchName,
    }
}
function appendKeyWordSearch () {
    let keywordSearchBrand =  $("#input-search-brand_id").val();
    let keywordSearchName = $("#input-search-name").val();
    $("#input-search-name-hidden").val(keywordSearchName);
    $("#input-search-brand_id-hidden").val(keywordSearchBrand);
}
$('.featured_checkbox').change(function(){
    if ($(this).is(':checked')) {
        $(this).val(1);
    } else {
        $(this).val(0);
    }
});

