@extends('layouts.common')

@section('content')
    <!-- bootstrap container -->
    <div class="container-fluid box-container">
        <div class="row m-0 justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="col-md-12 login-box">
                <form class="form login-form" method="post" action="{{ url('/register') }}">
                    @csrf
                    <h3 class="text-center text-custom-color">Inscrivez-vous</h3>
                    <hr>
                    <div class="form-group has-feedback {{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <label for="first_name" class="text-custom-color">Nom:</label>
                        <input type="text" name="first_name" id="first_name" class="form-control"
                               placeholder="Votre nom"  value="{{ old('first_name') }}">
                        @if ($errors->has('first_name'))
                            <small class="help-block text-danger">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </small>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <label for="last_name" class="text-custom-color">Prénom:</label>
                        <input type="text" name="last_name" id="last_name" class="form-control"
                               placeholder="Votre prénom" value="{{ old('last_name') }}">
                        @if ($errors->has('last_name'))
                            <small class="help-block text-danger">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </small>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('cin') ? ' has-error' : '' }}">
                        <label for="cin" class="text-custom-color">CIN:</label>
                        <input type="text" name="cin" id="cin" class="form-control"
                               placeholder="Votre CIN" value="{{ old('cin') }}">
                        @if ($errors->has('cin'))
                            <small class="help-block text-danger">
                                <strong>{{ $errors->first('cin') }}</strong>
                            </small>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('credit_card_number') ? ' has-error' : '' }}">
                        <label for="credit_card_number" class="text-custom-color">Numéro de votre carte bancaire:</label>
                        <input type="text" name="credit_card_number" id="credit_card_number" class="form-control"
                               placeholder="Votre numéro de carte bancaire" value="{{ old('credit_card_number') }}">
                        @if ($errors->has('credit_card_number'))
                            <small class="help-block text-danger">
                                <strong>{{ $errors->first('credit_card_number') }}</strong>
                            </small>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="text-custom-color">E-mail:</label>
                        <input type="email" name="email" id="email" class="form-control"
                               placeholder="Votre e-mail" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <small class="help-block text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </small>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="text-custom-color">Mot de passe:</label>
                        <input type="password" name="password" id="password" class="form-control"
                               placeholder="Votre mot de passe">
                        @if ($errors->has('password'))
                            <small class="help-block text-danger">
                                <strong>{{ $errors->first('password') }}</strong>
                            </small>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-block btn-md"
                               value="Créer votre compte">
                    </div>
                </form>
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
