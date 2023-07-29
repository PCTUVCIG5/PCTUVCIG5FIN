@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Permissions</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('permissions.create') }}">
                        Add New
                    </a>
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-sm">
                  AJOOUTER
                </button>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('permissions.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>



<div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Small Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="content px-3">

            @include('adminlte-templates::common.errors')

            <div class="card">

                {!! Form::open(['route' => 'permissions.store']) !!}

                <div class="card-body">

                    <div class="row">
                    <div class="form-group col-sm-12">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
                    </div>

                    <!-- Guard Name Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::label('guard_name', 'Guard Name:') !!}
                        {!! Form::text('guard_name', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
                    </div>

                    <!-- Group Name Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::label('group_name', 'Group Name:') !!}
                        {!! Form::text('group_name', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
                    </div>
                    </div>

                </div>

                <!-- <div class="card-footer">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('permissions.index') }}" class="btn btn-default">Cancel</a>
                </div> -->

                

            </div>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">ENREGISTRER</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      {!! Form::close() !!}

      @endsection