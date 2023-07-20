<!-- Descriptionofr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descriptionOfr', 'Descriptionofr:') !!}
    {!! Form::text('descriptionOfr', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Datedebutofr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateDebutOfr', 'Datedebutofr:') !!}
    {!! Form::text('dateDebutOfr', null, ['class' => 'form-control','id'=>'dateDebutOfr']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateDebutOfr').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Datefinofr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateFinOfr', 'Datefinofr:') !!}
    {!! Form::text('dateFinOfr', null, ['class' => 'form-control','id'=>'dateFinOfr']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateFinOfr').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Entrepriseofr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entrepriseOfr', 'Entrepriseofr:') !!}
    {!! Form::text('entrepriseOfr', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Statutofr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('statutOfr', 'Statutofr:') !!}
    {!! Form::text('statutOfr', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>