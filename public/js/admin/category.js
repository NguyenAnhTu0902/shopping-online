$(document).ready(function () {
    getCategory();

    $(document).on("click", "#search-category", function () {
        appendKeyWordSearch();
        let keyword = getKeyWordSearch();
        let sortColumn = $("span#hidden-sort-column").text();
        let sortType = $("span#hidden-sort-type").text();
        let page = 1;
        getCategory(keyword, page, sortColumn, sortType);
    });

    $(document).on("click", ".page-link", function () {
        let page = $(this).data('id');
        let keyword = getKeyWordSearch();
        let sortColumn = $("span#hidden-sort-column").text();
        let sortType = $("span#hidden-sort-type").text();
        getCategory(keyword, page, sortColumn, sortType);
    });

    $(document).on("click", ".add", function () {
        let api = API_CREATE;
        let data = $("#add-category-form").serialize();
        hideMessageValidate('#add-category-form');
        createOrUpdate(api, data, nextAddCategory);
    });

    $(document).on("click", ".open-edit-modal", function () {
        let id = $(this).data('id');
        var api = API_DETAIL;
        api = api.replace(":id", id);
        $('.edit').data('id', id);
        hideMessageValidate('#edit-category-form');
        getData(api, id, appendDataEdit);
    });

    $(document).on("click", ".edit", function () {
        let id = $(this).data('id');
        let data = {
            id: id,
            name: $('#name-edit').val(),
        };
        var api = API_UPDATE;
        hideMessageValidate('#edit-category-form');
        createOrUpdate(api, data, nextEditCategory);
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
                    createOrUpdate(api, data, nextDeleteCategory);
                }
            });
    });
})

$(document).on("click", ".sorting", function () {
    let sortColumn = $(this).data('column-name');
    let sortType = sort($(this));
    let keyword = getKeyWordSearch();
    let page = $("li.page-item.active ").find("a.page-link").data('id');
    getCategory(keyword, page, sortColumn, sortType);
});

function getCategory(keyword = "", page = 1, sortColumn = "", sortType = "") {
    let api = API_LIST;
    let dataSearch = {
        keyword: keyword,
        page: page,
        sort_column: sortColumn,
        sort_type: sortType
    };
    getData(api, dataSearch, nextGetCategory);
}
function searchCategory() {
    let sortColumn = $("span#hidden-sort-column").text();
    let sortType = $("span#hidden-sort-type").text();
    let keyword = getKeyWordSearch();
    let page = $("li.page-item.active ").find("a.page-link").data('id');
    getCategory(keyword, page, sortColumn, sortType);
}


function nextGetCategory(data) {
    $('#content-list').html(data);
}

function appendDataEdit(data) {
    $('#edit-category').modal('show');
    let item = data.data;
    let type = 'edit';
    for (let key in item) {
        if (item.hasOwnProperty(key)) {
            $(`#${key}-${type}`).val(item[key])
        }
    }
}


function nextAddCategory(data) {
    if (data.code == HTTP_UNPROCESSABLE_ENTITY) {
        showMessageValidate('add', data.errors);
    } else {
        $('#add-category').modal('hide');
        $('#add-category-form')[0].reset();
        hideMessageValidate('#add-category-form');
        toastAlert(data.message, "", "success");
        searchCategory();
    }
}

function nextEditCategory(data) {
    if (data.code == HTTP_UNPROCESSABLE_ENTITY) {
        showMessageValidate('edit', data.errors);
    } else {
        $('#edit-category').modal('hide');
        hideMessageValidate('#edit-category-form');
        toastAlert(data.message, "", "success");
        searchCategory();
    }
}

function nextDeleteCategory(data) {
    toastAlert(data.message, "", "success");
    searchCategory();
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

