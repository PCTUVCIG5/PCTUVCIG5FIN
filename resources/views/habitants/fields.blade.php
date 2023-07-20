<!-- Nomhabi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomHabi', 'Nomhabi:') !!}
    {!! Form::text('nomHabi', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Prenhabi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenHabi', 'Prenhabi:') !!}
    {!! Form::text('prenHabi', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Datenhabi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateNHabi', 'Datenhabi:') !!}
    {!! Form::text('dateNHabi', null, ['class' => 'form-control','id'=>'dateNHabi']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateNHabi').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Lieunhabi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lieuNHabi', 'Lieunhabi:') !!}
    {!! Form::text('lieuNHabi', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Sexehabi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexeHabi', 'Sexehabi:') !!}
    {!! Form::text('sexeHabi', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Telhabi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telHabi', 'Telhabi:') !!}
    {!! Form::text('telHabi', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>