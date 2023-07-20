<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Image1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image1', 'Image1:') !!}
    {!! Form::file('image1', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Image2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image2', 'Image2:') !!}
    {!! Form::file('image2', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Image3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image3', 'Image3:') !!}
    {!! Form::file('image3', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div> 

<!-- Typeactu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('typeActu', 'Typeactu:') !!}
    {!! Form::text('typeActu', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Statutactu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('statutActu', 'Statutactu:') !!}
    {!! Form::text('statutActu', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>