<div class="table-responsive">
    <table class="table" id="demenagements-table">
        <thead>
        <tr>
            <th>Datedme</th>
        <th>Nouveauqtier</th>
        <th>Habitant Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($demenagements as $demenagement)
            <tr>
                <td>{{ $demenagement->dateDme }}</td>
            <td>{{ $demenagement->nouveauQtier }}</td>
            <td>{{ $demenagement->habitant_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['demenagements.destroy', $demenagement->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('demenagements.show', [$demenagement->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('demenagements.edit', [$demenagement->id]) }}"
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
