<!-- Descriptiondman Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descriptionDman', 'Descriptiondman:') !!}
    {!! Form::text('descriptionDman', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Cvdman Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cvDman', 'Cvdman:') !!}
    {!! Form::text('cvDman', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Datedman Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateDman', 'Datedman:') !!}
    {!! Form::text('dateDman', null, ['class' => 'form-control','id'=>'dateDman']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateDman').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Statutdman Field -->
<div class="form-group col-sm-6">
    {!! Form::label('statutDman', 'Statutdman:') !!}
    {!! Form::text('statutDman', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Habitant Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('habitant_id', 'Habitant Id:') !!}
    {!! Form::number('habitant_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Offre Emploi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('offre_emploi_id', 'Offre Emploi Id:') !!}
    {!! Form::number('offre_emploi_id', null, ['class' => 'form-control']) !!}
</div>