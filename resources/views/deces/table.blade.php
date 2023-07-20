<div class="table-responsive">
    <table class="table" id="deces-table">
        <thead>
        <tr>
            <th>Deces Date</th>
        <th>Deces Cause</th>
        <th>Habitant Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($deces as $dece)
            <tr>
                <td>{{ $dece->deces_date }}</td>
            <td>{{ $dece->deces_cause }}</td>
            <td>{{ $dece->habitant_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['deces.destroy', $dece->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('deces.show', [$dece->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('deces.edit', [$dece->id]) }}"
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
