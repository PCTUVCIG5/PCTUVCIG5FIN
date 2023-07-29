@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Activites</h1>
                </div>
                <div class="col-sm-6">
                    <a href="" class="btn btn-primary float-lg-right"   data-toggle="modal" data-target="#addModal">
                        add
                    </a>
                    <a class="btn btn-primary float-right"
                       href="{{ route('activites.create') }}">
                        Add New
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
                @include('activites.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('activites.add')

@endsection

