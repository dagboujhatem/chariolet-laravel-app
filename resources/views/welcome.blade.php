@extends('layouts.common')

@section('content')
    <!-- home section -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/carousel-image.jpg" class="d-block w-100" alt="Carousel image">
                <div class="carousel-caption d-md-block">
                    <h1>Achetez vos produits avec</h1>
                    <span class="site-name">le chariot intelligent</span>
                    <div class="offset-md-4 col-md-2">
                        <a class="btn btn-light btn-profiter btn-sm-lg" href="#home">Profiter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end home section -->


    <!-- bootstrap container -->
    <div class="container-fluid ">
        <!-- abaut section -->
        <div id="abaut">
            <h2 class="text-center">À propos Chariolet</h2>
            <p class="text-center about-text">Il s'agit d'un chariot intelligent à écran intégré dédié pour les clients fidèles (présentant une carte de fidélité)<br/>Ce chariot intelligent permet :<br/>1-la réduction du parcours d'achat à l'aide d’un Map du supermarché (l'écran intégré vous montre la place du produit désiré).<br/>2- la mise au courant le client des promotions sur les produits.<br/>3- le calcul du montant à payer (ajout et annulation).<br/>4-le paiement.</p>

            <div class="row m-0 pt-3">
                <div class="offset-sm-3 col-sm-2 text-center">
                    <img src="./images/image 2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-sm-2 img-padding-b text-center">
                    <img src="./images/image 1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-sm-2 text-center">
                    <img src="./images/image 3.jpg" class="img-fluid" alt="">
                </div>
            </div>

            <div class="row m-0 pt-3">
                <div class="col-sm-3 text-center">
                    <div class="box">
                        <img src="./images/lamp.png" class="img-fluid" alt="">
                        <h6>Intellignence</h6>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="box">
                        <img src="./images/star.png" class="img-fluid" alt="">
                        <h6>Protection</h6>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="box">
                        <img src="./images/clock.png" class="img-fluid" alt="">
                        <h6>Rentable</h6>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="box">
                        <img src="./images/heart.png" class="img-fluid" alt="">
                        <h6>Fidélité</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- end abaut section -->

        <!-- services section -->
        <div id="services">
            <h2 class="text-center">Services Chariolet</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <img class="card-img-top" src="./images/service1.jpg" alt="Service 1">
                        <div class="panel-heading">
                            <h1>Scan des produits</h1>
                        </div>
                        <div class="panel-body">
                            <p><strong>20</strong> Lorem</p>
                            <p><strong>15</strong> Ipsum</p>
                            <p><strong>5</strong> Dolor</p>
                            <p><strong>2</strong> Sit</p>
                            <p><strong>Endless</strong> Amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <img class="card-img-top" src="./images/service2.jpg" alt="Service 2">
                        <div class="panel-heading">
                            <h1>Localisation des produits</h1>
                        </div>
                        <div class="panel-body">
                            <p><strong>50</strong> Lorem</p>
                            <p><strong>25</strong> Ipsum</p>
                            <p><strong>10</strong> Dolor</p>
                            <p><strong>5</strong> Sit</p>
                            <p><strong>Endless</strong> Amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <img class="card-img-top" src="./images/service3.jpg" alt="Service 3">
                        <div class="panel-heading">
                            <h1>Payement direct</h1>
                        </div>
                        <div class="panel-body">
                            <p><strong>100</strong> Lorem</p>
                            <p><strong>50</strong> Ipsum</p>
                            <p><strong>25</strong> Dolor</p>
                            <p><strong>10</strong> Sit</p>
                            <p><strong>Endless</strong> Amet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end services section -->

        <!-- section contact -->
        <div id="contact" class="bg-grey">
            <h2 class="text-center">Contactez Nous</h2>
            <div class="row">
                <div class="offset-sm-3 col-sm-6 form-group">
                    <input class="form-control" id="firstName" name="firstName" placeholder="Nom" type="text" required>
                </div>
                <div class="offset-sm-3 col-sm-6 form-group">
                    <input class="form-control" id="lastName" name="lastName" placeholder="Prénom" type="text" required>
                </div>
                <div class="offset-sm-3 col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="E-mail" type="email" required>
                </div>
                <div class="offset-sm-3 col-sm-6 form-group">
                    <textarea class="form-control"  rows="5" id="message" name="message" placeholder="Message ..." type="message" required></textarea>
                </div>
                <div class="offset-sm-3 col-sm-3 col-md-2 form-group">
                    <button class="btn btn-primary btn-block btn-contact" type="submit">Envoyer</button>
                </div>
            </div>
        </div>
        <!-- end section contact -->
    </div>
    <!-- end bootstrap container -->
@endsection

@push('scripts')
    <!-- Smooth Scrolling : when clicking on the links in the navbar -->
    <script type="text/javascript">
        $(document).ready(function(){
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#home'], footer a[href='#abaut'],  footer a[href='#services'],  footer a[href='#contact']").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });


            // to close navbar on small device
            $('.navbar-nav>li>a').on('click', function(){
                $('.navbar-collapse').collapse('hide');
            });

        })
    </script>
@endpush
