function RESTRequest(options) {
    $.ajax({
        url: options.url,
        method: options.method,
        data: options.data,
        success: options.onSuccessCallback,
        fail: options.onFailCallback,
        beforeSend: function () {
            $("#loading").fadeIn();
        },
        complete: function () {
            $("#loading").fadeOut();
        }
    })
}