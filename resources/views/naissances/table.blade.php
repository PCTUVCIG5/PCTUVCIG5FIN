<div class="table-responsive">
    <table class="table" id="naissances-table">
        <thead>
        <tr>
            <th>Prefecture</th>
        <th>Centretatcivil</th>
        <th>Registre</th>
        <th>Acte</th>
        <th>Date Acte</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Delivre A</th>
        <th>Delivre Le</th>
        <th>Delivre An</th>
        <th>Num Serie</th>
        <th>Naissance Jour Moi</th>
        <th>Naissance An</th>
        <th>Naissance Heure</th>
        <th>Naissance Minuite</th>
        <th>Naissance Nom Prenom</th>
        <th>Naissance Lieu</th>
        <th>Naissance Sexe</th>
        <th>Declaration Faite Par</th>
        <th>Declaration Recue Pa</th>
        <th>Homme Id</th>
        <th>Femme Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($naissances as $naissance)
            <tr>
                <td>{{ $naissance->prefecture }}</td>
            <td>{{ $naissance->centretatcivil }}</td>
            <td>{{ $naissance->registre }}</td>
            <td>{{ $naissance->acte }}</td>
            <td>{{ $naissance->date_acte }}</td>
            <td>{{ $naissance->nom }}</td>
            <td>{{ $naissance->prenom }}</td>
            <td>{{ $naissance->delivre_a }}</td>
            <td>{{ $naissance->delivre_le }}</td>
            <td>{{ $naissance->delivre_an }}</td>
            <td>{{ $naissance->num_serie }}</td>
            <td>{{ $naissance->naissance_jour_moi }}</td>
            <td>{{ $naissance->naissance_an }}</td>
            <td>{{ $naissance->naissance_heure }}</td>
            <td>{{ $naissance->naissance_minuite }}</td>
            <td>{{ $naissance->naissance_nom_prenom }}</td>
            <td>{{ $naissance->naissance_lieu }}</td>
            <td>{{ $naissance->naissance_sexe }}</td>
            <td>{{ $naissance->declaration_faite_par }}</td>
            <td>{{ $naissance->declaration_recue_pa }}</td>
            <td>{{ $naissance->homme_id }}</td>
            <td>{{ $naissance->femme_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['naissances.destroy', $naissance->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('naissances.show', [$naissance->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('naissances.edit', [$naissance->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
