@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>AJOUTER UN NOUVEAU MEMBRE DU VILLAGE</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            <form action="{{ route('habitants.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

            <div class="card-body">

                <div class="row">
                    @include('habitants.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('ENREGISTRER', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('habitants.index') }}" class="btn btn-danger">FERMER</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
