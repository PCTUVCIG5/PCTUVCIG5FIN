<!-- Nomhomm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomHomm', 'Nomhomm:') !!}
    {!! Form::text('nomHomm', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Prenhomm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenHomm', 'Prenhomm:') !!}
    {!! Form::text('prenHomm', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Datenhomm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateNHomm', 'Datenhomm:') !!}
    {!! Form::date('dateNHomm', null, ['class' => 'form-control','id'=>'dateNHomm']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateNHomm').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Lieunhomm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lieuNHomm', 'Lieunhomm:') !!}
    {!! Form::text('lieuNHomm', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Telhomm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telHomm', 'Telhomm:') !!}
    {!! Form::text('telHomm', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>