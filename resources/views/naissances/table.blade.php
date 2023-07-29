<div class="table-responsive">
    <table class="table" id="naissances-table">
        <thead>
        <tr>
            <th>Nom du bebe</th>
        <th>Prenoms du bebe</th>
        <th>Date naissance</th>
        <th>Lieu naissance</th>
        <th>Mode de naissance</th>
        <th>Lieu habitation</th>
        <th>nom de la mere</th>
        <th>nom du pere</th>
            <!-- <th colspan="3">Action</th> -->
            <th>statut</th>
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
            <td>{{ $naissance->homme->nomHomm }} {{ $naissance->homme->prenHomm }}</td>
            <td>{{ $naissance->femme->nomFemm }} {{ $naissance->femme->prenFemm }}</td>
                <!-- <td width="120">
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
                </td> -->
                <td width="120">
                @if($naissance->statutChef==1)
                <a href="{{ url('change-status-naissance/'.$naissance->id) }}" onclick="return confirm('Voulez-vous desactiver {{ $naissance->name }}?')" class="btn btn-sm btn-success"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Validé</a>
                @else
                <a href="{{ url('change-status-naissance/'.$naissance->id) }}" onclick="return confirm('Voulez-vous activer {{ $naissance->name }}?')" class="btn btn-sm btn-danger"><i class="fa fa-minus-circle" aria-hidden="true"></i> attente</a>
                @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
