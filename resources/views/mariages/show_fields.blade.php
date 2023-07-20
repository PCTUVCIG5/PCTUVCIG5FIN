<!-- Mariage Date Field -->
<div class="col-sm-12">
    {!! Form::label('mariage_date', 'Mariage Date:') !!}
    <p>{{ $mariage->mariage_date }}</p>
</div>

<!-- Mariage Lieu Field -->
<div class="col-sm-12">
    {!! Form::label('mariage_lieu', 'Mariage Lieu:') !!}
    <p>{{ $mariage->mariage_lieu }}</p>
</div>

<!-- Homme Id Field -->
<div class="col-sm-12">
    {!! Form::label('homme_id', 'Homme Id:') !!}
    <p>{{ $mariage->homme_id }}</p>
</div>

<!-- Femme Id Field -->
<div class="col-sm-12">
    {!! Form::label('femme_id', 'Femme Id:') !!}
    <p>{{ $mariage->femme_id }}</p>
</div>

