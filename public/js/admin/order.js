
$(document).ready(function () {
    getOrder();

    $(document).on("click", "#search-order", function () {
        appendKeyWordSearch();
        let sortColumn = $("span#hidden-sort-column").text();
        let sortType = $("span#hidden-sort-type").text();
        let keyword = getKeyWordSearch();
        let page = 1;
        getOrder(keyword, page, sortColumn, sortType);
    });

    $(document).on("click", ".page-link", function () {
        let page = $(this).data('id');
        let keyword = getKeyWordSearch();
        let sortColumn = $("span#hidden-sort-column").text();
        let sortType = $("span#hidden-sort-type").text();
        getOrder(keyword, page, sortColumn, sortType);
    });


    $(document).on("click", ".open-edit-modal", function () {
        let id = $(this).data('id');
        let api = API_DETAIL;
        api = api.replace(":id", id);
        getData(api, id, appendDataDetail);
    });

    $(document).on("click", ".btn-update-status", function () {
        let data = {
            id:  $('#id_order').val(),
            status: $('#input-status').val(),
        };
        var api = API_UPDATE;
        createOrUpdate(api, data, nextEditOrder);
    });

    $(document).on("click", ".delete-btn", function () {
        let name = $(this).data('name');
        swal({
            title: `Bạn có chắc chắn muốn xóa đơn hàng này ?`,
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
                    createOrUpdate(api, data, nextDeleteOrder);
                }
            });
    });
})

$(document).on("click", ".sorting", function () {
    let sortColumn = $(this).data('column-name');
    let sortType = sort($(this));
    let keyword = getKeyWordSearch();
    let page = $("li.page-item.active ").find("a.page-link").data('id');
    getOrder(keyword, page, sortColumn, sortType);
});

function getOrder(keyword = "", page = 1, sortColumn = "", sortType = "") {
    let api = API_LIST;
    let dataSearch = {
        keyword: keyword,
        page: page,
        sort_column: sortColumn,
        sort_type: sortType
    };
    getData(api, dataSearch, nextGetOrder);
}

function searchOrder() {
    let sortColumn = $("span#hidden-sort-column").text();
    let sortType = $("span#hidden-sort-type").text();
    let keyword = getKeyWordSearch();
    let page = $("li.page-item.active ").find("a.page-link").data('id');
    getOrder(keyword, page, sortColumn, sortType);
}


function nextGetOrder(data) {
    $('#content-list').html(data);
}

function appendDataDetail(data) {
    $('#detail-order').find('.modal-body').html(data);
    $('#detail-order').modal("show")
}


function nextEditOrder(data) {
    $('#detail-order').modal('hide');
    toastAlert(data.message, "", "success");
    searchOrder();
}

function nextDeleteOrder(data) {
    toastAlert(data.message, "", "success");
    searchOrder();
}

function getKeyWordSearch () {
    let keywordSearchStatus = $("#input-search-status-hidden").val();
    let keywordSearchName = $("#input-search-name-hidden").val();
    return {
        status: keywordSearchStatus,
        name: keywordSearchName,
    }
}
function appendKeyWordSearch () {
    let keywordSearchStatus=  $("#input-search-status").val();
    let keywordSearchName = $("#input-search-name").val();
    $("#input-search-name-hidden").val(keywordSearchName);
    $("#input-search-status-hidden").val(keywordSearchStatus);
}

