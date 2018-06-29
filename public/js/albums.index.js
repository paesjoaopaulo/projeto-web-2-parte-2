var options = {
    url: location.href + "api/albums",
    method: "GET",
    beforeSuccess: function () {
        $("#loading").fadeIn();
    },
    onSuccessCallback: function (data) {
        $(data).each(function (index, obj) {
            $("#albums").append(`
                <li class="list-group-item">
                    <a href="/albums/${obj.id}">${obj.title}</a>
                </li>
            `);
        })
    },
    onFailCallback: function (data) {
        console.log(data)
    },
    complete: function () {
        $("#loading").fadeOut();
    }
}

RESTRequest(options);