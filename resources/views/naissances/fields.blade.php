<!-- Nom Nais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom_nais', 'Nom Nais:') !!}
    {!! Form::text('nom_nais', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Prenoms Nais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenoms_nais', 'Prenoms Nais:') !!}
    {!! Form::text('prenoms_nais', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Datenaissance Nais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateNaissance_nais', 'Datenaissance Nais:') !!}
    {!! Form::date('dateNaissance_nais', null, ['class' => 'form-control','id'=>'dateNaissance_nais']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateNaissance_nais').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Lieunaissance Nais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lieuNaissance_nais', 'Lieunaissance Nais:') !!}
    {!! Form::text('lieuNaissance_nais', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Mode Nais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mode_nais', 'Mode Nais:') !!}
    {!! Form::text('mode_nais', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Lieuhabitation Nais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lieuHabitation_nais', 'Lieuhabitation Nais:') !!}
    {!! Form::text('lieuHabitation_nais', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Homme Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('homme_id', 'Homme Id:') !!}

    <select name="homme_id" class="form-control select2bs4" 
    multiple="multiple" data-placeholder="Select a State" style="width: 100%;">

    @foreach($hommes as $homme)
        <option value="{{$homme->id}}">{{$homme->nomHomm}} {{$homme->prenHomm}}</option>
    @endforeach
    </select>
</div>

<!-- Femme Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('femme_id', 'Femme Id:') !!}    
    <select name="femme_id" class="form-control select2bs4" 
    multiple="multiple" data-placeholder="Select a State" style="width: 100%;">

    @foreach($femmes as $femme)
        <option value="{{$femme->id}}">{{$femme->nomFemm}} {{$femme->prenFemm}}</option>
    @endforeach
    </select>
</div>