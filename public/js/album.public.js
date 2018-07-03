var album = {}

let current_url = window.location.pathname.split('/')

function showAlbum() {
    var optionsPhotos = {
        url: `/api/albums/${current_url[2]}`,
        method: "GET",
        onSuccessCallback: function (data) {
            album = data.data;
            $(data.data.photos).each(function (index, obj) {
                $("#album-title").html(`Album <b>${data.data.title}</b>`);
                $(".li-albums-photos").append(`
                <div class="card" style="width: 18rem;">
                     <a href="${obj.url}" data-lightbox="album" data-title="${obj.description}" data-alt="${obj.description}">
                        <img class="card-img-top" src="${obj.url}" alt="${obj.description}">
                     </a>
                     <div class="card-body">
                        <h5 class="card-title">${obj.description}</h5>
                    </div>
                </div>
            `);
            })

            $(data.data.comments).each(function (index, obj) {
                $("#comments .list-group").append(`
                <div class="card">
                  <div class="card-header">
                   ${obj.title}
                  </div>
                  <div class="card-body">
                    <blockquote class="blockquote mb-5">
                      <p>${obj.description}</p>
                      <footer class="blockquote-footer">${obj.author_name} <br> <cite title="${obj.description}">${obj.created_at}</cite></footer>
                    </blockquote>
                  </div>
                </div>
            `);
            })
        },
        onFailCallback: function (data) {
            alert("Erro na requisição");
        },
    }

    RESTRequest(optionsPhotos);
}

$("#form-comment").submit(function (event) {
    event.preventDefault();
    let form = $(this)
    var optionsComment = {
        url: `/api/albums/${album.id}/comments`,
        method: "POST",
        data: $(this).serializeArray(),
        onSuccessCallback: function (data) {
            $('#form-comment')[0].reset();
            $(data.data).each(function (index, obj) {
                $("#comments .list-group").append(`
                <div class="card">
                    <div class="card-header">
                    ${obj.title}
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-5">
                            <p>${obj.description}</p>
                            <footer class="blockquote-footer">${obj.author_name} <br> <cite title="${obj.description}">${obj.created_at}</cite></footer>
                        </blockquote>
                    </div>
                </div>
            `);
            })
        },
        onFailCallback: function (data) {
            alert("Erro na requisição");
        },
    }
    RESTRequest(optionsComment);

})


$("#frmNewAlbum").submit(function (event) {
    event.preventDefault();
    console.log($(this).serializeArray())
    let form = $(this)
    var optionsComment = {
        url: `/api/albums/${album.id}/comments`,
        method: "POST",
        data: $(this).serializeArray(),
        onSuccessCallback: function (data) {
            $('#form-comment')[0].reset();
            $(data.data).each(function (index, obj) {
                $("#comments .list-group").append(`
                <div class="card">
                    <div class="card-header">
                    ${obj.title}
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-5">
                            <p>${obj.description}</p>
                            <footer class="blockquote-footer">${obj.author_name} <br> <cite title="${obj.description}">${obj.created_at}</cite></footer>
                        </blockquote>
                    </div>
                </div>
            `);
            })
        },
        onFailCallback: function (data) {
            alert("Erro na requisição");
        },
    }
    RESTRequest(optionsComment);

})

