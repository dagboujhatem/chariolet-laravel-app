<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/styles.css') !!}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- title of the site and favicon tag -->
    <title>Chariolet</title>
    <link rel="icon" type="image/jpg" href="{!! asset('./images/logo.jpg') !!}" />
    @yield('css')
</head>
<body  id="home" data-spy="scroll" data-target=".navbar" data-offset="60">

<!-- begin navbar section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{!! asset('images/logo.jpg') !!}" class="img-fluid logo" alt="Chariolet logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#home">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#abaut">À propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a href="{{ url('/login') }}" class="btn btn-outline-primary btn-fixed-width my-2 my-sm-0 mr-3 btn-login">Se connecter</a>
            <a href="{{ url('/register') }}" class="btn btn-outline-primary btn-fixed-width my-2 my-sm-0 btn-register">S'inscrire</a>
        </form>
    </div>
</nav>
<!-- end of navbar section -->

<!--  page content -->
    @yield('content')
<!--  page content -->

<!-- footer section -->
<footer class="footer">
    <div class="row m-0">
        <div class="offset-md-1 col-md-2 offset-lg-2 col-lg-2 text-center">
            <a class="nav-link" href="#home">Accueil</a>
        </div>
        <div class="col-md-3 col-lg-2 text-center">
            <a class="nav-link" href="#abaut">À propos</a>
        </div>
        <div class="col-md-3 col-lg-2 text-center">
            <a class="nav-link" href="#services">Services</a>
        </div>
        <div class="col-md-2 col-lg-2 text-center">
            <a class="nav-link" href="#contact">Contact</a>
        </div>
    </div>

    <div class="row m-0">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
            <ul class="list-unstyled list-inline social text-center">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook ml-5"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter ml-5"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-youtube ml-5"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="row m-0">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-">
            <p class="text-center text-white copy-text">&copy Copyright 2020 - All Rights Reserved | Developped & designed by<a class="text-green ml-2" href="#home" target="_blank">WAFA</a></p>
        </div>
    </div>
</footer>
<!-- end footer section -->

<!-- JavaScript section -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{!! asset('js/jquery-3.1.1.min.js') !!}"></script>
<script src="{!! asset('js/popper.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
@stack('scripts')
</body>
</html>
