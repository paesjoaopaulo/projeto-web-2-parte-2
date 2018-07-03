<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iMagenTool</title>

    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/jumbotron/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">

    @stack('styles')
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{route('public.home')}}">iMagenTool</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('public.home')}}">Home</a>
            </li>
            @auth()
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Albums</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="{{route('albums.create')}}">Novo</a>
                        <a class="dropdown-item" href="{{route('albums.index')}}">Todos</a>
                    </div>
                </li>
            @endauth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Account</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    @guest
                        <a class="dropdown-item" href="{{route('login')}}">Login</a>
                        <a class="dropdown-item" href="{{route('register')}}">Register</a>
                    @endguest
                    @auth
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                    @endauth
                </div>
            </li>
        </ul>
    </div>
</nav>

<main role="main">
    <div id="loading" style="display: none;"></div>
    <div class="container">
        @yield('content')
    </div>

</main>

<footer class="container">
    <p>&copy; iMagenTool 2017-2018</p>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
<script src="{{asset('js/RESTRequest.js')}}"></script>

@stack('scripts')

</body>
</html>
