@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <section id="newAlbum">
                <form id="frmNewAlbum" class="form">
                    <fieldset>
                        <legend>New album</legend>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input class="form-control" name="description">
                        </div>
                        <legend>Photos</legend>
                        <div class="add-photos">

                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-info pull-right" id="add-photo-btn">Add photo</button>
                        </div>
                    </fieldset>
                    {{csrf_field()}}
                    <div class="form-group">
                        <button class="btn btn-success">Publish</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        let countPhotos = 0;
        $("#add-photo-btn").click(function () {
            $(".add-photos").append(`
                <div class="add-photo-row">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" name="photo[${countPhotos}][description]">
                    </div>
                    <div class="form-group">
                        <label for="description">URL</label>
                        <input class="form-control" name="photo[${countPhotos}][url]">
                    </div>
                </div>
                <hr>
            `);
            countPhotos++;
        });
        
        $("#frmNewAlbum").submit(function (event) {
            event.preventDefault();
            var optionsNewAlbum = {
                url: `/api/albums`,
                method: "POST",
                data: $(this).serializeArray(),
                onSuccessCallback: function (data) {
                    $('#frmNewAlbum')[0].reset();
                    alert("Album cadastrado com sucesso!");
                    console.log(data)
                },
                onFailCallback: function (data) {
                    alert("Erro na requisição");
                },
            }
            RESTRequest(optionsNewAlbum);
        })
    </script>
@endpush