@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Naissance</h1> 
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                  Launch Default Modal
                </button>
                <a class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-pere"><i class="nav-icon fas fa-user"></i>
                        LE PERE
                    </a>&nbsp;&nbsp; 
                <a class="btn btn-success float-right" data-toggle="modal" data-target="#modal-mere"><i class="nav-icon fas fa-user"></i>
                        LA MERE
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'naissances.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('naissances.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('naissances.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
    
@include('naissances.choixPereModal')
@include('naissances.choixMereModal')
@endsection


