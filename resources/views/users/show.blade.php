@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Détails d'un utilisateur
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('users.show_fields')
                    <div class="form-group col-sm-12">
                        <a href="{{ route('users.index') }}" class="btn btn-primary pull-right">
                            <i class="fa fa-chevron-left"></i> Retour
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
