<!-- Datedme Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateDme', 'Datedme:') !!}
    {!! Form::text('dateDme', null, ['class' => 'form-control','id'=>'dateDme']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateDme').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Nouveauqtier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nouveauQtier', 'Nouveauqtier:') !!}
    {!! Form::text('nouveauQtier', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Habitant Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('habitant_id', 'Habitant Id:') !!}
    {!! Form::number('habitant_id', null, ['class' => 'form-control']) !!}
</div>