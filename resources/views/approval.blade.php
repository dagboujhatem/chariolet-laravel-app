@extends('layouts.common')

@section('css')
<style>
    .login-box {
        border: none !important;
         background-color: #f6f6f6 !important;
    }
</style>
@endsection

@section('content')
    <!-- bootstrap container -->
    <div class="container-fluid box-container">
        <div class="row m-0 justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="col-md-12 login-box">
                <div class="card">
                    <div class="card-header text-white bg-info">Compte en attente d'acceptation</div>
                    <div class="card-body">
                        Votre compte attend l'acceptation de notre administrateur. Veuillez vérifier ultérieurement.
                        <br><br>
                        Merci d'utiliser notre application!
                        <br>
                        Très cordialement.
                    </div>
                </div>
            </div>
            </div>
        </div>
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
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    location.href = "{{ URL::to('/') }}" + hash;
                } // End if
            });


            // to close navbar on small device
            $('.navbar-nav>li>a').on('click', function(){
                $('.navbar-collapse').collapse('hide');
            });

        })
    </script>
@endpush
