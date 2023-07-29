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
    {!! Form::label('Qtier', 'Ancienqtier:') !!}
    {!! Form::text('Qtier', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Habitant Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('habitant_id', 'Habitant Id:') !!}
    <select name="habitant_id" class="form-control select2bs4" 
    multiple="multiple" data-placeholder="Select a State" style="width: 100%;">

    @foreach($habitants as $habitant)
        <option value="{{$habitant->id}}">{{$habitant->nomHabi}} {{$habitant->prenHabi}}</option>
    @endforeach
    </select> 
</div>
<div class="form-group col-sm-6">
    {!! Form::label('descriptionAmen', 'descriptionAmen:') !!}
    {!! Form::textarea('descriptionAmen', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>