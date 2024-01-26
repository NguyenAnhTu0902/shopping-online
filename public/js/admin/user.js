$(document).ready(function () {
    getUser();

    $(document).on("click", "#search-user", function () {
        appendKeyWordSearch();
        let keyword = getKeyWordSearch();
        let sortColumn = $("span#hidden-sort-column").text();
        let sortType = $("span#hidden-sort-type").text();
        let page = 1;
        getUser(keyword, page, sortColumn, sortType);
    });

    $(document).on("click", ".page-link", function () {
        let page = $(this).data('id');
        let keyword = getKeyWordSearch();
        let sortColumn = $("span#hidden-sort-column").text();
        let sortType = $("span#hidden-sort-type").text();
        getUser(keyword, page, sortColumn, sortType);
    });

    $(document).on("click", ".add", function () {
        let api = API_CREATE;
        let data = $("#add-user-form").serialize();
        hideMessageValidate('#add-user-form');
        createOrUpdate(api, data, nextAddUser);
    });

    $(document).on("click", ".open-edit-modal", function () {
        let id = $(this).data('id');
        var api = API_DETAIL;
        api = api.replace(":id", id);
        $('.edit').data('id', id);
        hideMessageValidate('#edit-user-form');
        getData(api, id, appendDataEdit);
    });

    $(document).on("click", ".edit", function () {
        let id = $(this).data('id');
        let data = {
            id: id,
            code: $('#code-edit').val(),
            name: $('#name-edit').val(),
            location: $('#location-edit').val(),
            note: $('#note-edit').val(),
            user_head_id: $('#user_head_id-edit').val(),
        };
        var api = API_UPDATE;
        hideMessageValidate('#edit-user-form');
        createOrUpdate(api, data, nextEditUser);
    });

    $(document).on("click", ".delete-btn", function () {
        let name = $(this).data('name');
        swal({
            title: `Bạn có chắc chắn muốn xóa khoa "${name}" ?`,
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
                    createOrUpdate(api, data, nextDeleteUser);
                }
            });
    });
})

$(document).on("click", ".sorting", function () {
    let sortColumn = $(this).data('column-name');
    let sortType = sort($(this));
    let keyword = getKeyWordSearch();
    let page = $("li.page-item.active ").find("a.page-link").data('id');
    getUser(keyword, page, sortColumn, sortType);
});

function getUser(keyword = "", page = 1, sortColumn = "", sortType = "") {
    let api = API_LIST;
    let dataSearch = {
        keyword: keyword,
        page: page,
        sort_column: sortColumn,
        sort_type: sortType
    };
    getData(api, dataSearch, nextGetUser);
}
function searchUser() {
    let sortColumn = $("span#hidden-sort-column").text();
    let sortType = $("span#hidden-sort-type").text();
    let keyword = getKeyWordSearch();
    let page = $("li.page-item.active ").find("a.page-link").data('id');
    getUser(keyword, page, sortColumn, sortType);
}


function nextGetUser(data) {
    $('#content-list').html(data);
}

function appendDataEdit(data) {
    $('#edit-user').modal('show');
    let item = data.data;
    let type = 'edit';
    for (let key in item) {
        if (item.hasOwnProperty(key)) {
            $(`#${key}-${type}`).val(item[key])
        }
    }
}


function nextAddUser(data) {
    if (data.code == HTTP_UNPROCESSABLE_ENTITY) {
        showMessageValidate('add', data.errors);
    } else {
        $('#add-user').modal('hide');
        $('#add-user-form')[0].reset();
        hideMessageValidate('#add-user-form');
        toastAlert(data.message, "", "success");
        searchUser();
    }
}

function nextEditUser(data) {
    if (data.code == HTTP_UNPROCESSABLE_ENTITY) {
        showMessageValidate('edit', data.errors);
    } else {
        $('#edit-user').modal('hide');
        hideMessageValidate('#edit-user-form');
        toastAlert(data.message, "", "success");
        searchUser();
    }
}

function nextDeleteUser(data) {
    toastAlert(data.message, "", "success");
    searchUser();
}

function getKeyWordSearch () {
    let keywordSearchPhone = $("#input-search-phone-hidden").val();
    let keywordSearchName = $("#input-search-name-hidden").val();
    return {
        code: keywordSearchPhone,
        name: keywordSearchName,
    }
}

function appendKeyWordSearch () {
    let keywordSearchphone = $("#input-search-phone").val();
    let keywordSearchName = $("#input-search-name").val();
    $("#input-search-phone-hidden").val(keywordSearchphone);
    $("#input-search-name-hidden").val(keywordSearchName);
}

