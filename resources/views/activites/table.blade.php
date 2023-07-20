<div class="table-responsive">
    <table class="table" id="activites-table">
        <thead>
        <tr>
            <th>NON DE L'ACTIVITE</th>
        <th>TYPE DE L'ACTIVITE</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($activites as $activite)
            <tr>
                <td>{{ $activite->nomActi }}</td>
            <td>{{ $activite->typeActi }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['activites.destroy', $activite->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('activites.show', [$activite->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('activites.edit', [$activite->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Êtes-vous sûr ?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
