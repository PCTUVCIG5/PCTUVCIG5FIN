<div class="table-responsive">
    <table class="table" id="centreInterets-table">
        <thead>
        <tr>
            <th>Idhom</th>
        <th>Typecein</th>
        <th>Habitant Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($centreInterets as $centreInteret)
            <tr>
                <td>{{ $centreInteret->idHom }}</td>
            <td>{{ $centreInteret->typeCeIn }}</td>
            <td>{{ $centreInteret->habitant_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['centreInterets.destroy', $centreInteret->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('centreInterets.show', [$centreInteret->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('centreInterets.edit', [$centreInteret->id]) }}"
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
