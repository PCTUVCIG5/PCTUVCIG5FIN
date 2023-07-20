<!-- Prefecture Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prefecture', 'Prefecture:') !!}
    {!! Form::text('prefecture', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Centretatcivil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('centretatcivil', 'Centretatcivil:') !!}
    {!! Form::text('centretatcivil', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Registre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registre', 'Registre:') !!}
    {!! Form::text('registre', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Acte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('acte', 'Acte:') !!}
    {!! Form::text('acte', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Date Acte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_acte', 'Date Acte:') !!}
    {!! Form::text('date_acte', null, ['class' => 'form-control','id'=>'date_acte']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_acte').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenom', 'Prenom:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Delivre A Field -->
<div class="form-group col-sm-6">
    {!! Form::label('delivre_a', 'Delivre A:') !!}
    {!! Form::text('delivre_a', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Delivre Le Field -->
<div class="form-group col-sm-6">
    {!! Form::label('delivre_le', 'Delivre Le:') !!}
    {!! Form::text('delivre_le', null, ['class' => 'form-control','id'=>'delivre_le']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#delivre_le').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Delivre An Field -->
<div class="form-group col-sm-6">
    {!! Form::label('delivre_an', 'Delivre An:') !!}
    {!! Form::text('delivre_an', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Num Serie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_serie', 'Num Serie:') !!}
    {!! Form::text('num_serie', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Naissance Jour Moi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('naissance_jour_moi', 'Naissance Jour Moi:') !!}
    {!! Form::text('naissance_jour_moi', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Naissance An Field -->
<div class="form-group col-sm-6">
    {!! Form::label('naissance_an', 'Naissance An:') !!}
    {!! Form::text('naissance_an', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Naissance Heure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('naissance_heure', 'Naissance Heure:') !!}
    {!! Form::text('naissance_heure', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Naissance Minuite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('naissance_minuite', 'Naissance Minuite:') !!}
    {!! Form::text('naissance_minuite', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Naissance Nom Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('naissance_nom_prenom', 'Naissance Nom Prenom:') !!}
    {!! Form::text('naissance_nom_prenom', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Naissance Lieu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('naissance_lieu', 'Naissance Lieu:') !!}
    {!! Form::text('naissance_lieu', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Naissance Sexe Field -->
<div class="form-group col-sm-6">
    {!! Form::label('naissance_sexe', 'Naissance Sexe:') !!}
    {!! Form::text('naissance_sexe', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Declaration Faite Par Field -->
<div class="form-group col-sm-6">
    {!! Form::label('declaration_faite_par', 'Declaration Faite Par:') !!}
    {!! Form::text('declaration_faite_par', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Declaration Recue Pa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('declaration_recue_pa', 'Declaration Recue Pa:') !!}
    {!! Form::text('declaration_recue_pa', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
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