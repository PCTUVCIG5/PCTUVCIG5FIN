<!-- Dateame Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateAme', 'Dateame:') !!}
    {!! Form::text('dateAme', null, ['class' => 'form-control','id'=>'dateAme']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateAme').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Ancienqtier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ancienQtier', 'Ancienqtier:') !!}
    {!! Form::text('ancienQtier', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Habitant Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('habitant_id', 'Habitant Id:') !!}
    {!! Form::number('habitant_id', null, ['class' => 'form-control']) !!}
</div>