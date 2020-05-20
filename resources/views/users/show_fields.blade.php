<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'Nom:') !!}
    <p>{{ $user->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Prénom:') !!}
    <p>{{ $user->last_name }}</p>
</div>

<!-- Cin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cin', 'CIN:') !!}
    <p>{{ $user->cin }}</p>
</div>

<!-- Credit Card Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('credit_card_number', 'Numéro de votre carte bancaire:') !!}
    <p>{{ $user->credit_card_number }}</p>
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'E-mail:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Mot de passe:') !!}
    <p>{{ '******' }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Date de création:') !!}
    <p>{{ $user->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Date de dernier modification:') !!}
    <p>{{ $user->updated_at }}</p>
</div>

