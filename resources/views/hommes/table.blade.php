<div class="table-responsive">
    <table class="table" id="hommes-table">
        <thead>
        <tr>
            <th>Idhom</th>
        <th>Habitant Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($hommes as $homme)
            <tr>
                <td>{{ $homme->idHom }}</td>
            <td>{{ $homme->habitant_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['hommes.destroy', $homme->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('hommes.show', [$homme->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('hommes.edit', [$homme->id]) }}"
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
