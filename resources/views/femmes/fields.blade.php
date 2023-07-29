<!-- Nomfemm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomFemm', 'Nomfemm:') !!}
    {!! Form::text('nomFemm', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Prenfemm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenFemm', 'Prenfemm:') !!}
    {!! Form::text('prenFemm', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Datenfemm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateNFemm', 'Datenfemm:') !!}
    {!! Form::date('dateNFemm', null, ['class' => 'form-control','id'=>'dateNFemm']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateNFemm').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Lieunfemm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lieuNFemm', 'Lieunfemm:') !!}
    {!! Form::text('lieuNFemm', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Sexefemm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexeFemm', 'Sexefemm:') !!}
    {!! Form::text('sexeFemm', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Telfemm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telFemm', 'Telfemm:') !!}
    {!! Form::text('telFemm', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>