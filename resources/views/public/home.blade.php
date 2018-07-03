@extends('master')

@section('content')
    <div class="jumbotron">
        <div class="container">
            @guest
                <h1 class="display-3">Welcome!</h1>
            @elseguest()
                <h1 class="display-3">Welcome, {{Auth::name()}}!</h1>
            @endguest
            <p>Só Deus na causa, irmão!</p>
            <p><a class="btn btn-primary btn-lg" href="{{route('register')}}" role="button">Register</a></p>
        </div>
    </div>

    <section id="albums">
        <h2>Albums</h2>
        <div class="li-albums d-flex flex-row justify-content-center align-self-start flex-wrap">
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{asset('js/albums.public.js')}}"></script>
    <script>
        renderizaHome();
    </script>
@endpush