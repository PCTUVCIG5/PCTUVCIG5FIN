<!-- Mariage Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mariage_date', 'Mariage Date:') !!}
    {!! Form::text('mariage_date', null, ['class' => 'form-control','id'=>'mariage_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#mariage_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Mariage Lieu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mariage_lieu', 'Mariage Lieu:') !!}
    {!! Form::text('mariage_lieu', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Homme Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('homme_id', 'Homme Id:') !!}
    {!! Form::number('homme_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Femme Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('femme_id', 'Femme Id:') !!}
    {!! Form::number('femme_id', null, ['class' => 'form-control']) !!}
</div>