@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <section id="album">
                <h2 id="album-title"></h2>
                <div class="li-albums-photos d-flex flex-row justify-content-center align-self-start flex-wrap">
                </div>
            </section>
        </div>
        <div class="col-md-4">
            <section id="comments">
                <h2><i class="fas fa-comments"></i> Comments</h2>
                <div class="list-group list-unstyled">

                </div>

                <h2><i class="fas fa-comment"></i> Leave a comment</h2>
                <form id="form-comment" class="form col-sm-12">
                    <div class="form-group">
                        <label for="author_name">Your name</label>
                        <input name="author_name" class="form-control" id="author_name">
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="description">Message</label>
                        <textarea name="description" class="form-control" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Send</button>
                    </div>
                    {{csrf_field()}}
                </form>
            </section>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{asset('lib/lightbox/css/lightbox.css')}}" rel="stylesheet">
@endpush
@push('scripts')
    <script type="text/javascript" src="{{asset('lib/lightbox/js/lightbox.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/album.public.js')}}"></script>
    <script>
        showAlbum();
    </script>
@endpush