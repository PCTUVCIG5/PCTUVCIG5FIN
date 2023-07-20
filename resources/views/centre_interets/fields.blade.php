<!-- Idhom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idHom', 'Idhom:') !!}
    {!! Form::text('idHom', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Typecein Field -->
<div class="form-group col-sm-6">
    {!! Form::label('typeCeIn', 'Typecein:') !!}
    {!! Form::text('typeCeIn', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Habitant Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('habitant_id', 'Habitant Id:') !!}
    {!! Form::number('habitant_id', null, ['class' => 'form-control']) !!}
</div>