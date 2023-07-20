<div class="table-responsive">
    <table class="table" id="metiers-table">
        <thead>
        <tr>
            <th>Nommtie</th>
        <th>Typemtie</th>
        <th>Statutmtie</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($metiers as $metier)
            <tr>
                <td>{{ $metier->nomMtie }}</td>
            <td>{{ $metier->typeMtie }}</td>
            <td>{{ $metier->statutMtie }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['metiers.destroy', $metier->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('metiers.show', [$metier->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('metiers.edit', [$metier->id]) }}"
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
