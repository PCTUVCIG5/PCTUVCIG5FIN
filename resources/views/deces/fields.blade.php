<!-- Deces Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deces_date', 'Deces Date:') !!}
    {!! Form::text('deces_date', null, ['class' => 'form-control','id'=>'deces_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#deces_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Deces Cause Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deces_cause', 'Deces Cause:') !!}
    {!! Form::text('deces_cause', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Habitant Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('habitant_id', 'Habitant Id:') !!}
    {!! Form::number('habitant_id', null, ['class' => 'form-control']) !!}
</div>