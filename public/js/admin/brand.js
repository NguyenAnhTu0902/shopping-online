$(document).ready(function () {
    getBrand();

    $(document).on("click", "#search-brand", function () {
        appendKeyWordSearch();
        let keyword = getKeyWordSearch();
        let sortColumn = $("span#hidden-sort-column").text();
        let sortType = $("span#hidden-sort-type").text();
        let page = 1;
        getBrand(keyword, page, sortColumn, sortType);
    });

    $(document).on("click", ".page-link", function () {
        let page = $(this).data('id');
        let keyword = getKeyWordSearch();
        let sortColumn = $("span#hidden-sort-column").text();
        let sortType = $("span#hidden-sort-type").text();
        getBrand(keyword, page, sortColumn, sortType);
    });

    $(document).on("click", ".add", function () {
        let api = API_CREATE;
        let data = $("#add-brand-form").serialize();
        hideMessageValidate('#add-brand-form');
        createOrUpdate(api, data, nextAddBrand);
    });

    $(document).on("click", ".open-edit-modal", function () {
        let id = $(this).data('id');
        var api = API_DETAIL;
        api = api.replace(":id", id);
        $('.edit').data('id', id);
        hideMessageValidate('#edit-brand-form');
        getData(api, id, appendDataEdit);
    });

    $(document).on("click", ".edit", function () {
        let id = $(this).data('id');
        let data = {
            id: id,
            name: $('#name-edit').val(),
        };
        var api = API_UPDATE;
        hideMessageValidate('#edit-brand-form');
        createOrUpdate(api, data, nextEditBrand);
    });

    $(document).on("click", ".delete-btn", function () {
        let name = $(this).data('name');
        swal({
            title: `Bạn có chắc chắn muốn xóa "${name}" ?`,
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
                    createOrUpdate(api, data, nextDeleteBrand);
                }
            });
    });
})

$(document).on("click", ".sorting", function () {
    let sortColumn = $(this).data('column-name');
    let sortType = sort($(this));
    let keyword = getKeyWordSearch();
    let page = $("li.page-item.active ").find("a.page-link").data('id');
    getBrand(keyword, page, sortColumn, sortType);
});

function getBrand(keyword = "", page = 1, sortColumn = "", sortType = "") {
    let api = API_LIST;
    let dataSearch = {
        keyword: keyword,
        page: page,
        sort_column: sortColumn,
        sort_type: sortType
    };
    getData(api, dataSearch, nextGetBrand);
}
function searchBrand() {
    let sortColumn = $("span#hidden-sort-column").text();
    let sortType = $("span#hidden-sort-type").text();
    let keyword = getKeyWordSearch();
    let page = $("li.page-item.active ").find("a.page-link").data('id');
    getBrand(keyword, page, sortColumn, sortType);
}


function nextGetBrand(data) {
    $('#content-list').html(data);
}

function appendDataEdit(data) {
    $('#edit-brand').modal('show');
    let item = data.data;
    let type = 'edit';
    for (let key in item) {
        if (item.hasOwnProperty(key)) {
            $(`#${key}-${type}`).val(item[key])
        }
    }
}


function nextAddBrand(data) {
    if (data.code == HTTP_UNPROCESSABLE_ENTITY) {
        showMessageValidate('add', data.errors);
    } else {
        $('#add-brand').modal('hide');
        $('#add-brand-form')[0].reset();
        hideMessageValidate('#add-brand-form');
        toastAlert(data.message, "", "success");
        searchBrand();
    }
}

function nextEditBrand(data) {
    if (data.code == HTTP_UNPROCESSABLE_ENTITY) {
        showMessageValidate('edit', data.errors);
    } else {
        $('#edit-brand').modal('hide');
        hideMessageValidate('#edit-brand-form');
        toastAlert(data.message, "", "success");
        searchBrand();
    }
}

function nextDeleteBrand(data) {
    toastAlert(data.message, "", "success");
    searchBrand();
}

function getKeyWordSearch () {
    let keywordSearchName = $("#input-search-name-hidden").val();
    return {
        name: keywordSearchName,
    }
}

function appendKeyWordSearch () {
    let keywordSearchName = $("#input-search-name").val();
    $("#input-search-name-hidden").val(keywordSearchName);
}

