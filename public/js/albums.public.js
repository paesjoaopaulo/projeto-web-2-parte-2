function renderizaHome() {
    var options = {
        url: "/api/albums",
        method: "GET",
        onSuccessCallback: function (data) {
            $(data.data).each(function (index, obj) {
                if (obj.cover) {
                    $(".li-albums").append(`
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="${obj.cover.url}" alt="${obj.cover.title}">
                    <div class="card-body">
                        <h5 class="card-title">${obj.title}</h5>
                        <p class="card-text">${obj.description}</p>
                        <a href="${obj.link}" class="btn btn-primary btn-block"><i class="fas fa-eye"></i> Open</a>
                    </div>
                </div>
            `);
                }
            })
        },
        onFailCallback: function (data) {
        },
    }

    RESTRequest(options);
}