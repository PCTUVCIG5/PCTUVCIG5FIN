<div class="table-responsive">
    <table class="table" id="naissances-table">
        <thead>
        <tr>
            <th>Nom Nais</th>
        <th>Prenoms Nais</th>
        <th>Datenaissance Nais</th>
        <th>Lieunaissance Nais</th>
        <th>Mode Nais</th>
        <th>Lieuhabitation Nais</th>
        <th>Statutchef</th>
        <th>Homme Id</th>
        <th>Femme Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($naissances as $naissance)
            <tr>
                <td>{{ $naissance->nom_nais }}</td>
            <td>{{ $naissance->prenoms_nais }}</td>
            <td>{{ $naissance->dateNaissance_nais }}</td>
            <td>{{ $naissance->lieuNaissance_nais }}</td>
            <td>{{ $naissance->mode_nais }}</td>
            <td>{{ $naissance->lieuHabitation_nais }}</td>
            <td>{{ $naissance->statutChef }}</td>
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
