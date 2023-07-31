<!-- Nomhabi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomHabi', 'NOM:') !!}
    {!! Form::text('nomHabi', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191,'placeholder'=>'VEUILLEZ ENTRER LE NOM']) !!}
</div>

<!-- Prenhabi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenHabi', 'PRENOMS:') !!}
    {!! Form::text('prenHabi', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191,'placeholder'=>'VEUILLEZ ENTRER LE PRENOMS']) !!}
</div>

<!-- Datenhabi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateNHabi', 'DATE DE NAISSANCE:') !!}
    {!! Form::date('dateNHabi', null, ['class' => 'form-control','id'=>'dateNHabi']) !!}
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
    {!! Form::label('lieuNHabi', 'LIEU DE NAISSANCE:') !!}
    {!! Form::text('lieuNHabi', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191,'placeholder'=>'VEUILLEZ ENTRER LE LIEU DE NAISSANCE']) !!}
</div>

<!-- Sexehabi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexeHabi', 'CIVILITE:') !!}
    <select name="sexeHabi" class="form-control select2bs4"  data-placeholder="Select a State" style="width: 100%;">
        <option value="">SELECTIONNEZ LE SEXE</option>
        <option value="F">F</option>
        <option value="M">M</option>
    </select>
</div>

<!-- Telhabi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telHabi', 'CONTACT:') !!}
    {!! Form::tel('telHabi', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>