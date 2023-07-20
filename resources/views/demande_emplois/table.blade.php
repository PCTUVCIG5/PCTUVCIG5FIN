<div class="table-responsive">
    <table class="table" id="demandeEmplois-table">
        <thead>
        <tr>
            <th>Descriptiondman</th>
        <th>Cvdman</th>
        <th>Datedman</th>
        <th>Statutdman</th>
        <th>Habitant Id</th>
        <th>Offre Emploi Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($demandeEmplois as $demandeEmploi)
            <tr>
                <td>{{ $demandeEmploi->descriptionDman }}</td>
            <td>{{ $demandeEmploi->cvDman }}</td>
            <td>{{ $demandeEmploi->dateDman }}</td>
            <td>{{ $demandeEmploi->statutDman }}</td>
            <td>{{ $demandeEmploi->habitant_id }}</td>
            <td>{{ $demandeEmploi->offre_emploi_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['demandeEmplois.destroy', $demandeEmploi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('demandeEmplois.show', [$demandeEmploi->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('demandeEmplois.edit', [$demandeEmploi->id]) }}"
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
