@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Modifier un utilisateur
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

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

                       <!-- Email Field -->
                       <div class="form-group col-sm-4">
                           {!! Form::label('email', 'E-mail:') !!}
                           {!! Form::text('email', null, ['placeholder' => 'Votre e-mail ici', 'class' => 'form-control']) !!}
                       </div>

                       <!-- Password Field -->
                       <div class="form-group col-sm-4">
                           {!! Form::label('password', 'Mot de passe:') !!}
                           {!! Form::password('password', ['placeholder' => 'Votre mot de passe ici', 'class' => 'form-control']) !!}
                       </div>

                       <!-- Password Field -->
                       <div class="form-group col-sm-4">
                           {!! Form::label('role', 'Rôle:') !!}
                           {!! Form::select('role',
                            ['Administrateur' => 'Administrateur' , 'User' => 'User'], null,
                            ['class' => 'form-control']) !!}
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


                       {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
