@extends('www.layoutsW.app1')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Naissances</h1>
                </div>
                <div class="col-sm-6">
                <a class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-pere"><i class="nav-icon fas fa-male"></i>
                        LE PERE
                    </a>&nbsp;&nbsp; 
                <a class="btn btn-success float-right" data-toggle="modal" data-target="#modal-mere"><i class="nav-icon fas fa-female "></i>
                        LA MERE
                    </a>
                    <a class="btn btn-primary float-right"
                       href="{{ route('declarationNaissance_creer') }}">
                        DECLARATION
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('www.naissances.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('www.naissances.choixPereModal')
@include('www.naissances.choixMereModal')

@endsection

