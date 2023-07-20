<!-- Divoces Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('divoces_date', 'Divoces Date:') !!}
    {!! Form::text('divoces_date', null, ['class' => 'form-control','id'=>'divoces_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#divoces_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Divoces Lieu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('divoces_lieu', 'Divoces Lieu:') !!}
    {!! Form::text('divoces_lieu', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
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