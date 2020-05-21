<!-- First Name Field -->
<div class="form-group col-sm-4">
    {!! Form::label('first_name', 'Nom:') !!}
    <p>{{ $user->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-4">
    {!! Form::label('last_name', 'Prénom:') !!}
    <p>{{ $user->last_name }}</p>
</div>

<!-- Cin Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cin', 'CIN:') !!}
    <p>{{ $user->getCIN() }}</p>
</div>

<!-- Credit Card Number Field -->
<div class="form-group col-sm-4">
    {!! Form::label('credit_card_number', 'Numéro de votre carte bancaire:') !!}
    <p>{{ $user->getCreditCardNumber() }}</p>
</div>

<!-- Email Field -->
<div class="form-group col-sm-4">
    {!! Form::label('email', 'E-mail:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Password Field -->
<div class="form-group col-sm-4">
    {!! Form::label('password', 'Mot de passe:') !!}
    <p>{{ '******' }}</p>
</div>

<!-- Role Field -->
<div class="form-group col-sm-4">
    {!! Form::label('role', 'Rôle:') !!}
    <p>{{ $user->getRoleNames()->first() }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-4">
    {!! Form::label('created_at', 'Date de création:') !!}
    <p>{{ $user->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-4">
    {!! Form::label('updated_at', 'Date de dernier modification:') !!}
    <p>{{ $user->updated_at }}</p>
</div>

