function RESTRequest(options) {
    $.ajax({
        url: options.url,
        method: options.method,
        success: options.onSuccessCallback,
        fail: options.onFailCallback,
    })
}