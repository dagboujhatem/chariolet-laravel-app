@extends('layouts.common')

@section('content')
    <!-- bootstrap container -->
    <div class="container-fluid box-container">
        <div class="row m-0 justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="col-md-12 login-box">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form login-form" method="post" action="{{ url('/password/email') }}">
                        @csrf
                        <h3 class="text-center text-custom-color">Trouver votre compte</h3>
                        <hr>
                        <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="text-custom-color">Quel est votre e-mail?</label>
                            <input type="email" name="email" id="email" class="form-control"
                                   placeholder="Votre e-mail" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <small class="help-block text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </small>
                            @endif
                        </div>
                       <div class="row">
                           <div class="form-group col-md-12">
                               <button type="submit" class="btn btn-primary btn-block">
                                   <i class="fa fa-btn fa-envelope"></i> Envoyer le lien de réinitialisation du mot de passe
                               </button>
                           </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end bootstrap container -->
@endsection
