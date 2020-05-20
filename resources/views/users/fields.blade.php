<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'Nom:') !!}
    {!! Form::text('first_name', null, ['placeholder' => 'Votre nom ici', 'class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Prénom:') !!}
    {!! Form::text('last_name', null, ['placeholder' => 'Votre prénom ici', 'class' => 'form-control']) !!}
</div>

<!-- Cin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cin', 'CIN:') !!}
    {!! Form::text('cin', null, ['placeholder' => 'Numéro de votre carte d\'identité nationale ici',
     'class' => 'form-control']) !!}
</div>

<!-- Credit Card Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('credit_card_number', 'Numéro de votre carte bancaire:') !!}
    {!! Form::text('credit_card_number', null, ['placeholder' => 'Numéro de votre carte bancaire ici',
     'class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'E-mail:') !!}
    {!! Form::text('email', null, ['placeholder' => 'Votre e-mail ici', 'class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Mot de passe:') !!}
    {!! Form::password('password', ['placeholder' => 'Votre mot de passe ici', 'class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" class="btn btn-success pull-right">
        <i class="fa fa-save"></i> Enregistrer
    </button>
    <a href="{{ route('users.index') }}" class="btn btn-primary pull-right">
        <i class="fa fa-chevron-left"></i> Retour
    </a>
</div>
