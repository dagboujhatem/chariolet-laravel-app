@extends('layouts.common')

@section('content')
    <!-- bootstrap container -->
    <div class="container-fluid box-container">
        <div class="row m-0 justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="col-md-12 login-box">
                <form class="form login-form" method="post" action="{{ url('/login') }}">
                    @csrf
                    <h3 class="text-center text-custom-color">Identifiez-vous</h3>
                    <hr>
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
                        <input id="remember-me" name="remember-me" type="checkbox">
                        <label for="remember-me" class="text-custom-color">Garder ma session active
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-block text-white btn-md" value="Valider">
                    </div>
                    <div class="text-right forgot-password">
                        <a href="{{ url('/password/reset') }}">Mot de passe oublier?</a>
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
